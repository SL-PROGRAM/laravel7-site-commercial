<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereActive(bool $true)
 */
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
