@extends('master')
@section('container')
	<div class="panel panel-warning">
		<div class="panel-heading">
			<strong><a href="{{url('pengguna')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> detil data pengguna</strong>
		</div>
		<table class="table">
		<tr>
			<td>username</td>
			<td>:</td>
			<td>{{$pengguna->username}}</td>
		</tr>
		<tr>
			<td>password</td>
			<td>:</td>
			<td>{{$pengguna->password}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengguna->created at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengguna->update at}}</td>
		</tr>
	</table>
</div>
@stop