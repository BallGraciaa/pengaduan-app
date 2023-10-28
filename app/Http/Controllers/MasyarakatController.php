<?php

namespace App\Http\Controllers;

use App\Models\masyarakat;
use App\Models\pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function registrasi(){
        //buat objek model
        return view('Masyarakat.registrasi');
    }

    
    public function masyarakat(Request $request){
        $ol = new masyarakat();
        //Cek data yang dikirim user
        

        $cek= $request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);

        $ol->create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
            'telp'=>$request->telp,
        ]);

    
    //  return $ol->all();
    return back()->with('pesan','Selamat, Registrasi berhasil');
    }

    public function login(){
        return view('Masyarakat.login');
    }

    public function ceklogin(Request $request){
        $el = new masyarakat();
        // cek username dan password exists (ada) di tabel masyarakat
        if($el->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('/');

        }
        return back()->with('pesan','Username dan password tidak terdaftar');
    }
     
    public function buatlapor(request $request){
        return view ('tambah');
        
    }
    public function lapor(Request $request){
        $i = new pengaduan();
       
        $request->input('foto'); 
        
        //siapkan variabel untuk menampung file
        $foto = $request->file('foto');
        
        //tentukan path file akan disimpan
        $folder = 'uplode_data';

        //pindahkan file ke target folder
        $foto->move($folder, $foto->getClientOriginalName());
        
        // $tes = $request->validate([
        //     'nik'=> 'required|max:16',
        //     'tanggal_pengaduan'=>'required',
        //     'isi_laporan'=>'required'
        // ]);

        $i->create([
            'nik'=>$request->input('nik'),
            'tgl_pengaduan'=>$request->input('tanggal'),
            'foto'=>$foto->getClientOriginalName(),
            'isi_laporan'=>$request->input('isi_laporan'),
            'status'=>'0'
        ]);

        return back()->with('pesan','laporan berhasil dikirim');
    }

    public function dashboard(){
        return view('Masyarakat.dashboard');
    }

}

