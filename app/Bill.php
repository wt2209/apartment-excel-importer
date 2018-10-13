<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['id', 'location', 'name', 'bill_type_id', 'turn_in', 'cost', 'is_refund', 'explain', 'remark', 'input_user_id', 'payed_at', 'pay_user_id', 'created_at', 'updated_at'];
}
