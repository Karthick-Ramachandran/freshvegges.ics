<?php

use Illuminate\Http\Request;
use DB;


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


Route::post('/save/{id}',[
    'uses' => 'LoginAuthController@getchange'
    ]);

    
    Route::get('/save/{id}',[
        'uses' => 'LoginAuthController@ch'
        ]);
Route::get('/data', function(){
  DB::table('db_org_medialog')->where('id', '=', 22)->delete();
        return response()->json('del');
});
