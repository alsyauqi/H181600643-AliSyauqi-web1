<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listArtikel=artikel::all(); //select * from kategori_artikel

        //blade
        return view('artikel.index',compact('listArtikel'));

    }

    public function show($id){
        //Eloquent
        //$kategoriArtikel=KategoriArtikel::where('id',$id)->first();//select * from kategori_artikel where id=$id limit 1
        $Artikel=artikel::find($id);

        return view('artikel.show',compact('artikel'));
    }

    public function create(){

        $kategoriArtikel=KategoriArtikel::pluck('nama','id');
        return view( 'artikel.create',compact('kategoriArtikel'));
    }
    
    public function store(Request $request){
        $input= $request->all();

        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
}
