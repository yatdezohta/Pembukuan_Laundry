<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
  protected $table = 'det__laundries';
  protected $primaryKey = 'id_detLaundry';
  public $timestamps = true;

  public function Transaksi(){
        return $this->hasMany('App\Transaksi','id_transaksi');
    }
}
