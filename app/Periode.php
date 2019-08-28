<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    public $primaryKey = 'id_periode';

    protected $table = 'periode';

    protected $fillable = [
    	'waktu_periode'
    ];
}
