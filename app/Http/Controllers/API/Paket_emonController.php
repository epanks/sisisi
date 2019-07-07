<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paket_emon;

class Paket_emonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Paket_emon::all();
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
        $this->validate($request, [
            'nmpaket' => 'required|string|max:255'
        ]);
        return Paket::create([
            'kdsatker' => $request['kdsatker'],
            'nmpaket' => $request['nmpaket'],
            'pagurmp' => $request['pagurmp'],
            'trgoutput' => $request['trgoutput'],
            'satoutput' => $request['satoutput'],
            'trgoutcome' => $request['trgoutcome'],
            'satoutcome' => $request['satoutcome'],
            'kdpengadaan' => $request['kdpengadaan'],
            'kdjnspaket' => $request['kdjnspaket'],
            'kdjnskon' => $request['kdjnskon'],
            'kdoutput' => $request['kdoutput']
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
