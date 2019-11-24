<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Transaksi extends Model
{
  protected $table = 'detail_transaksis';
  protected $primaryKey = 'id_detTransaksi';
  public $timestamps = true;
}
