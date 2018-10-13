<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['id', 'title', 'turn_in', 'remark', 'created_at', 'updated_at'];
}
