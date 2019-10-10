@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kategori Artikel</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'kategori_artikel.store', 'method' => 'post']) !!}
                        @include('kategori_artikel.form')
                    {!! Form::close() !!}
                </div>
            </div>
         </div>
    </div>
</div>

@endsection