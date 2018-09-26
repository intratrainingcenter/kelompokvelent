<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class piket extends Model
{
    protected $table ='pikets';
    protected $fillable =['nisn','jadwalhari'];
}
