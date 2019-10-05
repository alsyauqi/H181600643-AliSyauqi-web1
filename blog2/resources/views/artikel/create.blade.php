@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Artikel</div>

                <div class="card-body">
                    <form method="post" action="{!! route('artikel.store') !!}">
                        @include('artikel.form')
                    </form>
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
            CKEDITOR.replace( 'isi' );
        });

    </script>

@endsection