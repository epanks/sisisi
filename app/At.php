<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class At extends Model
{
    protected $table = 't_sumur1';


    protected $fillable = [
        'NamaBalai', 'kodefikasi', 'nama_cat', 'nama_das', 'nama_ws', 'provinsi', 'kota', 'kecamatan', 'desa', 'lintang_selatan', 'bujur_timur', 'elevasi_sumur', 'status', 'kriteria'
    ];
}
