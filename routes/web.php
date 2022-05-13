<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view("index",[
        "title" => "Beranda",
        "nama"=>"Nama : Hamid Habirin",
        "kelas"=>"Kelas : XI RPL 4",
        "alamat"=>"Alamat : Kanding",
        "gambar"=>"2.jpg",
        "des1"=>"Selamat datang di website portofoilio saya.",
        "des2"=>"Silahkan explore website ini dengan baik dan bijak",
        "des3"=>"Jika ada yang ingin di tanyakan silahkan tanyakan di melalui ContacUs."
    ]);
});

Route::get('/1', function(){
    return view ('about',[
        "title" => 'About',
        "nama"=>"Nama : Hamid Habirin",
        "umur"=>"Umur : 17 Tahun",
        "sekolah"=>"Sekolah : SMK Telkom Purwokerto",
        "kelas"=>"Kelas : XI RPL 4",
        "alamat"=>"Alamat : Kanding",
        "gambar"=>"2.jpg",
        "bg"=>"bg.jpg",
        "des"=>"Saya Hamid Sabirin biasa di panggil Hamid, umur 17 tahun, saya seorang siswa SMK Telkom Purwokerto",
        "des2"=>"yang memiliki pengetahuan tentang web developer yang baik serta skill pada web developer.", 
        "des3"=>"Saya memiliki kemampuan komunikasi yang baik dalam kerja sama tim, dan aktif pada tim.",
        "des4"=>"Saya mempunyai pengalaman dalam pembuatan web pada pembelajaran di sekolah."
    ]);
});

Route::get('/2', function(){
    return view('gallery',[
        "title" => "Experience",
        "judul"=>"1. Toko Online Laptop",
        "judul2"=>"2. Portofolio",
        "judul3"=>"3. Kalkulator",
        "judul4"=>"4. Desain",
        "gambardes"=>"desain.jpg",
        "gambarkal"=>"kalkulator.jpg",
        "gambarporto"=>"porto.jpg",
        "gambartoko"=>"toko.jpg",
        "destoko"=>"Toko laptop dengan bahasa pemograman PHP ",
        "desporto"=>"Website portofolio dengan html, css dan js",
        "deskalku"=>"Kalkulator dengan bahasa javascript",
        "desdesain"=>"Desain sebuah halaman dengan figma",
    ]);
});


//Route::resource('/contacts',ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::resource('foto', BlogController::class,);
Auth::routes();

Route::group(['middleware' =>['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
});
