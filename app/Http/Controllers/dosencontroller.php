<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
  public function awal()
 {
 	return "hello";
 }  
 public function tambah()
 {
 	return $this->simpan();
 } //
public function simpan()
 {
 	$dosen=new dosen();
 	$dosen->nama='budiman';
 	$dosen->nip='84738547384';
 	$dosen->alamat='jl. trisari';
 	$dosen->pengguna_id=1;
 	$dosen->save();
 	return "data dengan nama {$dosen->nama} telah di simpan";
 }

}
