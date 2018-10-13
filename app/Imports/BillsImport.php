<?php

namespace App\Imports;

use App\Bill;
use Maatwebsite\Excel\Concerns\ToModel;

class BillsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // ['id', 'location', 'name', 'bill_type_id', 'turn_in', 'cost', 'is_refund', 'explain', 'remark', 'input_user_id', 'payed_at', 'pay_user_id', 'created_at', 'updated_at']
        $row['created_at'] = strtotime($row['created_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['created_at'])) : now();
        $row['updated_at'] = strtotime($row['updated_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['updated_at'])) : now();
        return new Bill($row);
    }
}
