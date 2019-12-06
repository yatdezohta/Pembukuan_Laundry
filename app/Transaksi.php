<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  protected $table = 'transaksis';
  protected $primaryKey = 'id_transaksi';
  public $timestamps = true;

  public function Laundry(){
        return $this->belongsTo('App\Laundry','id_detLaundry');
    }
}
