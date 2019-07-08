<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'tblkabupaten';


    protected $fillable = [
        'id', 'name', 'province_id'
    ];
}
