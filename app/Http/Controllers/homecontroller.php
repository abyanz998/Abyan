<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chef; // memanggil model chef jadi pakai eloquent
use App\Menu; // memanggil model Gambar jadi pakai eloquent

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    //===============================================
    public function chef()
    {
      // mengambil data chef
    	$chef = Chef::all();

    	// mengirim data chef ke view elements
    	return view('elements', ['chef' => $chef]);
    }
    //===============================================
    public function tambah()
    {
        return view('tambah');
    }

    public function statistik()
    {
      $menu = Menu::all();
  		return view('statistik',['menu'=>$menu]);
    }

}
