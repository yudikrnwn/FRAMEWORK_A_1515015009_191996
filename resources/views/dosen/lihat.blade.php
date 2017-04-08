@extends('master')
@section('container')
	<div class="panel panel-warning">
		<div class="panel-heading">
			<strong><a href="{{url('dosen')}}"><i style="color:pink" class="fa text-default fa-chevron-left"></i></a> detil data dosen</strong>
		</div>
		<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$dosen->nama}}</td>
		</tr>
		<tr>
			<td>Nip</td>
			<td>:</td>
			<td>{{$dosen->nip}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$dosen->alamat}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{$dosen->pengguna->username}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{$dosen->pengguna->password}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen->update_at}}</td>
		</tr>
	</table>
</div>
@stop