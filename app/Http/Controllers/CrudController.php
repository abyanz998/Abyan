<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chef; // memanggil model chef jadi pakai eloquent
use App\Menu; // memanggil model Gambar jadi pakai eloquent

class CrudController extends Controller
{
  public function tambah()
  {
      return view('tambah');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nama' => 'required',
    	'alamat' => 'required'
    ]);

    Chef::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat
    	]); // perintah eloquent untuk menginput data ke database
      return redirect('/chef');
  }

  public function edit($id){

    $chef = Chef::find($id);
   return view('update', ['chef' => $chef]); // ini masalahnya kalau mau pakai model ya disinii dia kan soalnya ke parse ke halaman beda di update.blade

  }

  public function update($id, Request $request)
  {
    $this->validate($request,[
	   'nama' => 'required',
	   'alamat' => 'required'
    ]);

    $chef = Chef::find($id);
    $chef->nama = $request->nama;
    $chef->alamat = $request->alamat;
    $chef->save();
    return redirect('/chef');
  }


  public function delete($id)
  {
    $chef = Chef::find($id);
    $chef->delete();
    return redirect('/chef');
  }

  public function upload(){
    $menu = Menu::paginate(2);
		return view('upload',['menu'=>$menu]);
	}

  public function proses_upload(Request $request){
		$this->validate($request, [
      'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
      'judul' => 'required',
      'harga' => 'required'
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

    $nama_file = time()."_".$file->getClientOriginalName();

    // isi dengan nama folder tempat kemana file diupload
    		$tujuan_upload = 'data_file';
    		$file->move($tujuan_upload,$nama_file);

    		Menu::create([
    			'file' => $nama_file,
    			'keterangan' => $request->keterangan,
          'judul' => $request->judul,
          'harga' => $request->harga,
    		]);

    		return redirect()->back();
	}

  public function hapus($id){
    $menu = Menu::find($id);
    $menu->delete();
    return redirect('/upload');
  }

  public function statistik_update($id, Request $request)
  {
    $$this->validate($request,[
	   'nama' => 'required',
	   'alamat' => 'required'
    ]);

    $chef = Chef::find($id);
    $chef->nama = $request->nama;
    $chef->alamat = $request->alamat;
    $chef->save();
    return redirect('/chef');
  }

  public function beli(Request $request, $id)
  {
    $belis = Menu::find($id);
    // dd($request); // disini proses umpan dari form beli kalau uda lewat route


  }

}
