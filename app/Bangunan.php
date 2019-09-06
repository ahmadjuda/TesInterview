<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    public $primaryKey = 'id_jenis_bangunan';

    protected $table = 'jenis_bangunan';

    protected $fillable = [
    	'jenis_bangunan'
    ];
}
