<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = [
            'id',
            'title',
            'logo',
            'description',
            'abstract',
            'overview',
            'image',
            'link',
            'content',
            'launchd',
            'proponent',
            'progress',
            'problems',
            'solution',
            'completion',
            'output',
            'costing',
            'future',
    ];
}
