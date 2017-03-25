<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class mahasiswacontroller extends Controller
{
  public function awal()
 {
 	return "selamat datang";
 }  
 public function tambah()
 {
 	return $this->simpan();
 } //
public function simpan()
 {
 	$mahasiswa=new mahasiswa();
 	$mahasiswa->nama='yudi kurniawan';
 	$mahasiswa->nim='1515015009';
 	$mahasiswa->alamat='jl. suryanata';
 	$mahasiswa->pengguna_id=1;
 	$mahasiswa->save();
 	return "data dengan nama {$mahasiswa->nama} telah di simpan";
 }
}