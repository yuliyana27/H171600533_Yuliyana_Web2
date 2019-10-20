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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori_artikel','KategoriArtikelController');
Route::get('kategori_artikel/trash','KategoriArtikelController@trash')->name('kategori_artikel.trash');

Route::resource('kategori_galeri','KategoriGaleriController');

Route::resource('kategori_berita','KategoriBeritaController');

Route::resource('kategori_pengumuman','KategoriPengumumanController');

Route::resource('artikel','ArtikelController');

Route::resource('galeri','GaleriController');

Route::resource('berita','BeritaController');

Route::resource('pengumuman','PengumumanController');


/*Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create', 'KategoriBeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita', 'KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','KategoriBeritaController@show')->name('kategori_berita.show');
Route::get('/kategori_berita/{id}/edit','KategoriBeritaController@edit')->name('kategori_berita.edit');
Route::patch('/kategori_berita/{id}','KategoriBeritaController@update')->name('kategori_berita.update');
Route::delete('/kategori_berita/{id}','KategoriBeritaController@destroy')->name('kategori_berita.destroy');*/