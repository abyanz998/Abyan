<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
  protected $table = "statistik";

  protected $fillable = ['terjual','id_menu'];

  public function Menu()
    {
    	return $this->belongsTo('App\Menu');
    }
}
