<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['id', 'location', 'name', 'content', 'phone_number', 'input_user_id', 'review_user_id', 'reviewed_at', 'is_passed', 'review_remark', 'printed_at', 'finished_at', 'finisher', 'finish_remark', 'estimate', 'created_at', 'updated_at'];
}
