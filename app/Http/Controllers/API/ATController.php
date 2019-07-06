<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\At;

class ATController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = At::all();
        return response()->json([
            'data' => $model
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|string|max:225',
        //     'password' => 'required|string|min:6'
        // ]);
        return At::create([
            'NamaBalai' => $request['NamaBalai'],
            'kodefikasi' => $request['kodefikasi'],
            'nama_cat' => $request['nama_cat'],
            'nama_das' => $request['nama_das'],
            'nama_ws' => $request['nama_ws'],
            'provinsi' => $request['provinsi'],
            'kota' => $request['kota'],
            'kecamatan' => $request['kecamatan'],
            'desa' => $request['desa'],
            'lintang_selatan' => $request['lintang_selatan'],
            'bujur_timur' => $request['bujur_timur'],
            'elevasi_sumur' => $request['elevasi_sumur'],
            'status' => $request['status'],
            'kriteria' => $request['kriteria']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
