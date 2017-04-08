<div class="form-group">
<label class="col-sm-2 control-label" id="dosen_id">DOSEN</label>
<div class="col-sm-10">
	{!! Form::select('dosen_id',$dosen->listdosenDanNip(),null,['class'=>'form-control','id'=>'dosen_id','placeholder'=>"pilih--"])!!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="matakuliah_id">MATAKULIAH</label>
<div class="col-sm-10">
	{!! Form::select('matakuliah_id',$matakuliah->lists('title','id'),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"pilih--"])!!}
</div>
</div>
