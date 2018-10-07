<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\RoomsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exceptions\ExcelImportErrorException;

class RoomsController extends Controller
{
    public function import()
    {
        Excel::import(new RoomsImport, request()->file('rooms'));
        return redirect('/')->with('status', '成功');
    }
}
