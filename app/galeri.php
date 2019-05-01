<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model

   {
      protected $table = 'galeris';
     protected $fillable = ['nama','poto','kategori_id'];
     public $timestamps = true;

      public function Kategorigaleri()
    {
        return $this->belongsTo('App\Kategorigaleri','kategori_id');
    }


}
