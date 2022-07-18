<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengenalancontroller;
use App\Http\Controllers\latihancontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffBranchController;





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

Route::get('/hello', function () {
    echo ('<center><u>hello semuanya apa kabar?<br>');
    echo ('Pada kali ini kita sedang belajar route basic</u></center>');
});

//route basic 
Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index');
});

Route::get('/pages3', function () {
    return view('pages3.index');
});

//route paameter
route :: get ('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobi}', function ($nama,$umur,$alamat,$jk,$hobi){
    return view('pages1.biodata', compact('nama','umur','alamat','jk','hobi'));
});

//route optional parameter
route :: get ('/pesanan/{minuman?}', function ($minuman = 'Data kosong'){
    return view('pages1.pesanan', compact('minuman'));
});

//route optional parameter
//route optional parameter
route :: get ('/bangunan/{b_bangunan?}/{b_bangunan1?}', function ($b_bangunan ,$b_bangunan1 = 'mohon maaf material anda tidak ada'){
    return view('pages1.bangunan', compact('b_bangunan','b_bangunan1'));
});

Route::get('/pengenalan',[App\Http\Controllers\pengenalancontroller::class,'pengenalan']);

route::get('/intro/{nama}/{alamat}/{umur}',[pengenalancontroller::class,'intro']);

route::get('/siswa',[pengenalancontroller::class,'siswa']);

Route::get('/menu',[App\Http\Controllers\latihancontroller::class,'menu']);

Route::get('/dosen',[latihancontroller::class,'dosen']);

Route::get('/stasiun',[latihancontroller::class,'stasiun']);

Route::get('/belanja',[latihancontroller::class,'belanja']);

Route::get('/post',[PostController::class,'index']);
Route::get('/post',[StaffBranchController::class,'index']);