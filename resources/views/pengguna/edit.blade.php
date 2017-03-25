@extends('master')
@section('container')
	<div class="panel panel-info">
		<div class="panel-heading">
			<strong><a href="{{url('pengguna')}}"><i class="fa text-default fa-chevron-left"></i></a> perbarui data pengguna</strong>
		</div>
		{!! form::model(pengguna,['url'=>'pengguna/edit/'.$pengguna->id,'class'=>'form-horizontal'])!!}
		@include('pengguna.form')
		<div style="width: 100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i>simpan</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>ulangi</button>
		</div>
		{!! form::close() !!}
	</div>
@stop