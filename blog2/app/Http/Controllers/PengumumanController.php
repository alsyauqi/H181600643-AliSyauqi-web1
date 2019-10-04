<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listPengumuman=Pengumuman::all(); //select * from kategori_artikel

        //blade
        return view('pengumuman.index',compact('listPengumuman'));

    }

    public function show($id){
        //Eloquent
        //$kategoriArtikel=KategoriArtikel::where('id',$id)->first();//select * from kategori_artikel where id=$id limit 1
        $Pengumuman=Pengumuman::find($id);

        return view('pengumuman.show',compact('Pengumuman'));
    }

    public function create(){
        $Pengumuman=Pengumuman::pluck('nama','id');
        return view( 'pengumuman.create');
    }
    
    public function store(Request $request){
        $input= $request->all();

        Pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }
}
