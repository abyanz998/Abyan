<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chef;
use App\Exports\ChefExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ChefController extends Controller
{
    public function index()
  {
  $chef = Chef::all();
  return view('elements',['chef'=>$chef]);
  }

    public function export_excel()
	{
		return Excel::download(new ChefExport, 'chef.xlsx');
	}
}
