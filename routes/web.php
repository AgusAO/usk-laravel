<?php

use App\Models\Menu;
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
    return view('land', [
        "title" => "Kasir APK"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Kasir | About",
        "nama" => "M Bambang Agus H",
        "kelas" => "XII RPL",
        "alamat" => "Pejawaran"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Kasir | Home",
        "nama" => "M Bambang Agus H",
        "kelas" => "XII RPL",
        "alamat" => "Pejawaran"
    ]);
});

Route::get('/barang', function () {
    return view('barang', [
        "title" => "Kasir | Barang",
        "barangs" => Menu::all()
        //     "barang" => $barang
    ]);
});

Route::get('/login', function () {
    return view('login/login', [
        "title" => "Kasir | About",
        "nama" => "M Bambang Agus H",
        "kelas" => "XII RPL",
        "alamat" => "Pejawaran"
    ]);
});
