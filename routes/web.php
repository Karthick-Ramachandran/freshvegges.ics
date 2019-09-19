<?php
use DB;
use Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/loc/{id}', function() {
$user = DB::table('location')->limit(200)->get();
return response()->json($user);
});
Route::get('/loce', function() {
$user = DB::table('location')->get();
return response()->json($user);
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login1', [
    'uses' => 'LoginAuthController@index'
]);
Route::post('/login1', [
    'uses' => 'LoginAuthController@store',
    'as' => 'login1'
]);
Route::get('/login2', [
    'uses' => 'LoginAuthController@show'
]);
Route::get('/login3', [
    'uses' => 'LoginAuthController@login3'
]);
Route::post('/login2', [
    'uses' => 'LoginAuthController@edit',
    'as' => 'login2'
]);
Route::post('/mail', [
    'uses' => 'LoginAuthController@mail',
]);

  Route::get('/smaralertimage',[
        'uses' => 'ImageUploadController@smartImage'
        ]);
Route::get('/recognition', function () {
   
    return view('recognition');
});

Route::get('/gait/view', function() {
    $reg = DB::table('gait')->get();
return view('gaiview')->with('reg',  $reg);

});
Route::get('/admin', [
    'uses' => 'HomeController@get',
]);

Route::get('/upload/image',[
'uses' => 'ImageUploadController@index'
]);

Route::get('/maps', function() {
    return view('mapfunction');
})->middleware('authn');

Route::get('/finalauth', function() {
    return view('final');

});
 Route::get('/objectdec', function () {
    $obj = DB::table('db_out_medialog')->where('objectdetection', "!=", null)->get();
    return view('objectdec')->with('obj', $obj);
})->middleware('authn');
Route::get('/want', function() {
$app = DB::table('wanted')->where('user_id', '=', Auth::user()->id)->get();   
 return view('wanted')->with('app', $app);
   })->middleware('authn');
Route::get('/data',[
    'uses' => 'ImageUploadController@show'
    ]);
Route::get('/facerec', function () {
    $fac = DB::table('db_out_medialog')->where('face1', "!=", null)->get();
    $app = DB::table('facereg')->get();

    return view('facereg')->with('fac', $fac)->with('app', $app);
})->middleware('authn');
Route::get('/getcsv1', function() {
 return response()->download(public_path('csv/original.csv'));
});
Route::get('/getcsv2', function() {
    return response()->download(public_path('csv/original.csv'));
   });
 Route::get('/numberplate', function () {
    $num = DB::table('db_out_medialog')->where('numberplatte', "!=", null)->get();

    return view('numberplate')->with('num', $num);
})->middleware('authn');
   Route::get('/changep', function() {
    return view('changep');
   })->middleware('authn');


Route::post('/upload/image',[
    'uses' => 'ImageUploadController@store',
'as' => 'upload'
    ]);

    Route::post('/changep',[
    'uses' => 'ImageUploadController@changep',
'as' => 'change'
    ]);

      Route::get('/smaralert',[
    'uses' => 'ImageUploadController@smart',
'as' => 'sm'
    ]);
  Route::get('/api/sm',[
    'uses' => 'ImageUploadController@api',
'as' => 'sd'
    ]);

  Route::get('/mapp', function() {
   return view('mapping');
  });
Route::get('/gait/upload', 'GaitController@upload');
Route::post('/gait/upload', [
    'uses' => 'GaitController@post',
    'as' => 'GaitUpload'
]);
Route::get('/tables', function (){
$tables = DB::select('SHOW TABLES');

    
 $tables = array_map('current',$tables);

dd($tables);
});
