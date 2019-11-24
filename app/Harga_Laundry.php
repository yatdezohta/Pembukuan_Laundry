<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga_Laundry extends Model
{
  protected $table = 'harga_laundries';
  protected $primaryKey = 'id_detLaundry';
  public $timestamps = true;
}
