@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Jadwal Dosen Mengajar</strong>
	<a href="{{url('dosen_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal Dosen</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Nama dosen</th>
			<th>Nip dosen</th>
			<th>Nama Matakuliah</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuadosen_matakuliah as $dosenmatkul)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $dosenmatkul->dosen->nama or 'nama kosong'}}</td>
				<td>{{ $dosenmatkul->dosen->nip or 'nip kosong'}}</td>
				<td>{{ $dosenmatkul->matakuliah->title or 'matakuliah kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('dosen_matakuliah/edit/'.$dosenmatkul->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Edit">Edit</a>
	<a href  ="{{url('dosen_matakuliah/lihat/'.$dosenmatkul->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('dosen_matakuliah/hapus/'.$dosenmatkul->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop