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
        //$kategoriPengumuman=KategoriPengumuman::where('id',$id)->first();//select * from kategori_pengumuman where id=$id limit 1
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
    public function edit($id){
        $Pengumuman=pengumuman::find($id);
        $kategoriPengumuman=KategoriPengumuman::pluck('nama','id');
        
        if (empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }

        return view('pengumuman.edit',compact('Pengumuman','kategoriPengumuman'));
    }
    public function update($id,Request $request){
        $Pengumuman=pengumuman::find($id); 
        $input= $request->all();

        if (empty($Pengumuman)){
            return redirect(route('pengumuman.index'));
        }

        $Pengumuman->update($input);

        return redirect (route('pengumuman.index'));
    }
    public function destroy($id){
        $Pengumuman=pengumuman::find($id); 

        if (empty($Pengumuman)){
            return redirect(route('home'));
        }
        $Pengumuman->delete();
        return redirect (route('pengumuman.index'));
    }
}
