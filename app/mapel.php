<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table = 'mapels';
    protected $fillable = ['id_mapel','mapel','pengajar'];
}
