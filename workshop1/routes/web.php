<?php

use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/routes', 'App\Http\Controllers\RouteController@index')->name("route.index");
Route::get('/routes/create', 'App\Http\Controllers\RouteController@create')->name("route.create");
Route::post('/routes/save', 'App\Http\Controllers\RouteController@save')->name("route.save");
Route::get('/routes/{id}', 'App\Http\Controllers\RouteController@show')->name("route.show");
Route::delete('/routes/{id}/delete','App\Http\Controllers\RouteController@delete')->name("route.delete"); 
Route::get('/fishes', 'App\Http\Controllers\FishController@index')->name("fish.index");
Route::get('/fishes/create', 'App\Http\Controllers\FishController@create')->name("fish.create");
Route::post('/fishes/save', 'App\Http\Controllers\FishController@save')->name("fish.save");
Route::get('/fishes/stats', 'App\Http\Controllers\FishController@stats')->name("fish.stats");
Route::get('/fishes/{id}', 'App\Http\Controllers\FishController@show')->name("fish.show");