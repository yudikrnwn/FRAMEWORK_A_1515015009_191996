<div class="form-group">
<label class="col-sm-2 control-label" id="mahasiswa_id">MAHASISWA</label>
<div class="col-sm-10">
	{!! Form::select('mahasiswa_id',$mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','id'=>'mahasiswa_id','placeholder'=>"pilih--"])!!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="mahasiswa_id">MATAKULIAH</label>
<div class="col-sm-10">
	{!! Form::select('dosen_matakuliah_id',$dosen_matakuliah->listDosenDanMatakuliah(),null,['class'=>'form-control','id'=>'dosen_matakuliah_id','placeholder'=>"pilih--"])!!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="ruangan_id">RUANGAN</label>
<div class="col-sm-10">
	{!! Form::select('ruangan_id',$ruangan->lists('title','id'),null,['class'=>'form-control','id'=>'ruangan_id','placeholder'=>"pilih--"])!!}
</div>
</div>
