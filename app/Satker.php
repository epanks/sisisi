<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'tblsatker';


    protected $fillable = [
        'kdsatker', 'nmsatker', 'balai_id'
    ];
}
