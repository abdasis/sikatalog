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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function (){
    Route::group(['prefix' => 'kategori'], function (){
        Route::get('tambah', \App\Http\Livewire\Kategori\Tambah::class)->name('kategori.tambah');
        Route::get('sunting/{slug}', \App\Http\Livewire\Kategori\Sunting::class)->name('kategori.sunting');
        Route::get('semua',\App\Http\Livewire\Kategori\Semua::class)->name('kategori.semua');
    });

    Route::group(['prefix' => 'produk'], function (){
        Route::get('/', \App\Http\Livewire\Produk\Semua::class)->name('produk.semua');
        Route::get('tambah', \App\Http\Livewire\Produk\Tambah::class)->name('produk.tambah');
        Route::get('sunting/{id}', \App\Http\Livewire\Produk\Sunting::class)->name('produk.sunting');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
