<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $table = "chef"; // dimana model ini menghadnle tabel bernama chef

    protected $fillable = ['nama','alamat']; // ini adalah Mass Assignment/ filter mana yg boleh diinput      
}
