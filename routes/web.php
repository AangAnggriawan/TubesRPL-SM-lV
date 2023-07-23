<?php

use App\Http\Controllers\AksesController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PindahanController;
use App\Http\Controllers\RPL_tubes;
use App\Http\Controllers\UserRTController;
use App\Models\userRT;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
// Login User
Route::get('/loginRT', [AksesController::class, 'loginRT'])->name('loginRT');
Route::post('/loginRTProses', [AksesController::class, 'loginRTProses'])->name('loginRTProses');


Route::get('/home', [RPL_tubes::class, 'home'])->name('home');
Route::get('/data', [RPL_tubes::class, 'data']);
Route::get('/propil', [RPL_tubes::class, 'propil']);
Route::get('/data_pribadi/{id}', [RPL_tubes::class, 'data_pribadi'])->name('data_pribadi');
Route::get('/update', [RPL_tubes::class, 'update']);

Route::get('/admin', [RPL_tubes::class, 'admin']);


//Kematian
Route::get('/deat', [RPL_tubes::class, 'deat'])->name('deat')->middleware('auth');
Route::get('/kematian', [RPL_tubes::class, 'kematian'])->name('kematian');
Route::post('/insertKematian', [RPL_tubes::class, 'insertKematian'])->name('insertKematian');

//Pindahan Masuk
Route::get('/pindahan', [PindahanController::class, 'pindahan'])->name('pindahan')->middleware('auth');
Route::get('/masuk', [PindahanController::class, 'masuk']);
Route::post('/insertDataMasuk', [PindahanController::class, 'insertDataMasuk'])->name('insertDataMasuk');
Route::get('/pindahMasuk', [PindahanController::class, 'pindahMasuk'])->name('pindahMasuk');

//Pindahan Keluar
Route::get('/keluar', [PindahanController::class, 'keluar']);
Route::post('/insertDataKeluar', [PindahanController::class, 'insertDataKeluar'])->name('insertDataKeluar');
Route::get('/pindahanKeluar', [PindahanController::class, 'pindahanKeluar'])->name('pindahanKeluar');




// Untuk Admin
Route::get('/masyarakat', [MasyarakatController::class, 'masyarakat'])->name("masyarakat")->middleware('auth');

Route::get('/tambahData', [MasyarakatController::class, 'tambahData'])->name("tambahData");
Route::post('/insertData', [MasyarakatController::class, 'insertData'])->name("insertData");


Route::get('/tampilData/{id}', [MasyarakatController::class, 'tampilData'])->name("tampilData");
Route::get('/tampilupdate/{id}', [MasyarakatController::class, 'tampilupdate'])->name("tampilupdate");
Route::post('/updateData/{id}', [MasyarakatController::class, 'updateData'])->name("updateData");

Route::get('/delete/{id}', [MasyarakatController::class, 'delete'])->name("delete");

// Login
Route::get('/login', [loginController::class, 'login'])->name("login");
Route::post('/loginProses', [loginController::class, 'loginProses'])->name("loginProses");


Route::get('/register', [loginController::class, 'register'])->name("register");
Route::post('/registerUser', [loginController::class, 'registerUser'])->name("registerUser");

// Logout
Route::get('logout', [loginController::class, 'logout'])->name('logout');

// Akses RT
Route::get('/aksesRT', [AksesController::class, 'aksesRT'])->name("aksesRT");
Route::get('/tampilAkses', [AksesController::class, 'tampilAkses'])->name("tampilAkses");
Route::post('/prosesAkses', [AksesController::class, 'prosesAkses'])->name("prosesAkses");
