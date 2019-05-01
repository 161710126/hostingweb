<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
   protected $table = 'eskuls'; 
    protected $fillable = ['nama','poto','content','eskul_id']; 
    public $timestamps = true; 

    public function prestasi()
    {
    	return $this->hasMany('App\prestasi','eskul_id');
    }
}

