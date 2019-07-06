<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'tbl_satker';


    protected $fillable = [
        'kdsatker', 'nmsatker', 'balai_id'
    ];
}
