<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
  protected $table='dosen';
  protected $fillable=['nama','nip','alamat','pengguna_id'];
  public function pengguna(){
  	return $this->belongsTo(pengguna::class,'pengguna_id');
  }
  //belongsTo di gunakan karen tabel dosen menerima foreign key dari tabel pengguna

  public function dosen_matakuliah(){
  	return $this->hasMany(dosen_matakuliah::class,'dosen_id');
  }
  //untuk merelasikan model dosen dan dosen_matakuliah yang di gunakan adalah hasMany karna relasinya one to many
  public function getUsernameAttribute(){
    return $this->pengguna->username;
  }
  public function listdosenDanNip(){
        $out = [];
        foreach ($this->all() as $dsen) {
            $out[$dsen->id] = "{$dsen->nama} ({$dsen->nip})";
        }
        return $out;
    }
}
