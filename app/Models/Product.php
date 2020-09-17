<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'name',
      'price',
      'weight',
      'active',
      'quantity',
      'quantity_alert',
      'image',
      'description'
    ];
}
