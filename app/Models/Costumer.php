<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model 
{
      /**
     * The attributes that are mass assignable
     *
     * @var array
     * @var bool
     */
     public $timestamps = false;
    
     protected $fillable = [
        'fname',
        'lname',
        'phone',
        'address',
        'city',
        'poBox'
     ];
}