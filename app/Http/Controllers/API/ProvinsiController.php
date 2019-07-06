<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Provinsi;


class ProvinsiController extends Controller
{

    public function index()
    {
        return Provinsi::latest()->paginate(10);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:225',
            'password' => 'required|string|min:6'
        ]);
        return Provinsi::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => $request['type'],
            'bio' => $request['bio'],
            'photo' => $request['photo'],
            'password' => $request['password']
        ]);
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
