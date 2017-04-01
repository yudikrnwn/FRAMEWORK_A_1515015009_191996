<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
  protected $table='jadwal_matakuliah';
  protected $fillable=['dosen_id','ruangan_id','dosen_matakuliah_id'];
  public function dosen(){
  	return $this->belongsTo(dosen::class);
  }
   public function ruangan(){
  	return $this->belongsTo(ruangan::class);
  }
   public function mahasiswa(){
  	return $this->belongsTo(mahasiswa::class);
  }
  //jadwal_matakuliah berelasi dengan dosen, ruangan, dan mahasiswa dengan menggunakan belongsTo
}
