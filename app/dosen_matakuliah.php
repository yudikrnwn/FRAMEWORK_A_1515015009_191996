<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
  protected $table='dosen_matakuliah';
  protected $fillable=['dosen_id','matakuliah_id'];
  public function dosen(){
      return $this->belongsTo(dosen::class,'dosen_id');}

    public function matakuliah(){
      return $this->belongsTo(matakuliah::class,'matakuliah_id');}

    public function jadwal_matakuliah(){
      return $this->hasMany(jadwal_matkul::class,'dosen_matakuliah_id');
    }
    public function listDosenDanMatakuliah(){
      $out = [];
      foreach ($this->all() as $dosenmatakuliah) {
        $out[$dosenmatakuliah->id] = "{$dosenmatakuliah->dosen->nama} (matakuliah {$dosenmatakuliah->matakuliah->title})";
      }
      return $out;
    }
}
