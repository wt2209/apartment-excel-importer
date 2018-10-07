<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['id', 'type_id', 'title', 'building', 'unit', 'person_number', 'remark', 'created_at', 'updated_at'];

}
