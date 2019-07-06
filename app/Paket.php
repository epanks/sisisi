<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'tbl_paket';


    protected $fillable = [
        'nmpaket', 'pagurmp', 'output', 'satoutput', 'outcome', 'satoutcome', 'kdpengadaan', 'kdjnspaket', 'kdjnskon', 'kdoutput', 'id_progres', 'id_tayang', 'id_kontrak', 'thnanggaran', 'kdsatker', 'id_note', 'id_masalah'
    ];
}
