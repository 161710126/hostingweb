<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model

  {
      protected $table = 'fasilitas';
     protected $fillable = ['nama','poto','kategorifasilitas_id'];
     public $timestamps = true;

	public function kategori_fasilitas()
	{
		return $this->belongsTo('App\kategori_fasilitas','kategorifasilitas_id');
	}

}
