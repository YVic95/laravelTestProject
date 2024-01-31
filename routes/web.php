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
    return view('listings', [
        'heading' => 'These are the latest listings!',
        'listings' => [
            [
                'id' => '1',
                'title' => 'Listing One',
                'description' => 'Spanish (español) or Castilian (castellano) 
                    is a Romance language of the Indo-European language family 
                    that evolved from the Vulgar Latin spoken on the Iberian 
                    Peninsula of Europe'
            ],
            [
                'id' => '2',
                'title' => 'Listing Two',
                'description' => 'Romanian is a Romance language, belonging to 
                    the Italic branch of the Indo-European language family, 
                    having much in common with languages such as Italian, 
                    Spanish, French and Portuguese. Compared with the other Romance 
                    languages, the closest relative of Romanian is Italian.'
            ]
        ]
    ]);
});
