@extends('master')
@section('container')
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>seluruh data mahasiswa</strong>
			<a href="{{url('mahasiswa/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>mahasiswa</a>
			<div class="clearfix"></div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Nim</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<body>
				<?php $x=1;?>
				@foreach ($semuamahasiswa as $mahasiswa)
					<tr>
					<td>{{$x++ }}</td>
					<td>{{$mahasiswa->nama or 'Nama kosong'}}</td>
					<td>{{$mahasiswa->nim or 'Nim kosong'}}</td>

					<td>
					<div class="btn-group" role="group">
						<a href="{{url('mahasiswa/edit/'.$mahasiswa->id}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('mahasiswa/lihat/'.$mahasiswa->id}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('mahasiswa/hapus/'.$mahasiswa->id}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
					</div>
					</td>
					</tr>
				@endforeach
			</body>
		</table>
	</div>
@stop