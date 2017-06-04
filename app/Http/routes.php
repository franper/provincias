<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/','MapController@index');
Route::resource('result','MapController');

Route::post('province',[
	'as' => 'province',
	'uses' => 'MapController@index'
]);

Route::post('map',[
	'as' => 'map',
	'uses' => 'MapController@map'
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('tags', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $tags = App\Provincia::where('name', 'like', $term.'%')->lists('name', 'id');
    $valid_tags = [];
    foreach ($tags as $id => $tag) {
        $valid_tags[] = ['id' => $id, 'text' => $tag];
    }
    return \Response::json($valid_tags);
});

