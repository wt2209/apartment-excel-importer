<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['id', 'person_id', 'room_id', 'type_id', 'record_at', 'start_at', 'end_at', 'status', 'to_room_id', 'deleted_at', 'created_at', 'updated_at'];
}
