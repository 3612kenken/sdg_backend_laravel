<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserAccount extends Model
{
    use HasFactory;
    public $timestamps = false;

     protected $fillable = [

        'fullname',
        'username',
        'password',
        'designation',
    ];
}
