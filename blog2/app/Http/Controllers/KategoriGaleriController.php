<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listKategoriGaleri=KategoriGaleri::all(); //select * from kategori_galeri

        //blade
        return view('kategori_galeri.index',compact('listKategoriGaleri'));

    }

    public function show($id){
        //Eloquent
        //$kategoriGaleri=KategoriGaleri::where('id',$id)->first();//select * from kategori_Galeri where id=$id limit 1
        $kategoriGaleri=KategoriGaleri::find($id);

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
}

