<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    public $primaryKey = 'id_karyawan';

    protected $table = 'karyawan';

    protected $fillable = [
    	'nama_karyawan', 'tanggal_lahir', 'alamat', 'telp', 'id_jabatan'
    ];

    public function jabatan()
    {
    	return $this->hasOne('\App\Jabatan', 'id_jabatan', 'id_jabatan');
    }
}
