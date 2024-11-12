<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class objectives extends Model
{
   
    public $timestamps = false;

     protected $fillable = [
        'objective_id',
        'objective',
        'id',
    ];
 //   protected $primaryKey = 'tags_id';
 //   public $incrementing = false;
  //  protected $keyType = 'string';
}
