<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model

    {
      protected $table = 'prestasis';
     protected $fillable = ['nama','tanggal_peroleh','deskripsi','eskul_id','poto'];
     public $timestamps = true;

	public function eskul()
	{
		return $this->belongsTo('App\eskul','eskul_id');
	}
}


