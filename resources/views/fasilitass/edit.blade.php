@extends('layouts.admin1')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Fasilitas
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('fasilitas.update',$fasilitas->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}  
			  		
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $fasilitas->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

	                <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">poto</label>
                			@if (isset($fasilitas) && $fasilitas->poto)
                            <p>	
                            <img src="{{ asset('assets/img/gambarweb/'.$fasilitas->poto) }}" style="width:250px; height:250px;" alt="">
                            </p>
                        @endif
                        <input name="poto" type="file" value="{{ $fasilitas->poto }}">
                    </div>

			  		
			  		<div class="form-group {{ $errors->has('kategorifasilitas_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Fasilitas</label>	
			  			<select name="kategorifasilitas_id" class="form-control">
			  				@foreach($kategfasilitas as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_fasilitas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategorifasilitas_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategorifasilitas_id') }}</strong>
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