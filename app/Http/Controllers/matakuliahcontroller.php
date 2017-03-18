<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
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
 	$matakuliah=new matakuliah();
 	$matakuliah->title='framework';
 	$matakuliah->keterangan='wajib';
 	$matakuliah->save();
 	return "data dengan {$matakuliah->title} telah di simpan";
 }  //
}
