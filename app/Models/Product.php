<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table    = 'product';
    protected $fillable = ['name','cost','updated_at','created_at'];
}
