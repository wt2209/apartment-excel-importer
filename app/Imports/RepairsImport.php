<?php

namespace App\Imports;

use App\Repair;
use Maatwebsite\Excel\Concerns\ToModel;

class RepairsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // ['id', 'location', 'name', 'content', 'phone_number', 'input_user_id', 'review_user_id', 'reviewed_at', 'is_passed', 'review_remark', 'printed_at', 'finished_at', 'finisher', 'finish_remark', 'estimate', 'created_at', 'updated_at']
        $row['created_at'] = strtotime($row['created_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['created_at'])) : now();
        $row['updated_at'] = strtotime($row['updated_at']) !== false ? date('Y-m-d H:i:s', strtotime($row['updated_at'])) : now();
        return new Repair($row);
    }
}
