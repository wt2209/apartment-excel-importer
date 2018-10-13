<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillTypesController extends Controller
{
    public function import()
    {
        Excel::import(new \App\Imports\BillTypesImport, request()->file('billTypes'));
        return redirect('/')->with('status', '成功');
    }
}
