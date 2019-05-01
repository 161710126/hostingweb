<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infosekilas extends Model
{
     protected $table = 'infosekilas';
     protected $fillable = ['nama','jumlah','poto'];
     public $timestamps = true;
}
