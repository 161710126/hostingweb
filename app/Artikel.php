<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;
class Artikel extends Model
{
     protected $table = 'artikels';
     protected $fillable = ['judul','content','gambar','user_id','slug','kategori_id'];
     public $timestamps = true;

    //   public function galeri()
    // {
    // 	return $this->belongsTo('App\Galeri','galeri_id');
    // }

     public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }

     public function Kategori()
    {
        return $this->belongsTo('App\Kategori','kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
   
}
