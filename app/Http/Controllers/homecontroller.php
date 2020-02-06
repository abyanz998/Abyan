<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index () {
    return view('home/index');
    }

    public function menu() {
        return view('lainnya/menu');
    }

    public function about() {
        return view('lainnya/about');
    }

    public function contact() {
        return view('lainnya/contact');
    }

    public function table() {

      $tabel = DB::table('pengunjung')->get();
        return view('lainnya/table', ['lainnya' => $tabel]);
    }
}
