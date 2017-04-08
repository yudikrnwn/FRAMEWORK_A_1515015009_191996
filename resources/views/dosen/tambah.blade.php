@extends('master')
@section('container')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<strong><a href="{{url('dosen')}}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a> tambah data dosen</strong>
		</div>
		{!! 
		Form::open(['url'=>'dosen/simpan','class'=>'form-horizontal'])!!}
		
		@include('dosen.form')
		<div style="width: 100%;text-align:right;">
			<button class="btn btn-primary"><i class="fa fa-save"></i>simpan</button>
			<button class="btn btn-danger"><i class="fa fa-undo"></i>ulangi</button>
		</div>
		{!! Form::close() !!}
	</div>
@stop