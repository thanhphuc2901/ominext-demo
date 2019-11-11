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
/* Đoạn code route Laravel proxy - có thể sử dụng như 1 Vue router */
/* Created by phuclv - 11/11/2019 */
Route::get('/{any}', function () {
  return view('post');
})->where('any', '.*');

Route::get('/{any}', function () {
  return view('welcome');
})->where('any', '.*');
