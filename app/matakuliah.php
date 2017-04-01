<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
  protected $table='matakuliah';
  protected $fillable=['title','keterangan'];
  public function dosen_matakuliah(){
  	return $this->hasMany(dosen_matakuliah::class);
  }
  //matakuliah memberikan foreign key pada dosen_matakuliah yang kemudian di relasikan
}
