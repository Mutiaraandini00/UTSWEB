<?php

namespace App\Http\Controllers;

use App\Models\HewanLangka;
use Illuminate\Http\Request;
use App\Http\Requests\HewanLangkaRequest;

class HewanLangkaController extends Controller
{
    public function index(){
        $HewanLangka = HewanLangka::get();
        return view ('index', compact('HewanLangka') );
        }

        public function tambah(){
        return view ('tambah');
      }

      public function edit($id){
        $HewanLangka = HewanLangka::where('id', $id)->first();
        return view ('edit',compact('HewanLangka'));
      }

      public function lihat($id){
        $HewanLangka = HewanLangka::where('id', $id)->first();
        return view ('lihat',compact('HewanLangka'));
      }


    public function store(HewanLangkaRequest $request)
    {
        $HewanLangka = new HewanLangka ();

        $HewanLangka->nama_hewan    = $request->nama_hewan;
        $HewanLangka->keterangan    =  $request->keterangan;

        $HewanLangka->save();

        return redirect('/');
    } 
    
    public function update(HewanLangkaRequest $request,$id)
    {
        $HewanLangka = HewanLangka::where('id', $id)->first();
        $HewanLangka->nama_hewan   = $request->nama_hewan;
        $HewanLangka->keterangan    =  $request->keterangan;
    
        $HewanLangka->update();

        return redirect('/');
    }   

    public function hapus($id)
    {
        $HewanLangka = HewanLangka::where('id', $id)->first();
        $HewanLangka->delete();

        return redirect('/');
    }
}
