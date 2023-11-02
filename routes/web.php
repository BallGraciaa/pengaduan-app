<?php

use App\Http\Controllers\Administrator_Controller;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\ValidasiAdmin;
use App\Http\Middleware\ValidasiMasyarakat;
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
    return view('dashboard');
});



//data masyarakat
Route::prefix('masyarakat')->group(function () {
Route::get('/',[MasyarakatController::class,'index'])->middleware(ValidasiMasyarakat::class);
Route::get('tambah',[MasyarakatController::class,'buatlapor'])->middleware(ValidasiMasyarakat::class);
Route::post('tambah',[MasyarakatController::class,'lapor']);
Route::get('registrasi',[MasyarakatController::class,'registrasi']);
Route::post('ol',[MasyarakatController::class,'masyarakat']);
Route::get('login',[MasyarakatController::class,'login']);
Route::post('login',[MasyarakatController::class,'ceklogin']);
route::get('logout',[MasyarakatController::class,'logoutt']);
});
//data administrator
Route::prefix('admin')->group(function(){
route::get('/',[Administrator_Controller::class,'dashboardadmin'])->middleware(ValidasiAdmin::class);
Route::get('loginadmin',[Administrator_Controller::class,'loginadmin']);
route::post('loginadmin',[Administrator_Controller::class,'ceklogin']);
route::get('regisadmin',[Administrator_Controller::class,'regis']);
route::post('regisadmin',[Administrator_Controller::class,'regisadminn']);
route::get('validasi',[Administrator_Controller::class,'validasi'])->middleware(ValidasiAdmin::class);
route::post('el',[Administrator_Controller::class,'petugas']);
route::get('tanggapan',[Administrator_Controller::class,'tanggapann']);
route::get('logout',[Administrator_Controller::class,'logout']);
});

// Route::get('/');