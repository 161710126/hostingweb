@extends('layouts.admin1')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Prestasi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('prestasis.update',$prestasis->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $prestasis->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

	                <div class="form-group {{ $errors->has('tanggal_peroleh') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Peroleh</label>	
			  			<input type="date" name="tanggal_peroleh" class="form-control" value="{{ $prestasis->tanggal_peroleh }}"  required>
			  			@if ($errors->has('tanggal_peroleh'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_peroleh') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">poto</label>
                			@if (isset($prestasis) && $prestasis->poto)
                            <p>	
                            <img src="{{ asset('assets/img/gambarweb/'.$prestasis->poto) }}" style="width:250px; height:250px;" alt="">
                            </p>
                        @endif
                        <input name="poto" type="file" value="{{ $prestasis->poto }}">
                    </div>

			  		 <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $prestasis->deskripsi }}"  required>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('eskul_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Eskul</label>	
			  			<select name="eskul_id" class="form-control">
			  				@foreach($eskuls as $data)
			  				<option value="{{ $data->id }}" {{ $selectedes == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('eskul_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('eskul_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection