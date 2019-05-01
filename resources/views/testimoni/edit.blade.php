@extends('layouts.admin1')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Testimoni
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('testimonis.update',$testimonis->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $testimonis->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

	                

			  		<div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">poto</label>
                			@if (isset($testimonis) && $testimonis->poto)
                            <p>	
                            <img src="{{ asset('assets/img/gambarweb/'.$testimonis->poto) }}" style="width:250px; height:250px;" alt="">
                            </p>
                        @endif
                        <input name="poto" type="file" value="{{ $testimonis->poto }}">
                    </div>

			  		 <div class="form-group {{ $errors->has('angkatan') ? ' has-error' : '' }}">
			  			<label class="control-label">angkatan</label>	
			  			<input type="text" name="angkatan" class="form-control" value="{{ $testimonis->angkatan }}"  required>
			  			@if ($errors->has('angkatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('angkatan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
			  			<label class="control-label">content</label>	
			  		<textarea id="text" type="ckeditor" name="content" class="ckeditor" required="">{{$testimonis->content}}</textarea>
			  			@if ($errors->has('content'))
                            <span class="help-block">
                                <strong>{{ $errors->first('content') }}</strong>
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
	<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
</div>
@endsection