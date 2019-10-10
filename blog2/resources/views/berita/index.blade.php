@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Berita</div>

                <div class="card-body">
                <table border="1">
                     <tr>
                         <td>ID</td>
                         <td >judul</td>
                         <td >isi</td>
                         <td>Users id</td>
                         <td>Create</td>
                         <td>Update</td>
                         <td>Aksi</td>
                     </tr>

                     @foreach($listBerita as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                            <a href="{!! route('berita.show',[$item->id]) !!}"class="btn btn-sm btn-success">
                            Lihat
                            </a>
                            <a href="{!! route('berita.edit',[$item->id]) !!}"class="btn btn-sm btn-warning">
                            Ubah
                            </a>
                        </td>
                    </tr>

                     @endforeach
    
                </table>
                <a  href="{!! route('berita.create') !!}" class="btn btn-primary">
                                    {{ __('Tambah Data') }}
                                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection