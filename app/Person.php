<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    protected $fillable = [
        'name',
        'birth_date',
        'email',
        'address_id'
    ];

    use SoftDeletes;

    public function pet()
    {
        return $this->hasMany('App\Pet');
    }

    public function address()
    {
        return $this->belongsTo('App\Address');
    }
}
