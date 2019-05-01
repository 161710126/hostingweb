<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\eskul;
use App\fasilitas;
use App\galeri;
use App\guru;
use App\Kategori;
use App\prestasi;
use App\User;
use App\Testimoni;
use App\Kategorigaleri;
use App\Kategori_fasilitas;
use App\Event;
use App\infosekilas;
use Vinkla\Instagram\Instagram;
class FrontendController extends Controller
{
    public function index()
    {   
        $gurus = guru::all();
        $artikels = Artikel::orderBy('updated_at','desc')->paginate(4);
        $galeriss = galeri::paginate(5);
        $testimonis = Testimoni::all();
        $events = Event::orderBy('updated_at','desc')->paginate(3);
        $infos = infosekilas::all();
        // instagram
        // $instagram = new Instagram('9026781792.9cb49ff.2c1305b3244149368b5daf76ed37265c');
        // $results = $instagram->media();
        // http://localhost:8000/#access_token=9026781792.9cb49ff.2c1305b3244149368b5daf76ed37265c
    	return view('frontend.home',compact('artikels','galeriss','testimonis','results','instagram','infos','gurus'));
    }
    public function guru()
    {
    	$gurus = guru::all();
    	return view('frontend.guru',compact('gurus'));
    }

    public function eskul()
    {
        $eskuls = eskul::all();
        $prestasis = prestasi::all();
        return view('frontend.eskulpres',compact('eskuls','prestasis'));
    }

     public function prestasi()
    {
        $prestasis = prestasi::all();
        return view('Prestasi.index',compact('prestasis'));
    }

     public function artikel(Request $request)
    {
         $search = $request->get('search');
        $artikels = Artikel::where('judul','LIKE','%'.$search.'%')->orderBy('created_at','desc')->paginate(2);
        // $artikels = Artikel::paginate(2);
        return view('blog.home',compact('artikels','a','search'));
    }

    public function show(Artikel $artikels)
    {
         $previous = Artikel::where('id', '<', $artikels->id)->orderBy('id', 'desc')->first();
        $next = Artikel::where('id', '>', $artikels->id)->orderBy('id')->first();
        // $artikels = Artikel::findOrFail($id);
        return view('blog.show',compact('artikels','previous','next'));
    }

    public function artikelkategori(Kategori $kategori)
    {
        $artikels = $kategori->Artikel()->latest()->orderBy('updated_at','desc')->paginate(6);
        return view('blog.home', compact('artikels'));
    }

     public function event(Request $request)
    {
         $search = $request->get('search');
        $a = Event::where('judul','LIKE','%'.$search.'%')->orderBy('created_at','desc')->paginate(2);
        $events = Event::paginate(2);
        return view('frontend.event',compact('events','a','search'));
    }
     public function showevent(Event $events)
    {
         $previous = Event::where('id', '<', $events->id)->orderBy('id', 'desc')->first();
        $next = Event::where('id', '>', $events->id)->orderBy('id')->first();
        // $events = Artikel::findOrFail($id);
        return view('frontend.event-show',compact('events','previous','next'));
    }

    public function fasilitas()
    {
        $kategfasilitas = Kategori_fasilitas::all();
        $fasilitas = fasilitas::all();
        $kategfasil = fasilitas::all();
        return view('frontend.fasilitas',compact('kategfasil','kategfasilitas','fasilitas'));
    }

     public function Testimoni()
    {
        $testimonis = Testimoni::all();
        $infos = infosekilas::all();
        return view('frontend.about',compact('testimonis','infos'));
    }

    public function galeri()
    {
        $kategori = Kategorigaleri::all();
        $galeriss = Galeri::orderBy('created_at','desc')->paginate(100);
        $kategorig = galeri::all();
        return view('frontend.galery',compact('kategorig','kategori','galeriss'));
    }

    // public function kategorigaleri(Kategorigaleri $kategori)
    // {
    //     $kategori = $kategori->galeri()->latest()->paginate(5);
    //     return view('Galery.index', compact('kategori'));
    // }

    public function about()
    {
        $infos = infosekilas::all();
        return view('frontend.about',compact('infos'));
    }   
    public function infos()
    {
        $infos = infosekilas::all();
        return view('dashboard.admin',compact('infos'));
    }

    // public function kontaks()
    // {
    //     $kontaks contact::all();
    //     return view('partials.navbar',compact('kontaks'));
    // }
}
