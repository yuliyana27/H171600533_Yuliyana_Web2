<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listKategoriArtikel=KategoriArtikel::all(); //select*from kategori_artikel

    //blade
    return view('kategori_artikel.index', compact('listKategoriArtikel'));
    //return view(view: 'kategori_artikel.index')->with('data',$listKategoriArtikel);
	}

<<<<<<< HEAD
	public function show($id) {
=======
public function show($id) {
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
	//Eloquent
	//$KategoriArtikel=KategoriArtikel::('id','$id')->first(); // select * from Kategori artikel where id=$id limit 1
	$KategoriArtikel=KategoriArtikel::find($id);

<<<<<<< HEAD
			if(empty($KategoriArtikel)){
			return redirect(route('kategori_artikel.index'));
	}	

	return view ( 'kategori_artikel.show',compact( 'KategoriArtikel'));
	}

	public function create(){
	return view( 'kategori_artikel.create');
	}

	public function store(Request $request){
	$input= $request->all();
	KategoriArtikel::create($input);

	return redirect(route('kategori_artikel.index'));

	}
	public function edit($id){
	$KategoriArtikel=KategoriArtikel::find($id);

	

	if(empty($KategoriArtikel)){
	return redirect(route('kategori_artikel.index'));
	}

		return view('kategori_artikel.edit', compact('KategoriArtikel'));
	}
	public function update($id, Request $request){
		$KategoriArtikel=KategoriArtikel::find($id);
		$input= $request->all();

	if(empty($KategoriArtikel)){
	return redirect(route('kategori_artikel.index'));
	}

	$KategoriArtikel->update($input);

	return redirect(route ('kategori_artikel.index'));

	}

	public function destroy($id){
	$KategoriArtikel=KategoriArtikel::find($id);

	
	if(empty($KategoriArtikel)){
	return redirect(route('kategori_artikel.index'));
	} 
	$KategoriArtikel->delete();
	return redirect(route('kategori_artikel.index'));
}   

	public function trash(){
    
    $listKategoriArtikel=KategoriArtikel::onlyTrashed(); //select*from kategori_artikel

    //blade
    return view('kategori_artikel.index', compact('listKategoriArtikel'));
    //return view(view: 'kategori_artikel.index')->with('data',$listKategoriArtikel);

}

=======
	return view ( 'kategori_artikel.show',compact( 'KategoriArtikel'));
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
}

	public function create(){
		return view( 'kategori_artikel.create');
	}

		public function store(Request $request){
		$input= $request->all();

		KategoriArtikel::create($input);

		return redirect(route('kategori_artikel.index'));

	}
}