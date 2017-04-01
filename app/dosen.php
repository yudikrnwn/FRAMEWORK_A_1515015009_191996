<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
  protected $table='dosen';
  protected $fillable=['nama','nip','alamat','pengguna_id'];
  public function pengguna(){
  	return $this->belongsTo(pengguna::class);
  }
  //belongsTo di gunakan karen tabel dosen menerima foreign key dari tabel pengguna

  public function dosen_matakuliah(){
  	return $this->hasMany(dosen_matakuliah::class);
  }
  //untuk merelasikan model dosen dan dosen_matakuliah yang di gunakan adalah hasMany karna relasinya one to many
}
