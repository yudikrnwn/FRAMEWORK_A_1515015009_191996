<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
  protected $table='jadwal_matakuliah';
  protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id','dosen_id'];

    public function dosen_matakuliah(){
      return $this->belongsTo(dosen_matakuliah::class,'dosen_matakuliah_id');
    }
    public function mahasiswa(){
      return $this->belongsTo(mahasiswa::class,'mahasiswa_id');
    }
    public function ruangan(){
      return $this->belongsTo(ruangan::class,'ruangan_id');
    }
  //jadwal_matakuliah berelasi dengan dosen, ruangan, dan mahasiswa dengan menggunakan belongsTo
}
