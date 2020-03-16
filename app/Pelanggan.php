<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
  protected $table = "pelanggan";

  protected $fillable = ['id_pelanggan','nama','alamat_tujuan','no_hp'];

  public function Pesanan()
    {
    	return $this->hasMany('App\Pesanan','id_pesanan','id_pelanggan'); // satu pelanggan bisa banyak pesanan sebanyaknya
    }
}
