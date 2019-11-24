<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
  protected $table = 'pengeluarans';
  protected $primaryKey = 'id_pengeluaran';
  public $timestamps = true;
}
