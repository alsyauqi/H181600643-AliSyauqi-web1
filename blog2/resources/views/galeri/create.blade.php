@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">Tambah Galeri</div>

                    <div class="card-body">
                    {!! Form::open(['route' => 'galeri.store','files'=>true, 'method' => 'post']) !!}
                        @include('galeri.form')
                    {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
</div>                
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            CKEDITOR.replace('keterangan');
        });
    </script>

@endsection