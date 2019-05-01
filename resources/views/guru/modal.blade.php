@extends('layouts.admin1')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<div class="row">
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			   
			    <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Data Guru</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="/home">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            
			    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Guru</div>
        <div class="card-body">
        @role('admin')
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>
		@endrole
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" id="myTable">
              <thead>
			  		<tr>
			  		<th>No</th>
			  		  <th>Nama</th>
					  <th>Jabatan</th>
					  <th>Alamat</th>
					  <th>Jenis Kelamin</th>
					  <th>Telepon</th>
					  <th>Status</th>
					  <th>Poto</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($gurus as $data)
				  	  <tr>
				  	  	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama}}</td>
						<td><p>{{ $data->jabatan }}</p></td>
						<td>{{ $data->alamat}}</td>
						<td>{{ $data->j_kelamin}}</td>
						<td>{{ $data->telepon}}</td>
						<td>{{ $data->status}}</td>
						<td><img class="img-circle" src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="width: 70px; height: 70px;"></td>
						<td>
							<a href="{{ route('gurus.edit',$data->id) }}" class="btn btn-outline-primary"><i class="fa fa-pencil-square-o">&nbsp</i>Edit</a>
						</td>
						
						<td>
							<form method="post" action="{{ route('gurus.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button onclick="return confirm('Yakin ingin mengahapus data?')"
                                 type="submit" class="btn btn-outline-danger">
                                    <i class="fa fa-remove">&nbsp</i>Delete
                                </button>
							</form>
						</td>
				      </tr>

				      @endforeach	
				  	</tbody>
				  </table>
				 
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>


 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <form action="{{ route('gurus.store') }}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}

			<div class="form-group {{$errors->has('nama') ? 'has-error' : '' }}">
				<label class="control-label">Nama</label>
				<input type="text"  name="nama" class="form-control" required>
				@if ($errors->has('nama'))
				<span class="help-block"><strong>{{ $errors->first('nama') }}</strong></span>
				@endif
			</div>

		    <div class="form-group {{$errors->has('jabatan') ? 'has-error' : '' }}">
				<label class="control-label">Jabatan</label>
				<input type="text"  name="jabatan" class="form-control" required>
				@if ($errors->has('jabatan'))
				<span class="help-block"><strong>{{ $errors->first('jabatan') }}</strong></span>
				@endif
			</div>
			 <div class="form-group {{$errors->has('alamat') ? 'has-error' : '' }}">
				<label class="control-label">alamat</label>
				<input type="text"  name="alamat" class="form-control" required>
				@if ($errors->has('alamat'))
				<span class="help-block"><strong>{{ $errors->first('alamat') }}</strong></span>
				@endif
			</div>
			 <div class="form-group">
				<label class="control-label">Jenis Kelamin</label>
				<select name="j_kelamin" class="form-control" required>
                        <option value=" Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                </select>
			</div>
			 <div class="form-group {{$errors->has('telepon') ? 'has-error' : '' }}">
				<label class="control-label">telepon</label>
				<input type="text"  name="telepon" class="form-control" required>
				@if ($errors->has('telepon'))
				<span class="help-block"><strong>{{ $errors->first('telepon') }}</strong></span>
				@endif
			</div>
			 <div class="form-group {{$errors->has('status') ? 'has-error' : '' }}">
				<label class="control-label">status</label>
				<input type="text"  name="status" class="form-control" required>
				@if ($errors->has('status'))
				<span class="help-block"><strong>{{ $errors->first('status') }}</strong></span>
				@endif
			</div>
			<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="poto" type="file" required>
                            </div>
				
			<div class="form-group">
				<button type="submit" class="btn btn-danger">Submit</button>

				<button type="reset" class="btn btn-warning">Reset</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
    </div>

		</div>
	</div>
</div> 
@endsection
	    