<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{

    protected $table = 'users';


    protected $fillable = [
        'name', 'email', 'password', 'bio', 'type', 'photo'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
