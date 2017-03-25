@extends('master')
@section('container')
	<div class="panel panel-info">
		<div class="panel-heading">
			<strong><a href="{{url('ruangan')}}"><i class="fa text-default fa-chevron-left"></i></a> perbarui data ruangan</strong>
		</div>
		{!! Form::open(['url'=>'ruangan/edit/'.$ruangan->id,'class'=>'form-horizontal'])!!}
		@include('ruangan.form')
		<div style="width: 100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i>perbarui</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>ulangi</button>
		</div>
		{!! form::close() !!}
	</div>
@stop