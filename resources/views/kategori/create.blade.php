@extends('layouts.admin1')
@section('content')

<div class="row">
    <div class="container">
    <div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading"><b>Tambah Data Kategori Artikel </b>
        <div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
        </div>
    </div>
    <div class="panel-body">
        <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="form-group {{$errors->has('nama_kategori') ? 'has-error' : '' }}">
                <label class="control-label">nama_kategori</label>
                <input type="text"  name="nama_kategori" class="form-control" required>
                @if ($errors->has('nama_kategori'))
                <span class="help-block"><strong>{{ $errors->first('nama_kategori') }}</strong></span>
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


