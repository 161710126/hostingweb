@extends('layouts.admin1')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Guru </b>
		<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('gurus.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group {{$errors->has('nama') ? 'has-error' : '' }}">
				<label class="control-label">Nama</label>
				<input type="text"  name="nama" class="form-control" required>
				@if ($errors->has('nama'))
				<span class="help-block"><strong>{{ $errors->first('nama') }}</strong></span>
				@endif
			</div>

		    <div class="form-group {{$errors->has('jabatan') ? 'has-error' : '' }}">
				<label class="control-label">Jabatan</label>
				<input type="text"  name="jabatan" class="form-control" required>
				@if ($errors->has('jabatan'))
				<span class="help-block"><strong>{{ $errors->first('jabatan') }}</strong></span>
				@endif
			</div>
			 <div class="form-group {{$errors->has('alamat') ? 'has-error' : '' }}">
				<label class="control-label">alamat</label>
				<input type="text"  name="alamat" class="form-control" required>
				@if ($errors->has('alamat'))
				<span class="help-block"><strong>{{ $errors->first('alamat') }}</strong></span>
				@endif
			</div>
			 <div class="form-group">
				<label class="control-label">Jenis Kelamin</label>
				<select name="j_kelamin" class="form-control" required>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                </select>
			</div>
			 <div class="form-group {{$errors->has('telepon') ? 'has-error' : '' }}">
				<label class="control-label">telepon</label>
				<input type="text"  name="telepon" class="form-control" required>
				@if ($errors->has('telepon'))
				<span class="help-block"><strong>{{ $errors->first('telepon') }}</strong></span>
				@endif
			</div>
			 <div class="form-group {{$errors->has('status') ? 'has-error' : '' }}">
				<label class="control-label">status</label>
				<input type="text"  name="status" class="form-control" required>
				@if ($errors->has('status'))
				<span class="help-block"><strong>{{ $errors->first('status') }}</strong></span>
				@endif
			</div>
			<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="poto" type="file" required>
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
</div>
@endsection


