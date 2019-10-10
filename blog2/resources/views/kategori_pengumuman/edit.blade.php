@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kategori Pengumuman</div>

                <div class="card-body">
                    {!! Form::model($kategoriPengumuman, ['route' => ['kategori_pengumuman.update',$kategoriPengumuman->id],'method'=>'patch']) !!}
                        @include('kategori_pengumuman.form')
                    {!! Form::close() !!}
                </div>
            </div>
         </div>
    </div>
</div>

@endsection