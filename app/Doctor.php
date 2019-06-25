<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{


    protected $fillable = [
        'D_name', 'gender', 'salary', 'B_date' , 'adress' , 'contact_num' , 'Dep_ID'
    ];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
