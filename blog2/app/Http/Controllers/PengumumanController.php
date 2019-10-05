<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listPengumuman=pengumuman::all(); //select * from kategori_pengumuman

        //blade
        return view('pengumuman.index',compact('listPengumuman'));

    }

    public function show($id){
        //Eloquent
        //$kategoriArtikel=KategoriArtikel::where('id',$id)->first();//select * from kategori_artikel where id=$id limit 1
        $Pengumuman=pengumuman::find($id);

        return view('pengumuman.show',compact('Pengumuman'));
    }

    public function create(){

        $kategoriPengumuman=KategoriPengumuman::pluck('nama','id');
        return view( 'pengumuman.create',compact('kategoriPengumuman'));
    }
    
    public function store(Request $request){
        $input= $request->all();

        Pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }
}
