<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    protected $table = 'people';

    public function scopeIsConfirmed($query)
    {
        return $query->where('is_confirmed', true);
    }

    public function scopeNameEq($query, $name)
    {
        return $query->where('name', $name);
    }

}
