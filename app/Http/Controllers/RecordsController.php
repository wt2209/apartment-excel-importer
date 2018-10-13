<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function import()
    {
        Excel::import(new \App\Imports\RecordsImport, request()->file('records'));
        return redirect('/')->with('status', '成功');
    }
}
