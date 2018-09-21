<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff2 extends Model
{
  public function Stuff1() {
  	return $this->belongsTo('\App\Stuff1', 'id_barang', 'id');
  }
}
