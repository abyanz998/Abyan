<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  protected $table = "menu";

  protected $fillable = ['file','keterangan','judul','harga'];

  public function Statistik()
    {
    	return $this->hasOne('App\Statistik','id_menu');
    }

    public function Pesanan_detail()
      {
      	return $this->hasMany('App\Pesanan_detail','id_menu'); // menu bisa memiliki banyak pesanan_detail
      }
}
