<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use App\Models\petugas;
use App\Models\tanggapan;
use Illuminate\Http\Request;

class Administrator_Controller extends Controller
{
    public function loginadmin(){
        //buat objek model
        return view('admin.loginadmin');
    }

    public function ceklogin(Request $request){
        $ol = new petugas();
        $ol = $ol->where('username',$request->input('username'))->where('password',$request->input('password'));
        
        if($ol->exists()){
            $amin = $ol->first();   
            session(['admin'=>$amin]);
            return redirect('admin');
        }
        return back()->with('pesan','username atau password salah');

    }

    public function regis(){
        return view('admin.registrasiadmin');
    }

    public function regisadminn(Request $request){
        $el = new petugas();
        //Cek data yang dikirim user

        $col= $request->validate([
            'id_petugas'=>'required',
            'nama_petugas'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);

        $el->create([
            'id_petugas'=>$request->id_petugas,
            'nama_petugas'=>$request->nama_petugas,
            'username'=>$request->username,
            'password'=>$request->password,
            'telp'=>$request->telp
        ]);
    }

    public function validasi(){
        $lapor = new pengaduan;
        return view('admin.validasi',['data'=>$lapor->all()]);
    }   

    public function dashboardadmin(){
        return view('admin.dashboardadmin');
    }
    public function tanggapanadm(){
        return view('admin.tanggapanadmin');
    }
    public function tanggapann(){
        $lapor = new tanggapan;
        return view('admin.tanggapanadmin',['merek'=>$lapor->all()]); 
    }
    public function logout(){
        session()->flush();
        return back();

    }
}
