<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
use App\mahasiswa;
use App\dosen_matakuliah;
use App\ruangan;
use App\pengguna;


class jadwal_matakuliahcontroller extends Controller
{
  public function awal(){
    $semuajadwal_matakuliah = jadwal_matakuliah::all();
    return view('jadwal_matakuliah.awal',compact('semuajadwal_matakuliah'));
}

public function tambah(){
    $Mahasiswa = new mahasiswa;
    $Ruangan = new ruangan;
    $Dosen_matakuliah = new dosen_matakuliah;
    return view('jadwal_matakuliah.tambah',compact('Mahasiswa','Ruangan','Dosen_matakuliah'));
}

public function simpan(Request $input){
    $this->validate($input,[
    'mahasiswa'=>'required',
    'matakuliah'=>'required',
    'ruangan'=>'required',
    ]);
    $jadwal_matakuliah= new jadwal_matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if ($jadwal_matakuliah->save()) $this->informasi = 'Berhasil Simpan Jadwal Mahasiswa ';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }

public function edit($id){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
   $Mahasiswa = new mahasiswa;
    $Ruangan = new ruangan;
    $Dosen_matakuliah = new dosen_matakuliah;
    return view('jadwal_matakuliah.edit',compact('Mahasiswa','Ruangan','Dosen_matakuliah','jadwal_matakuliah'));
}

public function lihat($id){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
    return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
}

public function update($id, Request $input){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
    $jadwal_matakuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
    if($jadwal_matakuliah->save())$this->informasi="Jadwal Berhasil di update";
return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
}

public function hapus($id){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
    if($jadwal_matakuliah->delete()) $this->informasi = 'Berhasil Hapus data';
    return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
}
}
