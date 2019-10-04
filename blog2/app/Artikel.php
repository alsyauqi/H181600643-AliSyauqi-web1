<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategori';

    protected $fillable=[
        'nama','users_id'
    ];

    protected $casts=[

    ];
}
