<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public $primaryKey = 'id_produk';

    protected $table = 'produk';

    protected $fillable = [
    	'kode', 'nama_produk', 'harga', 'panjang', 'lebar', 'tinggi', 'id_jenis_produk'
    ];

    public function jproduk()
    {
    	return $this->hasOne('\App\JProduk', 'id_jenis_produk', 'id_jenis_produk');
    }
}
