<?php

namespace App\Imports;

use App\BillType;
use Maatwebsite\Excel\Concerns\ToModel;

class BillTypesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BillType([
            //
        ]);
    }
}
