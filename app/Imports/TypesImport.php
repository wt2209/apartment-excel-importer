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
        return new Type([
            //
        ]);
    }
}
