<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepairsController extends Controller
{
    public function import()
    {
        Excel::import(new \App\Imports\RepairsImport, request()->file('repairs'));
        return redirect('/')->with('status', '成功');
    }
}
