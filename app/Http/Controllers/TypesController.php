<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\TypesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exceptions\ExcelImportErrorException;

class TypesController extends Controller
{
    public function import()
    {
        Excel::import(new TypesImport, request()->file('types'));
        return redirect('/')->with('status', '成功');
    }
}
