<?php


 use App\pengguna;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/public', function () {
    return " nama : yudi kurniawan";
});
//Route::get('/pengguna','penggunacontroller@awal');
//Route::get('/pengguna/tambah',function(){
	//$pengguna=new pengguna();
 	//$pengguna->username='yudi kurniawan';
 	//$pengguna->password='april19';
 	//$pengguna->save();
 	//return "data dengan username {$pengguna->username} telah di simpan";
//});

Route::get('pengguna','penggunacontroller@awal');
Route::get('/pengguna/tambah','penggunacontroller@tambah');
Route::get('pengguna/lihat/{pengguna}','penggunacontroller@lihat');
Route::post('/pengguna/simpan','penggunacontroller@simpan');
Route::get('/pengguna/edit/{pengguna}','penggunacontroller@edit');
Route::post('/pengguna/edit/{pengguna}','penggunacontroller@update');
Route::get('/pengguna/hapus/{pengguna}','penggunacontroller@hapus');

Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('/matakuliah/tambah','matakuliahcontroller@tambah');
Route::get('matakuliah/lihat/{matakuliah}','matakuliahcontroller@lihat');
Route::post('/matakuliah/simpan','matakuliahcontroller@simpan');
Route::get('/matakuliah/edit/{matakuliah}','matakuliahcontroller@edit');
Route::post('/matakuliah/edit/{matakuliah}','matakuliahcontroller@update');
Route::get('/matakuliah/hapus/{matakuliah}','matakuliahcontroller@hapus');

Route::get('ruangan','ruangancontroller@awal');
Route::get('/ruangan/tambah','ruangancontroller@tambah');
Route::get('ruangan/lihat/{ruangan}','ruangancontroller@lihat');
Route::post('/ruangan/simpan','ruangancontroller@simpan');
Route::get('/ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('/ruangan/edit/{ruangan}','ruangancontroller@update');
Route::get('/ruangan/hapus/{ruangan}','ruangancontroller@hapus');

Route::get('/dosen','dosencontroller@awal');
Route::get('/dosen/tambah','dosencontroller@tambah');
Route::get('/mahasiswa','mahasiswacontroller@awal');
Route::get('/mahasiswa/tambah','mahasiswacontroller@tambah');
Route::get('/matakuliah','matakuliahcontroller@awal');
Route::get('/matakuliah/tambah','matakuliahcontroller@tambah');
Route::get('/ruangan','ruangancontroller@awal');
Route::get('/ruangan/tambah','ruangancontroller@tambah');
Route::get('/dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('/dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');
Route::get('/jadwal','jadwal_matakuliahcontroller@awal');
Route::get('/jadwal/tambah','jadwal_matakuliahcontroller@tambah');
