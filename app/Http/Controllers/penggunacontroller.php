<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\routes;

class penggunacontroller extends Controller
{
 public function awal()
 {
 	return "hello dari penggunacontroller";
 }  
 public function tambah()
 {
 	return $this->simpan();
 } //
public function simpan()
 {
 	$pengguna=new pengguna();
 	$pengguna->username='yudi kurniawan';
 	$pengguna->password='april19';
 	$pengguna->save();
 	return "data dengan username {$pengguna->username} telah di simpan";
 }
}
