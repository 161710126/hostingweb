<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
      protected $table = 'gurus';
     protected $fillable = ['nama','jabatan','poto','alamat','j_kelamin','telepon','status'];
     public $timestamps = true;
}
