<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class kategoriGaleriController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listKategoriGaleri=KategoriGaleri::all(); //select * from kategori_Galeri

        //blade
        return view('kategori_galeri.index',compact('listKategoriGaleri'));

    }

    public function show($id){
        //Eloquent
        //$kategoriGaleri=KategoriGaleri::where('id',$id)->first();//select * from kategori_Galeri where id=$id limit 1
        $kategoriGaleri=KategoriGaleri::find($id);

        if (empty($kategoriGaleri)){
            return redirect(route('kategori_galeri.index'));
        }

        return view('kategori_galeri.show',compact('kategoriGaleri'));
    }
    public function create(){
        return view( 'kategori_galeri.create');
    }
    
    public function store(Request $request){
        $input= $request->all();

        KategoriGaleri::create($input);

        return redirect(route('kategori_galeri.index'));
    }
    public function edit($id){
        $kategoriGaleri=KategoriGaleri::find($id); 

        if (empty($kategoriGaleri)){
            return redirect(route('home'));
        }

        return view('kategori_galeri.edit',compact('kategoriGaleri'));
    }
    public function update($id,Request $request){
        $kategoriGaleri=KategoriGaleri::find($id); 
        $input= $request->all();

        if (empty($kategoriGaleri)){
            return redirect(route('kategori_galeri.index'));
        }

        $kategoriGaleri->update($input);

        return redirect (route('kategori_galeri.index'));
    }
    public function destroy($id){
        $kategoriGaleri=KategoriGaleri::find($id); 

        if (empty($kategoriGaleri)){
            return redirect(route('home'));
        }
        $kategoriGaleri->delete();
        return redirect (route('kategori_galeri.index'));
    }
}

 