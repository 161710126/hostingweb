@extends('layouts.admin1')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Prestasi </b>
		<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('prestasis.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group {{$errors->has('nama') ? 'has-error' : '' }}">
				<label class="control-label">Nama</label>
				<input type="text"  name="nama" class="form-control" required>
				@if ($errors->has('nama'))
				<span class="help-block"><strong>{{ $errors->first('nama') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('tanggal_peroleh') ? 'has-error' : '' }}">
				<label class="control-label">tanggal_peroleh</label>
				<input type="date"  name="tanggal_peroleh" class="form-control" required>
				@if ($errors->has('tanggal_peroleh'))
				<span class="help-block"><strong>{{ $errors->first('tanggal_peroleh') }}</strong></span>
				@endif
			</div>

			<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="poto" type="file" required>
                            </div>


			<div class="form-group {{$errors->has('deskripsi') ? 'has-error' : '' }}">
				<label class="control-label">deskripsi</label>
				<input type="text"  name="deskripsi" class="form-control" required>
				@if ($errors->has('deskripsi'))
				<span class="help-block"><strong>{{ $errors->first('deskripsi') }}</strong></span>
				@endif
			</div>

				<div class="form-group {{ $errors->has('eskul_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Eskul</label>	
			  			<select name="eskul_id" class="form-control">
			  			<option>Pilih Kategori</option>
			  				@foreach($eskuls as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('eskul_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('eskul_id') }}</strong>
                            </span>
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
</div>
@endsection


