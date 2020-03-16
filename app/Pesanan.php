<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
  protected $table = "pesanan";

  protected $fillable = ['id_pesanan','id_pelanggan','jumlah_harga','tanggal'];

  public function Pelanggan()
    {
      return $this->belongsTo('App\Pelanggan','id_pesanan','id_pelanggan'); // terelasikan dengan pelanggan
    }

    public function Pesanan_detail()
    {
      return $this->hasMany('App\Pesanan_detail','id_pesanan_detail','id_pesanan'); // satu pesanan_detail bisa memuat banyak menu 
    }
}
