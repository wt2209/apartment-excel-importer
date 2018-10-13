<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['id', 'title', 'fee_type', 'has_contract', 'has_rent_fee', 'remark', 'created_at', 'updated_at'];
}
