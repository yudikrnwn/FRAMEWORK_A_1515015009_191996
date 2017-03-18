<?php


 use App\pengguna;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/public', function () {
    return " nama : yudi kurniawan";
});
Route::get('/pengguna','penggunacontroller@awal');
Route::get('/pengguna/tambah',function(){
	$pengguna=new pengguna();
 	$pengguna->username='yudi kurniawan';
 	$pengguna->password='april19';
 	$pengguna->save();
 	return "data dengan username {$pengguna->username} telah di simpan";
});

Route::get('/dosen/tambah','dosencontroller@tambah');
Route::get('/mahasiswa/tambah','mahasiswacontroller@tambah');
Route::get('/matakuliah/tambah','matakuliahcontroller@tambah');
Route::get('/ruangan/tambah','ruangancontroller@tambah');
Route::get('/jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
Route::get('/dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');
