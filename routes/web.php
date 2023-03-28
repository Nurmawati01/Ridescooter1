<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScooterController;
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



// Route::get('/test', function () {
//     return view('uma');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/galery', function () {
//     return view('galery');
// });

// Route::get('/kontak', function () {
//     return view('kontak');
// });

// Route::get('/member', function () {
//     return view('member');
// });

Route::get('/beranda', [ScooterController::class, 'index']);
Route::get('/tentang', [ScooterController::class, 'indextentang']);
Route::get('/booking', [ScooterController::class, 'indexbooking']);

Route::get('/kontak', [ScooterController::class, 'indexkontak']);
Route::get('/datasewa', [ScooterController::class, 'indexdatasewa']);
Route::get('/sewascter', [ScooterController::class, 'indexsewascooter']);

Route::get('/inputsewa', [ScooterController::class, 'insert']);
Route::post('/simpansewa', [ScooterController::class, 'simpan']);
Route::get('/editdatasewa/{x}',[ScooterController::class,'edit']);
Route::post('/updatesewa/{z}',[ScooterController::class,'update']);
Route::get('/hapusdatasewa/{z}',[ScooterController::class,'hapus']);

Route::get('/scooter', [ScooterController::class, 'indexscooter']);
Route::get('/editscooter/{x}',[ScooterController::class,'editscooter']);
Route::post('/updatescooter/{z}',[ScooterController::class,'updatescooter']);
Route::get('/inputscooter', [ScooterController::class, 'insertscooter']);
Route::post('/simpanscooter', [ScooterController::class, 'simpanscooter']);
Route::get('/inputscooter', [ScooterController::class, 'insertscooter']);
Route::get('/hapusscooter/{z}',[ScooterController::class,'hapusscooter']);


Route::get('/login',[LoginController::class,'index']);
Route::post('/proses', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// Route::get('/lihathome', [MahasiswaController::class, 'home']);
// Route::get('/lihatabout', [MahasiswaController::class, 'about']);
// Route::get('/lihatgalery', [MahasiswaController::class, 'galery']);
// Route::get('/lihatkontak', [MahasiswaController::class, 'kontak']);
// Route::get('/lihatmember', [MahasiswaController::class, 'member']);
// Route::get('/coba', [MahasiswaController::class, 'lihat']);


// Route::get('/home', [MahasiswaController::class, 'beranda']);
// Route::get('/profil1', [MahasiswaController::class, 'profil1']);
// Route::get('/gale', [MahasiswaController::class, 'galeri1']);
// Route::get('/kontak', [MahasiswaController::class, 'kontak2']);

// // data mahasiswa
// Route::get('/beranda', [MahasiswaController::class, 'index'])->middleware('auth');
// Route::get('/inputmhs', [MahasiswaController::class, 'insert']);
// Route::post('/simpanmhs', [MahasiswaController::class, 'simpan']);
// Route::get('/hapusmhs/{nim}', [MahasiswaController::class, 'hapus']);
// Route::get('/editmhs/{nim}', [MahasiswaController::class, 'edit']);
// Route::post('/updatemhs/{x}', [MahasiswaController::class, 'update']);

// // data dosen
// Route::get('/dosen', [MahasiswaController::class, 'index_dsn']);
// Route::get('/inputdsn', [MahasiswaController::class, 'insert_dsn']);
// Route::post('/simpandsn', [MahasiswaController::class, 'simpan_dsn']);
// Route::get('/hapusdsn/{nidn}', [MahasiswaController::class, 'hapus_dsn']);
// Route::get('/editdsn/{nidn}', [MahasiswaController::class, 'edit_dsn']);
// Route::post('/updatedsn', [MahasiswaController::class, 'update_dsn']);

// //dosen eloquent
// Route::get('/dsn',[DosenController::class,'index'])->middleware('auth');
// Route::get('/inputdosen',[DosenController::class,'input']);
// Route::post('/simpandosen',[DosenController::class,'simpan']);
// Route::get('/editdosen1/{x}',[DosenController::class,'edit']);
// Route::post('/updatedsn/{z}',[DosenController::class,'update']);
// Route::get('/hapusdsn1/{z}',[DosenController::class,'delete']);

// Route::get('/prodi',[ProdiController::class,'index'])->middleware('auth');
// Route::get('/inputprodi',[ProdiController::class,'input']);
// Route::post('/simpanprodi',[ProdiController::class,'simpan']);
// Route::get('/hapusprodi/{KD_prodi}',[ProdiController::class,'delete']);

// //matkul eloquent
// Route::get('/matkul',[MatkulController::class,'index'])->middleware('auth');
// Route::get('/inputmatkul',[MatkulController::class,'input']);
// Route::post('/simpanmatkul',[MatkulController::class,'simpan']);
// Route::get('/editmatkul/{x}',[MatkulController::class,'edit']);
// Route::post('/updatematkul/{z}',[MatkulController::class,'update']);
// Route::get('/hapusmatkul/{z}',[MatkulController::class,'delete']);

// Route::get('/login',[LoginController::class,'index'])->name('login');
// Route::post('/prosesLogin',[LoginController::class,'login1']);
// Route::get('/logout',[LoginController::class,'logout']);
