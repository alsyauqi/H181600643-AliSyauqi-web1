<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\KategoriArtikel;

class kategoriArtikelController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listKategoriArtikel=KategoriArtikel::all(); //select * from kategori_Artikel

        //blade
        return view('kategori_artikel.index',compact('listKategoriArtikel'));

    }

    public function show($id){
        //Eloquent
        //$kategoriArtikel=KategoriArtikel::where('id',$id)->first();//select * from kategori_Artikel where id=$id limit 1
        $kategoriArtikel=KategoriArtikel::find($id);

        if (empty($kategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

        return view('kategori_artikel.show',compact('kategoriArtikel'));
    }
    public function create(){
        return view( 'kategori_artikel.create');
    }
    
    public function store(Request $request){
        $input= $request->all();

        KategoriArtikel::create($input);

        return redirect(route('kategori_artikel.index'));
    }
    public function edit($id){
        $kategoriArtikel=KategoriArtikel::find($id); 

        if (empty($kategoriArtikel)){
            return redirect(route('home'));
        }

        return view('kategori_artikel.edit',compact('kategoriArtikel'));
    }
    public function update($id,Request $request){
        $kategoriArtikel=KategoriArtikel::find($id); 
        $input= $request->all();

        if (empty($kategoriArtikel)){
            return redirect(route('kategori_artikel.index'));
        }

        $kategoriArtikel->update($input);

        return redirect (route('kategori_artikel.index'));
    }
    public function destroy($id){
        $kategoriArtikel=KategoriArtikel::find($id); 

        if (empty($kategoriArtikel)){
            return redirect(route('home'));
        }
        $kategoriArtikel->delete();
        return redirect (route('kategori_artikel.index'));
    }
}

 