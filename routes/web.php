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
//create page view
/*Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/service', function(){
    return view('pages.service');
});*/

Route::get('/team', function(){
    return view('pages.team');
});
//--//
//dynamic route --get id--
Route::get('/users/{id}', function($id){
    return 'This is user '.$id;
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user, '.$name.' with an id of '.$id;
});

//controller
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/service', 'PagesController@service');