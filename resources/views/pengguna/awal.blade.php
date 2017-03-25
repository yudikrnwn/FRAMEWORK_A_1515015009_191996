@extends('master')
@section('container')
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>seluruh data pengguna</strong>
			<a href="{{url('pengguna/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>pengguna</a>
			<div class="clearfix"></div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Username</th>
					<th>Password</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<body>
				<?php $x=1;?>
				@foreach ($data as $pengguna)
					<tr>
					<td>{{$x++ }}</td>
					<td>{{$pengguna->username or 'username kosong'}}</td>
					<td>{{$pengguna->password or 'password kosong'}}</td>

					<td>
					<div class="btn-group" role="group">
						<a href="{{url('pengguna/edit/'.$pengguna->id}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('pengguna/lihat/'.$pengguna->id}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pengguna/hapus/'.$pengguna->id}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
					</div>
					</td>
					</tr>
				@endforeach
			</body>
		</table>
	</div>
@stop