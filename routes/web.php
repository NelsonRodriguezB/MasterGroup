<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');










Route::put('/credential/{key}/{shared_secret}', function (Request $request, $key, $shared_secret) {
	if(!empty($key)) {
		$article = Message::findOrFail($key);
		if(!empty($article)) {
	    	$article->update($request->all());
	    	return response()->json($article, 200);

		}
		else {
			return response()->json('No puede duplicar el mensaje', 204);
		}
	}
	else {
		return response()->json('No envió el parámetro key', 403);
	}
});

Route::post('/message', function (Request $request) {
	if(!empty($request->msg)) {
		$strMessage = Message::findOrFail($request->msg);
		if(!empty($strMessage)) {
			return response()->json('Ok', 200);
		}
	}
	return response()->json('No envió el parámetro msg', 403);
});

Route::get('/message/{id}', function (Request $request, $id) {
	$arrMessageID =  Message::find($id);
	if(!empty($arrMessageID)) {
		return response()->json('Ok', 200);
	}
});
