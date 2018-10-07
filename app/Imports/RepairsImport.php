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
        return new Repair([
            //
        ]);
    }
}
