<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paket;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Paket::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nmpaket' => 'required|string|max:255'
        ]);
        return Paket::create([
            'nmpaket' => $request['nmpaket'],
            'pagurmp' => $request['pagurmp'],
            'output' => $request['output'],
            'satoutput' => $request['satoutput'],
            'outcome' => $request['outcome'],
            'satoutcome' => $request['satoutcome'],
            'kdpengadaan' => $request['kdpengadaan'],
            'kdjnspaket' => $request['kdjnspaket'],
            'kdjnskon' => $request['kdjnskon'],
            'kdoutput' => $request['kdoutput'],
            'id_progres' => $request['id_progres'],
            'id_tayang' => $request['id_tayang'],
            'id_kontrak' => $request['id_kontrak'],
            'thnanggaran' => $request['thnanggaran'],
            'kdsatker' => $request['kdsatker'],
            'id_note' => $request['id_note'],
            'id_masalah' => $request['id_masalah']
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
