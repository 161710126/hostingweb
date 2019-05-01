<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $table = 'events';
     protected $fillable = ['poto','judul','tgl','jam','alamat','deskripsi','slug'];
     public $timestamps = true;

     public function getRouteKeyName()
    {
        return 'slug';
    }
}
