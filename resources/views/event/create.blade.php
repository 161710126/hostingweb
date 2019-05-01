@extends('layouts.admin1')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Event </b>
		<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="poto" type="file" required>
                            </div>

			<div class="form-group {{$errors->has('judul') ? 'has-error' : '' }}">
				<label class="control-label">Judul</label>
				<input type="text"  name="judul" class="form-control" required>
				@if ($errors->has('judul'))
				<span class="help-block"><strong>{{ $errors->first('judul') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('tgl') ? 'has-error' : '' }}">
			<label class="control-label">Tanggal</label>
				<input type="date" name="tgl">
			</div>
			
			<div class="form-group {{$errors->has('jam') ? 'has-error' : '' }}">
				<label class="control-label">Jam</label>
				<input type="text"  name="jam" class="form-control" required>
				@if ($errors->has('jam'))
				<span class="help-block"><strong>{{ $errors->first('jam') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('alamat') ? 'has-error' : '' }}">
				<label class="control-label">Alamat</label>
				<input type="text"  name="alamat" class="form-control" required>
				@if ($errors->has('alamat'))
				<span class="help-block"><strong>{{ $errors->first('alamat') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('deskripsi') ? 'has-error' : '' }}">
				<label class="control-label">deskripsi</label>
				<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required=""></textarea>
				@if ($errors->has('deskripsi'))
				<span class="help-block"><strong>{{ $errors->first('deskripsi') }}</strong></span>
				@endif
			</div>

			<div class="from-group">
				<button type="submit" class="btn btn-outline-primary">
				<i class="fa fa-save">&nbsp</i>Tambah</button>
				<button type="reset" class="btn btn-outline-success">
				<i class="fa fa-refresh fa-spin">&nbsp</i>Ulangi</button>
			</div>

		</form>
	</div>
</div>
</div>
</div>
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>

</div>
@endsection


