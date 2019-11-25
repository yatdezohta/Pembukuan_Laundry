<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
  protected $table = 'tipe__laundries';
  protected $primaryKey = 'id_tipe';
  public $timestamps = true;
}
