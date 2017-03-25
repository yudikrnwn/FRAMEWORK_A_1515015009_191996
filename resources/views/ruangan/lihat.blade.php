@extends('master')
@section('container')
	<div class="panel panel-warning">
		<div class="panel-heading">
			<strong><a href="{{url('ruangan')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> detil data ruangan</strong>
		</div>
		<table class="table">
		<tr>
			<td>title</td>
			<td>:</td>
			<td>{{$ruangan->title}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ruangan->created at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ruangan->update at}}</td>
		</tr>
	</table>
</div>
@stop