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

        return view('artikel.show',compact('Artikel'));
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
    public function edit($id){
        $Artikel=artikel::find($id); 
        $kategoriArtikel=KategoriArtikel::pluck('nama','id');


        if (empty($Artikel)){
            return redirect(route('home'));
        }

        return view('artikel.edit',compact('Artikel','kategoriArtikel'));
    }
    public function update($id,Request $request){
        $Artikel=artikel::find($id); 
        $input= $request->all();

        if (empty($Artikel)){
            return redirect(route('artikel.index'));
        }

        $Artikel->update($input);

        return redirect (route('artikel.index'));
    }
    public function destroy($id){
        $Artikel=artikel::find($id); 

        if (empty($Artikel)){
            return redirect(route('home'));
        }
        $Artikel->delete();
        return redirect (route('artikel.index'));
    }
}

 
