<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    protected $fillable = [
        'address',
        'city',
        'country',
        'postcode'
    ];

    use SoftDeletes;

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
