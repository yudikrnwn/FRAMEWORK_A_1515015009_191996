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

Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/lihat/{mahasiswa}','mahasiswacontroller@lihat');
Route::post('/mahasiswa/simpan','mahasiswacontroller@simpan');
Route::get('/mahasiswa/edit/{mahasiswa}','mahasiswacontroller@edit');
Route::post('/mahasiswa/edit/{mahasiswa}','mahasiswacontroller@update');
Route::get('/mahasiswa/hapus/{mahasiswa}','mahasiswacontroller@hapus');

Route::get('dosen','dosencontroller@awal');
Route::get('dosen/lihat/{dosen}','dosencontroller@lihat');
Route::post('/dosen/simpan','dosencontroller@simpan');
Route::get('/dosen/edit/{dosen}','dosencontroller@edit');
Route::post('/dosen/edit/{dosen}','dosencontroller@update');
Route::get('/dosen/hapus/{dosen}','dosencontroller@hapus');

Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','dosen_matakuliahcontroller@lihat');
Route::post('/dosen_matakuliah/simpan','dosen_matakuliahcontroller@simpan');
Route::get('/dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@edit');
Route::post('/dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@update');
Route::get('/dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahcontroller@hapus');

Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
Route::get('/jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','jadwal_matakuliahcontroller@lihat');
Route::post('/jadwal_matakuliah/simpan','jadwal_matakuliahcontroller@simpan');
Route::get('/jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@edit');
Route::post('/jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@update');
Route::get('/jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahcontroller@hapus');