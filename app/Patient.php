<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'P_name'
    ];

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function treatment()
    {
        return $this->hasMany('App\Treatment');
    }
}
