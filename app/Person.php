<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'identify', 'gender', 'department', 'entered_at', 'contract_start', 'contract_end', 'education', 'phone_number', 'remark'];
}
