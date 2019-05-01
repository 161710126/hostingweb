<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\eskul;
use App\fasilitas;
use App\galeri;
use App\guru;
use App\prestasi;
class FrontController extends Controller
{
   public function index()
    {
    	return view('layouts.templet');
    }
    public function guru()
    {
    	$gurus = guru::all();
    	return view('Gurus.index',compact('gurus'));
    }
     public function eskul()
    {
    	$eskuls = eskul::all();
    	return view('Eskul.index',compact('eskuls'));
    }
    public function galeri()
    {
    	$galeris = galeri::all();
    	return view('Potoend.index',compact('galeris'));
    }
}

