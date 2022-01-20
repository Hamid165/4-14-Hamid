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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/', function(){
    return view("home",[
        "tittle" => "Home"
    ]);
});

Route::get('/1', function(){
    return view ('about',[
        "tittle" => 'About',
        "nama"=>"Nama : hamid sabirin",
        "kelas"=>"Kelas : XI RPL 4",
        "alamat"=>"Alamat : Kanding",
        "gambar"=>"2.jpg"
    ]);
});

Route::get('/2', function(){
    return view('gallery',[
        "tittle" => 'Gallery'
    ]);
});
