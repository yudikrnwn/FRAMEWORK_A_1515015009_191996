<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
  protected $table='jadwal_matakuliah';
  protected $fillable=['dosen_id','matakuliah_id','dosen_matakuliah_id']; //
}
