@extends('layouts.admin1')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Artikel
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
	     <form action="{{ route('artikels.update',$artikels->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $artikels->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

                       
                      <div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
			  			<label class="control-label">content</label>	
			  		<textarea id="text" type="ckeditor" name="content" class="ckeditor" required="">{{$artikels->content}}</textarea>
			  			@if ($errors->has('content'))
                            <span class="help-block">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
			  		</div>

					 <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">gambar</label>
                			@if (isset($artikels) && $artikels->gambar)
                            <p>	
                            <img src="{{ asset('assets/img/gambarweb/'.$artikels->gambar) }}" style="width:250px; height:250px;" alt="">
                            </p>
                        @endif
                        <input name="gambar" type="file" value="{{ $artikels->gambar }}">
                    </div>

			  		<div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Penulis</label>	
			  			<select name="user_id" class="form-control">
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
                        @foreach($kategori as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach()
                    </select>
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