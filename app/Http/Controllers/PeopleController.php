<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PeopleImport;

class PeopleController extends Controller
{
    public function import()
    {
        Excel::import(new PeopleImport, request()->file('people'));
        return redirect('/')->with('status', '成功');
    }
}
