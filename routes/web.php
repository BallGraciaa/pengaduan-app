<?php

use App\Http\Controllers\Administrator_Controller;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\ValidasiAdmin;
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
    return view('tambah');
});



//data masyarakat
Route::get('masyarakat',[MasyarakatController::class,'index']);
Route::get('tambah',[MasyarakatController::class,'buatlapor']);
Route::post('tambah',[MasyarakatController::class,'lapor']);



Route::get('registrasi',[MasyarakatController::class,'registrasi']);
Route::post('ol',[MasyarakatController::class,'masyarakat']);
Route::get('login',[MasyarakatController::class,'login']);
Route::post('login',[MasyarakatController::class,'ceklogin']);
Route::get('dashboard',[MasyarakatController::class,'dashboard']);

//data administrator
Route::prefix('admin')->group(function(){
route::get('/',function(){
return view ('admin.dashboardadmin');
});
route::get('dashboardadmin',[Administrator_Controller::class,'dashboardadmin']);
Route::get('loginadmin',[Administrator_Controller::class,'loginadmin']);
route::post('loginadmin',[Administrator_Controller::class,'ceklogin']);
route::get('regisadmin',[Administrator_Controller::class,'regis']);
route::get('validasi',[Administrator_Controller::class,'validasi']);
route::post('el',[Administrator_Controller::class,'petugas']);

});

// Route::get('/');