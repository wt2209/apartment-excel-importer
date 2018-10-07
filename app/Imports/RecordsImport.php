<?php

namespace App\Imports;

use App\Record;
use Maatwebsite\Excel\Concerns\ToModel;

class RecordsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Record([
            //
        ]);
    }
}
