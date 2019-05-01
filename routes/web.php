<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('logout','\App\Http\Controller\Auth\LoginController@logout');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
	     Route::get('/home', 'HomeController@index')->name('home');
       Route::resource('gurus', 'GuruController');
	     Route::resource('eskuls', 'EskulController');
       Route::resource('fasilitas','FasilitasController');
       Route::resource('prestasis','PrestasiController');
       Route::resource('artikels','ArtikelController');
       Route::post('artikels/{publish}', 'ArtikelController@Publish')->name('artikels.publish');
       Route::resource('kategori','KategoriController');
       Route::resource('galeris','GaleryController');
       Route::resource('users', 'UserController');
       Route::resource('testimonis','TestimoniController');
       Route::resource('kategoris','KategorigaleriController');
       Route::resource('kontaks','ContactController');
       Route::resource('kategorisfasilitas','KategoriFasilitasController');
       Route::resource('events','EventController');
       Route::post('events/{publish}', 'EventController@Publish')->name('events.publish');
       Route::resource('infos','InfosekilasController');
       Route::get('notifikasi','ContactController@notifikasi')->name('notifikasi');
       Route::post('kontaks/{publish}','ContactController@Publish')->name('kontaks.publish');
});

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


//Frontend
Route::resource('/','FrontendController');
Route::get('/galeri','FrontendController@galeri')->name('galeri');
Route::get('/guru','FrontendController@guru')->name('guru');
Route::get('/eskulprestasi','FrontendController@eskul')->name('eskul');
Route::get('/','FrontendController@index')->name('index');
Route::get('/fasilitas','FrontendController@fasilitas')->name('fasilitas');
Route::get('/berita','FrontendController@artikel');
Route::get('/berita/{artikels}','FrontendController@show')->name('berita');
Route::get('berita/kategori/{kategori}', 'FrontendController@artikelkategori');
// Route::get('/about','FrontendController@Testimoni')->name('Testimoni');
// Route::get('/galeri/kategori/{kategorigaleri}', 'FrontendController@kategorigaleri');
Route::get('/event','FrontendController@event');
Route::get('/event/{events}','FrontendController@showevent')->name('event');



Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/persyaratan', function () {
    return view('frontend.syarat');
});
Route::get('/sambutan', function () {
    return view('frontend.sambutan');
});
Route::get('/sejarah', function () {
    return view('frontend.sejarah');
});
Route::get('/visi-misi', function () {
    return view('frontend.visi-misi');
});