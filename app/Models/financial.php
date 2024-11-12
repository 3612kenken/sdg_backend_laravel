<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class financial extends Model
{
    public $timestamps = false;
     protected $fillable = [
        'financial_id',
        'financials',
        'resource_id',
    ];
}
