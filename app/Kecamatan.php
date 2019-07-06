<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'users';


    protected $fillable = [
        'name', 'email', 'password', 'bio', 'type', 'photo'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
