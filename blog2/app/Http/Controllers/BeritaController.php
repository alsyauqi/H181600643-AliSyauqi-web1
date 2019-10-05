<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\KategoriBerita;

class BeritaController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listBerita=berita::all(); //select * from kategori_berita

        //blade
        return view('berita.index',compact('listBerita'));

    }

    public function show($id){
        //Eloquent
        //$kategoriBerita=KategoriArtikel::where('id',$id)->first();//select * from kategori_artikel where id=$id limit 1
        $Berita=berita::find($id);

        return view('berita.show',compact('Berita'));
    }

    public function create(){

        $kategoriBerita=KategoriBerita::pluck('nama','id');
        return view( 'berita.create',compact('kategoriBerita'));
    }
    
    public function store(Request $request){
        $input= $request->all();

        Berita::create($input);

        return redirect(route('berita.index'));
    }
}
