<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
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
 	$ruangan=new ruangan();
 	$ruangan->title='406';
 	$ruangan->save();
 	return "data dengan {$ruangan->title} telah di simpan";
 }
}
