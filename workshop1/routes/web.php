<?php

use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/routes', 'App\Http\Controllers\RouteController@index')->name("route.index");
Route::get('/routes/create', 'App\Http\Controllers\RouteController@create')->name("route.create");
Route::post('/routes/save', 'App\Http\Controllers\RouteController@save')->name("route.save");
Route::get('/routes/{id}', 'App\Http\Controllers\RouteController@show')->name("route.show");
Route::delete('/routes/{id}/delete','App\Http\Controllers\RouteController@delete')->name("route.delete"); 