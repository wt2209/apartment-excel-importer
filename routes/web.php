<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$routes = [
    [
        'title' => 'rooms', 
        'label' => '房间', 
        'heading' => "['id', 'type_id', 'title', 'building', 'unit', 'person_number', 'remark', 'created_at', 'updated_at']"
    ],
    [
        'title' => 'people', 
        'label' => '人员', 
        'heading' => "['id', 'name', 'identify', 'gender', 'department', 'entered_at', 'contract_start', 'contract_end', 'education', 'phone_number', 'remark', 'created_at', 'updated_at']"
    ],
    [
        'title' => 'types', 
        'label' => '类型', 
        'heading' => ''
    ],
    [
        'title' => 'records', 
        'label' => '记录', 
        'heading' => ''
    ],
    [
        'title' => 'repairs', 
        'label' => '维修', 
        'heading' => ''
    ],
    [
        'title' => 'bills', 
        'label' => '费用', 
        'heading' => ''
    ],
    [
        'title' => 'billTypes', 
        'label' => '费用类型', 
        'heading' => ''
    ],
];

Route::get('/', function () use ($routes) {
    return view('index', compact('routes'));
});


foreach ($routes as $route) {
    Route::post($route['title'], ucwords($route['title']) . 'Controller@import');
}
