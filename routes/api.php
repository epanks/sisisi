<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(['user' => 'API\UserController']);
Route::apiResources(['provinsi' => 'API\ProvinsiController']);
Route::apiResources(['kecamatan' => 'API\KecamatanController']);
Route::apiResources(['kabupaten' => 'API\KabupatenController']);
Route::apiResources(['desa' => 'API\DesaController']);
Route::apiResources(['paket' => 'API\PaketController']);
Route::apiResources(['paket_emon' => 'API\Paket_emonController']);
Route::apiResources(['stock' => 'API\StockController']);
Route::apiResources(['baseline' => 'API\BaselineController']);
Route::apiResources(['wdse' => 'API\WdseController']);
Route::apiResources(['sungai' => 'API\SungaiController']);
Route::apiResources(['pah' => 'API\PahController']);
Route::apiResources(['ma' => 'API\MaController']);
Route::apiResources(['at' => 'API\ATController']);
Route::apiResources(['balai' => 'API\BalaiController']);
Route::apiResources(['satker' => 'API\SatkerController']);
