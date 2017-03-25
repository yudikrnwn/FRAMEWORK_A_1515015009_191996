@extends('master')
@section('container')
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>seluruh data matakuliah</strong>
			<a href="{{url('matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>matakuliah</a>
			<div class="clearfix"></div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Title</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<body>
				<?php $x=1;?>
				@foreach ($data as $matakuliah)
					<tr>
					<td>{{$x++ }}</td>
					<td>{{$matakuliah->title or 'title kosong'}}</td>
					<td>{{$matakuliah->keterangan or 'keterangan kosong'}}</td>

					<td>
					<div class="btn-group" role="group">
						<a href="{{url('matakuliah/edit/'.$matakuliah->id}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('matakuliah/lihat/'.$matakuliah->id}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('matakuliah/hapus/'.$matakuliah->id}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
					</div>
					</td>
					</tr>
				@endforeach
			</body>
		</table>
	</div>
@stop