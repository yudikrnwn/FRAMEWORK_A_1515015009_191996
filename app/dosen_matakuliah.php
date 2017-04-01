<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
  protected $table='dosen_matakuliah';
  protected $fillable=['dosen_id','matakuliah_id'];
  public function jadwal_matakuliah()
  {
  	return $this->hasMany(jadwal_matakuliah::class);
  }
  //model dosen_matakuliah memberikan foreign key pada jadwal_matakuliah menggunakan hasMany

  public function dosen()
  {
  	return $this->belongsTo(dosen::class);
  }
  //dosen_matakuliah menerima foreign key dari tabel dosen dan di relasikan dengan menggunakan belongsTo
}
