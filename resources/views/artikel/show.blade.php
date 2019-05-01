@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Artikel 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $artikels->judul }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
			  			<label class="control-label">Content</label>	
			  			<textarea name="content" class="form-control" rows="10" readonly>{{ $artikels->content }}</textarea>
			  		</div>

			  		<div class="form-group {{ $errors->has('galeri_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Karegori Galeri</label>
			  			<textarea name="content" class="form-control" rows="10" readonly>{{ $artikels->galeri_id }}</textarea>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection	