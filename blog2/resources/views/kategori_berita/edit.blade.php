@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kategori Berita</div>

                <div class="card-body">
                    {!! Form::model($kategoriBerita, ['route' => ['kategori_berita.update',$kategoriBerita->id],'method'=>'patch']) !!}
                        @include('kategori_berita.form')
                    {!! Form::close() !!}
                </div>
            </div>
         </div>
    </div>
</div>

@endsection