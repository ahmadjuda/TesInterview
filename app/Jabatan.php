<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    public $primaryKey = 'id_jabatan';

    protected $table = 'jabatan';

    protected $fillable = [
    	'nama_jabatan'
    ];
}
