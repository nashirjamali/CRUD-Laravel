<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    //controller pegawai
    public function index(){
 
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->paginate(10);
        $data['pegawai'] = $pegawai;
    	// mengirim data pegawai ke view index
    	return view('index',$data);
 
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah(){

        // memanggil view tambah
        return view('tambah');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request){
      
        // validasi input data
        $this->validate($request,[
            'nama' => 'required|min:5|max:40',
            'jabatan' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required|min:5|max:100'
         ]);
      
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['pegawai' => $pegawai]);

    }

        // update data pegawai
    public function update(Request $request)
    {

        $this->validate($request,[
            'nama' => 'required|min:5|max:50',
            'jabatan' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required|min:5|max:100'
         ]);
         
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

        // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like', "%".$cari."%")
		->paginate(10);
 
    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);
 
	}

    
}