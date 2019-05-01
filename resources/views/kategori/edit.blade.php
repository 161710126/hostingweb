@extends('layouts.admin1')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Edit Data Kategori Artikel
                <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
                </div>
              </div>
              <div class="panel-body">
                <form action="{{ route('kategori.update',$kategori->id) }}" method="post" enctype="multipart/form-data" >
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    
                    

                   <div class="form-group {{ $errors->has('nama_kategori') ? ' has-error' : '' }}">
                        <label class="control-label">nama_kategori</label>  
                        <input type="text" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}"  required>
                        @if ($errors->has('nama_kategori'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_kategori') }}</strong>
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