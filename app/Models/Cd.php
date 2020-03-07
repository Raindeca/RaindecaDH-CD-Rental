<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model 
{
      /**
     * The attributes that are mass assignable
     *
     * @var array
     * @var bool
     */
     public $timestamps = false;
    
     protected $fillable = [
         'title',
         'rate',
         'category',
         'quantity',
     ];
}