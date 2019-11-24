<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe_Laundry extends Model
{
  protected $table = 'tipe_laundries';
  protected $primaryKey = 'id_tipe';
  public $timestamps = true;
}
