<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorigaleri extends Model
{
     protected $fillable = ['nama_kategori'];
    public $timestamps = true;


    public function galeri()
    {
        return $this->hasMany('App\galeri', 'kategori_id');
    }

     public static function boot()
    {
        parent::boot();
        self::deleting(function ($kategori) {
            // mengecek apakah penulis masih punya buku
            if ($kategori->galeri->count() > 0) {
                // menyiapkan pesan error
                $html = 'Kategori tidak bisa dihapus karena masih digunakan oleh galeri : ';
                $html .= '<ul>';
                foreach ($kategori->galeri as $data) {
                    $html .= "<li>$data->judul</li>";
                }
                $html .= '</ul>';
                Session::flash("flash_notification", [
                "level"=>"danger",
                "message"=>$html
                ]);
                // membatalkan proses penghapusan
                return false;
            }
        });
    }
}
