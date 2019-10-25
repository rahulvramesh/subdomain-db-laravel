<?php

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

// Route::group(['domain' => $domain, 'middleware' => 'subdomain'],function () {});

Route::middleware('CheckAge')->domain('{account}.laravel.test')->group(function () {

    Route::get('/', function ($account) {
        echo $account;
    });


    Route::get('/links', function () {
        $links = \App\Link::all();
    
        return view('welcome', ['links' => $links]);
    });
    
});

// Route::get('/', function () {
//     //return view('welcome');

//     // $url = parse_url(URL::all());

//     // $domain = explode('.', $url['host']);
 
//     // $subdomain = $domain[0];

//     // dd($url);

//     echo 'test';
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
