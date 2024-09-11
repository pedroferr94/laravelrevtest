<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    protected $fillable = [
        'name',
        'person_id',
        'color',
        'birthday'
];

    use SoftDeletes;

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
