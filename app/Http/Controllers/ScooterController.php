<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\DataSewa_Model;
use App\Models\scooter;
use Illuminate\Support\Facades\File;

class ScooterController extends Controller
{
    public function index(){
        $a = DataSewa_Model::all();
        
        return view('beranda');
    }

    public function insert(){
        return view('sewascooter');
    }

    public function simpan( Request $x){
        DataSewa_Model::create([
            'idsewa'=> $x->idsewa,
            'tanggal_sewa'=> $x->tanggal,
            'namalengkap_sewa'=> $x->nama,
            'durasi_sewa'=> $x->durasi,
            'waktu_sewa'=> $x->waktu,
            'harga_sewa'=> $x->harga,
            'metode_pembayaran'=> $x->metode
        ]);
        return redirect ('/beranda');
    }

    public function indexdatasewa(){
        $a = DataSewa_Model::all();
        return view('datasewa',['sewa'=>$a]);
    }
    
    public function edit($z){
        $a = DataSewa_Model::find($z);
        return view('editdatasewa',['ubah'=>$a]);
    }

    public function update($z, Request $x){
        DataSewa_Model::where('idsewa',$z)->update([
            'idsewa'=> $x->idsewa,
            'tanggal_sewa'=> $x->tanggal,
            'namalengkap_sewa'=> $x->nama,
            'durasi_sewa'=> $x->durasi,
            'waktu_sewa'=> $x->waktu,
            'harga_sewa'=> $x->harga,
            'metode_pembayaran'=> $x->metode,
        ]);
        return redirect('datasewa');
    }

    public function hapus($z){
        $datasewa = DataSewa_Model::find($z);
        $datasewa->delete();
        return redirect ('/datasewa');
    }



    public function indextentang(){
        
        return view('tentang');
    }

    public function indexbooking(){
        
        return view('booking');
    }

    public function indexscooter(){
        $a = DB::table('tbscooter')->get();
        return view('/scooter',['datascooter'=>$a]);
    }

    public function editscooter($z){
        $a = scooter::find($z);
        return view('editscooter',['ubah'=>$a]);
    }

    public function updatescooter($z, Request $x){
        scooter::where('kdscooter',$z)->update([
            'kdscooter'=> $x->kdscooter,
            'namascooter'=> $x-> namascooter,
            'jenisscooter'=> $x->jenisscooter,
            'warnascooter'=> $x->warnascooter,
        ]);
        return redirect('/scooter');
    }

    public function insertscooter(){
        return view('inputscooter');
    }

    public function simpanscooter( Request $x){
        scooter::create([
            'kdscooter'=> $x->kdscooter,
            'namascooter'=> $x->namascooter,
            'jenisscooter'=> $x->jenisscooter,
            'warnascooter'=> $x->warnascooter,
        ]);
        return redirect ('/scooter');
    }

    public function hapusscooter($z){
        $datascooter = Scooter::find($z);
        $datascooter->delete();
        return redirect ('/scooter');
    }

    // public function delete($x){
    //     $data = DB::table('tbscooter')->where('tbscooter', $x)->first();
    //     return redirect ('/pinjam');

    // }

    public function indexkontak(){
        
        return view('kontak');
    }

    

    public function indexsewascooter(){
        
        return view('sewascooter');
    }
}