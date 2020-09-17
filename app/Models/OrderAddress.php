<?php

namespace App\Models;

use App\Country;
use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
    protected $fillable = [
        'name',
        'firstname',
        'professionnal',
        'civility',
        'company',
        'address',
        'addressbis',
        'bp',
        'postal',
        'city',
        'phone',
        'country_id',
        'facturation',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
