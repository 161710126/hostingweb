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
                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            
			    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table" style="width: 100%;"></i> Data Table Guru</div>
        <div class="card-body">
         <a class="btn btn-outline-warning" href="{{ route('gurus.create') }}"><i class="fa fa-plus-square">&nbsp</i>Tambah</a>
         <br>
         <form class="form-header" action="" method="POST">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <style type="text/css">
              #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 94%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
            </style>
            <script type="text/javascript">
              function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
            </script>
                            </form>

          <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="myTable">
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
@endsection

	    