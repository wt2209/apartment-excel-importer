<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillsController extends Controller
{
    public function import()
    {
        Excel::import(new \App\Imports\BillsImport, request()->file('bills'));
        return redirect('/')->with('status', '成功');
    }
}
