<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  @var string
  protected $table = 'roles';

  @var string
protected $primaryKey = 'idRole';

@var array
protected $fillable = ['access']
/**
*@return \Illuminate\Database\Eloquent\Relations\HasMany
*/


public function users()
{
  return $this->hasMany('App\User', 'level', 'idRole');
}
//   public $timestamps = false;
//   protected $fillable = [
//   'role_name', 'created_at', 'updated_at'
// ];
//     /*
//     * Method untuk yang mendefinisikan relasi antara model user dan model Role
//     */
//     public function getUserObject()
//     {
//       return $this->belongsToMany(User::class)->using(UserRole::class);
    // }
}
