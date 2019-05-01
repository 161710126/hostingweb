@extends('layouts.index')
@section('content')
<div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
             <!--  <img src="{{asset('assets/guest/images/guru.jpg')}}" style="width: 1550px; height: 1150px;" alt="bradcaump images"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Kumpulan Guru MTs AL IKHLAS</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Beranda</a>
                                  <span class="brd-separetor"><img src="{{asset('assets/baru/images/icons/brad.png')}}" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Guru</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<section class="events-list">
			<div class="container">
				<div class="row">
					@foreach($gurus as $data)
					<div class="col-xs-5 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
							<img class="img-circle" src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="width: 350px; height: 350px;" alt="image">
							</div>
							<div class="events-item-info">
								<h3>{{ $data->nama}}</h3>
								<p>Jabatan       : {{ $data->jabatan }}</p>
								<p>Alamat        : {{ $data->alamat}}</p>
								<p>Jenis Kelamin : {{ $data->j_kelamin}}</p>
								<p>Telepon       : {{ $data->telepon}}</p>
								<p>Status        : {{ $data->status}}</p>
							</div>	
						</div>
					</div>	
					@endforeach
				</div>
				<a href="#" class="events-load-more">
					<span>Selanjutnya<i class="fa fa-angle-down" aria-hidden="true"></i></span>
				</a>
			</div>
		</section>
@endsection