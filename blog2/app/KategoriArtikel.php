<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table='kategori_artikel';

    protected $fillable=[
        'nama','users_id'
    ];

    protected $casts=[

    ];
}
