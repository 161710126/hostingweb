@extends('layouts.admin1')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Guru
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('events.update',$events->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

        			 <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Poto</label>
                			@if (isset($events) && $events->poto)
                            <p>	
                            <img src="{{ asset('assets/img/gambarweb/'.$events->poto) }}" style="width:250px; height:250px;" alt="">
                            </p>
                        @endif
                        <input name="poto" type="file" value="{{ $events->poto }}">
                    </div>
			  		
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $events->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		  <div class="form-group {{ $errors->has('tgl') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal</label>
			  			<input name="tgl" class="form-control" value="{{ $events->tgl }}" type="date" required>
			  			@if ($errors->has('tgl'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl') }}</strong>
                            </span>
                        @endif
			  		 </div>

			  		 <div class="form-group {{ $errors->has('jam') ? ' has-error' : '' }}">
			  			<label class="control-label">Jam</label>	
			  			<input type="text" name="jam" class="form-control" value="{{ $events->jam }}"  required>
			  			@if ($errors->has('jam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jam') }}</strong>
                            </span>
                        @endif
			  		 </div>

					 <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $events->alamat }}"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		 </div>               

			  		 <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  		<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required="">{{$events->deskripsi}}</textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
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