<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'tbldesa';


    protected $fillable = [
        'id', 'name', 'district_id'
    ];
}
