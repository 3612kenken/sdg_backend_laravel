<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class waypoints extends Model
{
    public $timestamps = false;

     protected $fillable = [
        'waypoint_id',
        'waypoint',
        'id',
    ];
}
