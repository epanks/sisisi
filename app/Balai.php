<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balai extends Model
{
    protected $table = 'tbl_balai';


    protected $fillable = [
        'nmbalai', 'id_wilayah'
    ];
}
