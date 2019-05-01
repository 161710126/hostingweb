@extends('layouts.admin1')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Artikel </b>
		<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('artikels.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group {{$errors->has('judul') ? 'has-error' : '' }}">
				<label class="control-label">judul</label>
				<input type="text"  name="judul" class="form-control" required>
				@if ($errors->has('judul'))
				<span class="help-block"><strong>{{ $errors->first('judul') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('content') ? 'has-error' : '' }}">
				<label class="control-label">content</label>
				<textarea id="text" type="ckeditor" name="content" class="ckeditor" required=""></textarea>
				@if ($errors->has('content'))
				<span class="help-block"><strong>{{ $errors->first('content') }}</strong></span>
				@endif
			</div>


			<div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Gambar</label>
            <input name="gambar" type="file" required>
                          </div>

			  		<div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Penulis</label>	
			  			<select name="user_id" class="form-control">
			  			<option>Nama Penulis</option>
			  				@foreach($users as $data)
			  				<option value="{{ $data->id }}">{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('user_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		 <div class="form-group">
                    <label>Kategori</label>
                     <select class="form-control" name="kategori_id" id="" required>
                     <option>Pilih Kategori</option>
                        @foreach($kategori as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach()
                    </select>
                </div>

				<div class="from-group">
				<button type="submit" class="btn btn-primary">
				<i class="fa fa-save">&nbsp</i>Tambah</button>
				<button type="reset" class="btn btn-success">
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


