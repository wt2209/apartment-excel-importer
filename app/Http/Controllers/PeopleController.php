<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PeopleImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exceptions\ExcelImportErrorException;

class PeopleController extends Controller
{
    public function import()
    {
        Excel::import(new PeopleImport, request()->file('people'));
        return redirect('/')->with('status', '成功');
    }
}
