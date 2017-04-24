<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class pengguna extends Authenticable
{
  protected $table='pengguna';
  protected $fillable=['username','password'];
  public function mahasiswa()
  {
  	return $this->hasOne(mahasiswa::class);
  }
  public function dosen()
  {
  	return $this->hasOne(dosen::class);
  }
  //tabel pengguna berelasi dengan tabel mahasiswa dan dosen dengan memberikan foreign key

  public function peran()
  {
  	return $this->belongsToMany(peran::class);
  }
}
