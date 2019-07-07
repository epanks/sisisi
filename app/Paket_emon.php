<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket_emon extends Model
{
    protected $table = 'tblpaketaccess';


    protected $fillable = [
        'nmpaket', 'pagurmp', 'trgoutput', 'satoutput', 'trgoutcome', 'satoutcome', 'kdpengadaan', 'kdjnspaket', 'kdjnskon', 'kdoutput'
    ];
}
