@extends('master')
@section('container')
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>seluruh data dosen</strong>
			<a href="{{url('dosen/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>dosen</a>
			<div class="clearfix"></div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Nip</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<body>
				<?php $x=1;?>
				@foreach ($semuadosen as $dosen)
					<tr>
					<td>{{$x++ }}</td>
					<td>{{$dosen->nama or 'Nama kosong'}}</td>
					<td>{{$dosen->nip or 'Nip kosong'}}</td>

					<td>
					<div class="btn-group" role="group">
						<a href="{{url('dosen/edit/'.$dosen->id}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('dosen/lihat/'.$dosen->id}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('dosen/hapus/'.$dosen->id}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
					</div>
					</td>
					</tr>
				@endforeach
			</body>
		</table>
	</div>
@stop