@extends('layouts.index')
@section('content')
<div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
             <!--  <img src="{{asset('assets/baru/images/bg-png/6.png')}}" alt="bradcaump images"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Ekstrakurikuler</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Beranda</a>
                                  <span class="brd-separetor"><img src="{{asset('assets/baru/images/icons/brad.png')}}" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Ekstrakurikuler</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		 <center><header class="section-header">
          <h2>Defenisi Ekstrakurikuler</h2>
           <p style="font-size: 17px;">Ekstrakurikuler adalah kegiatan non-pelajaran formal yang dilakukan peserta didik sekolah atau universitas, umumnya di luar jam belajar kuri-<br>kulum standar.Kegiatan-kegiatan ini ada pada setiap jenjang pendidikan dari sekolah dasar sampai universitas.</p>
        </header></center>
		
		<div class="container">
				<div class="row">
						@foreach($eskuls as $data)
		<div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
              <br>
              <br>
               <center>
               <!-- <a href="#" data-featherlight="{{ asset ('assets/img/gambarweb/'.$data->poto) }}"> -->
               <img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" width="150" height="150" alt="image" class="img-fluid">
               <!-- </a> -->
               </center>
              </div>
              <h2 class="title">{{ $data->nama}}</h2>
              <p style="font-size: 17px;">
              {{ $data->content}}
              </p>
            </div>
          </div>
						@endforeach
			</div>
			</div>
			<br>
			<div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
             <!--  <img src="{{asset('assets/baru/images/bg-png/6.png')}}" alt="bradcaump images"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Prestasi Siswa/i MTs AL IKHLAS</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Beranda</a>
                                  <span class="brd-separetor"><img src="{{asset('assets/baru/images/icons/brad.png')}}" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Prestasi</span>
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
				@foreach($prestasis as $data)
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
							<a href="#" data-featherlight="{{ asset ('assets/img/gambarweb/'.$data->poto) }}">
									<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" alt="image">
									</a>
							</div>
							<div class="events-item-info">
								<h3>{{ $data->nama}}</h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										{{ $data->tanggal_peroleh}}
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										Kategori Eskul : {{ $data->eskul->nama}}
									</li>
								</ul>
								<p>{{ $data->deskripsi}}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
	
		@endsection