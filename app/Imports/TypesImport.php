<?php

namespace App\Imports;

use App\Type;
use Maatwebsite\Excel\Concerns\ToModel;

class TypesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // ['id', 'title', 'fee_type', 'has_contract', 'has_rent_fee', 'remark', 'created_at', 'updated_at']
        $row['created_at'] = strtotime($row['created_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['created_at'])) : now();
        $row['updated_at'] = strtotime($row['updated_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['updated_at'])) : now();
        return new Type($row);
    }
}
