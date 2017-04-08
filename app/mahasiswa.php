<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
  protected $table='mahasiswa';
  protected $fillable=['nama','nim','alamat','pengguna_id'];
  public function pengguna()
  {
  	return $this->belongsTo(pengguna::class);
  }
  //mahasiswa menerima foreign key dari pengguna

  public function jadwal_matakuliah()
  {
  	return $this->hasMany(jadwal_matakuliah::class);
  }
  //mahasiswa memberikan foreign key pada jadwal_matakuliah yang di relasikan dengan hasMany

  public function getUsernameAttribute(){
    return $this->pengguna->username;
  }
  public function listmahasiswadannim(){
    $out=[];
    foreach($this->all()as $mhs){
      $out[$mhs->id]="{$mhs->nama} ({$mhs->nim})";
    }
    return $out;
  }
}
