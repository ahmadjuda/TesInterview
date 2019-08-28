<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JProduk extends Model
{
    public $primaryKey = 'id_jenis_produk';

    protected $table = 'jenis_produk';

    protected $fillable = [
    	'jenis_produk'
    ];
}
