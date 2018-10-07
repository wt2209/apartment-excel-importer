<?php

namespace App\Imports;

use App\Room;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RoomsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // ['id', 'type_id', 'title', 'building', 'unit', 'person_number', 'remark', 'created_at', 'updated_at']
        $row['created_at'] = strtotime($row['created_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['created_at'])) : now();
        $row['updated_at'] = strtotime($row['updated_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['updated_at'])) : now();
        return new Room($row);
    }
}
