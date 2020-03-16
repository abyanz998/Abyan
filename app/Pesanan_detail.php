<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan_detail extends Model
{
  protected $table = "pesanan_detail";

  protected $fillable = ['id_pesanan_detail','id_menu','id_pesanan','jumlah_menu','jumlah_harga'];

    public function Menu()
    {
      return $this->belongsTo('App\Menu','id_menu'); // terelasikan deengan menu menu yang ada
    }

    public function Pesanan()
      {
        return $this->belongsTo('App\Pesanan','id_pesanan_detail','id_pesanan'); //terelasikan dengan pesanana yang ada 
      }

}
