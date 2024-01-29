<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/welcome-page', action: function () {
    return response(content:'<h2> Welcome on our awesome page! </h2>', status: 200)
        ->header(key: 'Content-Type', values: 'text/plain')
        ->header(key: 'foo', values: 'custom-value');
});

Route::get(uri: '/posts/{id}', action: function ($id) {
    /**
     * dd() - is a helper method for debugging
     */
    //dd($id);
    return response(content: 'This is ' . $id . 'th post');
})->where(name:'id', expression: '[0-9]+');

Route::get(uri: '/search', action: function (Request $request) {
    //dd(vars: $request);
    return 'Welcome, ' . $request->user . ' from ' . $request->city . '!';
});
