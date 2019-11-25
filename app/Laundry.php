<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
  protected $table = 'harga__laundries';
  protected $primaryKey = 'id_detLaundry';
  public $timestamps = true;
}
