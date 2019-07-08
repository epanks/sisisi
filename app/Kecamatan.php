<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'tblkecamatan';


    protected $fillable = [
        'id', 'name', 'regency_id'
    ];
}
