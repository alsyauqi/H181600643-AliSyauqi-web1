@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Galeri</div>

                <div class="card-body">
                <table border="1">
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Isi</td>
                <td>Path</td>
                <td>Users id</td>
                <td>Create</td>
                <td>Update</td> 
                <td>Aksi</td>
            </tr>

        @foreach($listGaleri as $item)
            
            <tr>
                <td>{!! $item->id !!}</td>
                <td>{!! $item->nama !!}</td>
                <td>{!! $item->keterangan !!}</td>
                <td>{!! $item->path !!}</td>
                <td>{!! $item->users_id !!}</td>
                <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                <td>
                    <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-success">Lihat </a>
                    <a href="{!! route('galeri.edit',[$item->id]) !!}"class="btn btn-sm btn-warning">
                            Ubah
                            </a>
                </td>
            </tr>

        @endforeach
        </table>
                <a  href="{!! route('galeri.create') !!}" class="btn btn-primary">
                                    {{ __('Tambah Data') }}
                                </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection