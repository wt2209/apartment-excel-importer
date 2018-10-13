<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exceptions\ExcelImportErrorException;

class RepairsController extends Controller
{
    public function import()
    {
        Excel::import(new \App\Imports\RepairsImport, request()->file('repairs'));
        return redirect('/')->with('status', '成功');
    }
}
