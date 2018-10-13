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
        'heading' => "['id', 'title', 'fee_type', 'has_contract', 'has_rent_fee', 'remark', 'created_at', 'updated_at']"
    ],
    [
        'title' => 'records', 
        'label' => '记录', 
        'heading' => "['id', 'person_id', 'room_id', 'type_id', 'record_at', 'start_at', 'end_at', 'status', 'to_room_id', 'deleted_at', 'created_at', 'updated_at']"
    ],
    [
        'title' => 'repairs', 
        'label' => '维修', 
        'heading' => "['id', 'location', 'name', 'content', 'phone_number', 'input_user_id', 'review_user_id', 'reviewed_at', 'is_passed', 'review_remark', 'printed_at', 'finished_at', 'finisher', 'finish_remark', 'estimate', 'created_at', 'updated_at']"
    ],
    [
        'title' => 'bills', 
        'label' => '费用', 
        'heading' => "['id', 'location', 'name', 'bill_type_id', 'turn_in', 'cost', 'is_refund', 'explain', 'remark', 'input_user_id', 'payed_at', 'pay_user_id', 'created_at', 'updated_at']"
    ],
    [
        'title' => 'billTypes', 
        'label' => '费用类型', 
        'heading' => "['id', 'title', 'turn_in', 'remark', 'created_at', 'updated_at']"
    ],
];

Route::get('/', function () use ($routes) {
    return view('index', compact('routes'));
});


foreach ($routes as $route) {
    Route::post($route['title'], ucwords($route['title']) . 'Controller@import');
}
