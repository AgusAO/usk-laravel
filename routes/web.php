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
    $barang = [
        [
            "nama" => "Capuccino Coffe",
            "harga" => "15000",
            "ket" => "200ml",
            "gambar" => "cappuccino.jpg"
        ],
        [
            "nama" => "Coffe Latte",
            "harga" => "25000",
            "ket" => "1 pcs",
            "gambar" => "latte.png"
        ],
        [
            "nama" => "Espresso Coffe",
            "harga" => "10000",
            "ket" => "1 sachet",
            "gambar" => "espresso.jpg"
        ],
        [
            "nama" => "Americano Coffe",
            "harga" => "20000",
            "ket" => "1 pcs",
            "gambar" => "americano.png"
        ],
        [
            "nama" => "Doritos",
            "harga" => "7000",
            "ket" => "1 pcs",
            "gambar" => "doritos.jpg"
        ],
        [
            "nama" => "Aqua",
            "harga" => "3000",
            "ket" => "200ml",
            "gambar" => "aqua.jpg"
        ],
        [
            "nama" => "Beng-Beng",
            "harga" => "2000",
            "ket" => "1 pcs",
            "gambar" => "beng2.jpg"
        ],
        [
            "nama" => "Coca Cola",
            "harga" => "20000",
            "ket" => "1L",
            "gambar" => "cola.jpg"
        ],
        ];


    return view('barang', [
        "title" => "Kasir | Barang",
        "barangs" => $barang
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