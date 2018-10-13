<?php

namespace App\Imports;

use App\Person;
use Maatwebsite\Excel\Concerns\ToModel;

class PeopleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // ['id', 'name', 'identify', 'gender', 'department', 'entered_at', 'contract_start', 'contract_end', 'education', 'phone_number', 'remark', 'created_at', 'updated_at']
        $row['created_at'] = strtotime($row['created_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['created_at'])) : now();
        $row['updated_at'] = strtotime($row['updated_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['updated_at'])) : now();
        return new Person($row);
    }
}
