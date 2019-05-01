@extends('layouts.admin1')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Testimoni </b>
		<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('testimonis.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group {{$errors->has('nama') ? 'has-error' : '' }}">
				<label class="control-label">Nama</label>
				<input type="text"  name="nama" class="form-control" required>
				@if ($errors->has('nama'))
				<span class="help-block"><strong>{{ $errors->first('nama') }}</strong></span>
				@endif
			</div>


			<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="poto" type="file" required>
                            </div>


			<div class="form-group {{$errors->has('angkatan') ? 'has-error' : '' }}">
				<label class="control-label">angkatan</label>
				<input type="text"  name="angkatan" class="form-control" required>
				@if ($errors->has('angkatan'))
				<span class="help-block"><strong>{{ $errors->first('angkatan') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('content') ? 'has-error' : '' }}">
				<label class="control-label">content</label>
				<textarea id="text" type="ckeditor" name="content" class="ckeditor" required=""></textarea>
				@if ($errors->has('content'))
				<span class="help-block"><strong>{{ $errors->first('content') }}</strong></span>
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


