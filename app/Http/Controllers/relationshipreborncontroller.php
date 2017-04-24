<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
use App\dosen_matakuliah;

class relationshipreborncontroller extends Controller

{
	public function ujidoesnthave(){
		return dosen::doesnthave('dosen_matakuliah')->get();
	}
    public function ujihas()
	{
		return dosen::has('dosen_matakuliah')->get();
	}
}
