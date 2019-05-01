	@extends('layouts.index')
	@section('content')
		<div class="slide__carosel owl-carousel owl-theme">
			<div class="slider__area slider--four bg-image--19 d-flex slider__fixed--height justify-content-start align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="slider__activation">
								<!-- Start Single Slide -->
								<div class="slide">
									<div class="slide__inner">
										<center><div class="slider__btn">
											<a style="margin-right: 140px;" class="dcare__btn btn__org max__height-btn hover--theme" href="#">Daftar Sekarang</a>
										</div>
										</center>
									</div>
								</div>
								<!-- End Single Slide -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__area slider--four bg-image--20 d-flex slider__fixed--height justify-content-start align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="slider__activation">
								<!-- Start Single Slide -->
								<div class="slide">
									<div class="slide__inner">
										<!-- <h6><span class="color-pink">He</span><span class="secondary-color">llo</span> Kidz <span class="separator">,</span></h6> -->
										<h1 style="color: #28ef0a;">Selamat Datang di situs<br>Resmi MTs AL IKHLAS</h1>
										<p style="color: #28ef0a; font-size: 20px;">Mts Al IKHLAS ini merupakan sekolah yang berdiri semejak tahun 1988,berkat sekolah ini banyak alumni-alumni MTs yang berhasil.</p>
										<div class="slider__btn">
											<a class="dcare__btn btn__org max__height-btn hover--theme" href="#">Read More</a>
										</div>
									</div>
								</div>
								<!-- End Single Slide -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<section class="welcome">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-7">
						<div class="welcome-content">
							<h2> SAMBUTAN DARI KEPALA SEKOLAH</h2><br>
							<span style="font-size: 19px;">Bissmilahirohmanirohim</span><br>
							<span style="font-size: 19px;">Assalamualikum Wr.Wb</span>
							<p style="font-size: 17px;">Marilah kita bersyukur kehadirat Illahi Rabbi yang telah melimpahkan rahmat dan anugerah serta hidayah-Nya kepada kita. Semoga yang Maha Kuasa selalu meridhoi segala usaha kita dalam upaya meningkatkan mutu pendidikan.
Website MTs AL IKHLAS KEBAN II dibuat sebagai media informasi dan komunikasi bagi sekolah untuk memberikan informasi yang akurat, lengkap, utuh dan terpecaya tentang MTs AL IKHLAS KEBAN II.

Website ini menjadi media informasi online yang akan digunakan oleh MTs AL IKHLAS KEBAN II dalam mempublikasi informasi-informasi dan pengumuman-pengumuman terkait semua kegiatan, baik kegiatan akademik maupun non akademik yang ada di MTS AL IKHLAS KEBAN II
Web ini juga memuat Visi dan Misi serta informasi lain tentang MTs AL IKHLAS KEBAN II yang selalu berbenah dan mengembangkan diri untuk menjadi sekolah yang terdepan.

Terimakasih kami sampaikan pada seluruh masyarakat atas kepercayaan yang diberikan kepada kami untuk mendidik Sumber Daya Manusia yang handal dan profesional untuk menyongsong masa depan lebih cemerlang.
Mudah mudahan dengan metode seperti ini dapat memperkecil angka putus sekolah di Indonesia khususnya di kec.sanga desa.<br>
<span style="margin-bottom: 50px;">Assalamualikum Wr.Wb</span></p>
							<img src="{{asset('assets/guest/images/signature.png')}}" alt="signature">
							<strong class="author">Mahyudin S.pd <span>Kepala Sekolah</span></strong>
						</div>
					</div>
					
					<div class="col-sm-5 col-md-5">
						<div class="welcome-img">
							<img src="{{asset('assets/guest/images/mahyudin.jpg')}}" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="featured-box white-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<div class="box-1">
							<a href="/berita"> 
								Berita <span>Terbaru</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="box-2">
							<a href="/eskulprestasi">
								Prestasi <span>Siswa</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="box-3">
							<a href="/guru">
								Daftar <span>Guru</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		@php
		$artikels = App\Artikel::paginate(4);
		@endphp
		<section class="featured-news">
			<div class="container">
				<div class="row">
					<div class="section__title--2">
							<h2 class="title__line">Berita Terbaru</h2><br><br><br>
					</div>
				</div>
				<div class="row">
					<div class="section-content">
					@foreach($artikels as $data)
					@if($data->status == 0)
                     @else
						<div class="col-xs-6 col-md-3">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="/berita/{{$data->slug}}"><img src="{{asset('assets/guest/images/logo1.png')}}" style="width: 25px; height: 25px;"  alt="image"></a>
										<a href="/berita/{{$data->slug}}"><span>{{ $data->user->name}}</span></a>
									</div>
									<div class="col-md-4">
										<span>{{$data->created_at->diffForHumans()}}</span>
									</div>
								</div>
								<div class="item-image">
									<a href="/berita/{{$data->slug}}">
										<img src="{{ asset ('assets/img/gambargaleri/'.$data->gambar) }}" style="width: 300px; height: 300px;" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="/berita/{{$data->slug}}">{!! str_limit($data->judul, 55, '&raquo;') !!}</a></h3>
									<p>{!! str_limit($data->content, 100, '&raquo;') !!}.</p>
									<a href="/berita/{{$data->slug}}">Read More</a>
								</div>
							</div>
						</div>
						@endif
						@endforeach
					</div>
					  <a style="margin-left: 450px;" class="dcare__btn btn__org max__height-btn hover--theme" href="/berita">Lihat Semua Berita & Artikel Kami</a>
				</div>
			</div>
		</section>
		
		@php
		$events = App\Event::paginate(3);
		@endphp
		<section class="dcare__event__area bg--white section-padding--lg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title--2">
							<h2 class="title__line">Agenda Sekolah</h2>
						</div>
					</div>
				</div>
				<div class="row mt--40">
					<!-- Start Single Event -->
					@foreach($events as $data)
					 @if($data->status == 0)
                     @else
					<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
						<div class="dcare__event">
							<div class="event__thumb">
								<a href="/event/{{$data->slug}}">
									<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="width: 500px; height: 400px;" alt="event images">
								</a>
							</div>
							<div class="event__content">
								<div class="event__pub">
									<div class="event__date">
										<span class="date">{{$data->tgl}}</span><span>th</span>
									</div>
									<ul class="event__time">
										<li>{{$data->bulan}}, <i class="fa fa-clock-o"></i>{{$data->jam}}</li>
										<li><i class="fa fa-home"></i>{{$data->alamat}}</li>
									</ul>
								</div>
								<div class="event__inner">
									<h2><a href="/event/{{$data->slug}}">{!! str_limit($data->judul, 35, '&raquo;') !!}.</a></h2>
									<p>{!! str_limit($data->deskripsi, 100, '&raquo;') !!}</p>
								</div>
								<ul class="event__btn">
									
									<li style="margin-left: 100px;"><a href="/event/{{$data->slug}}">Learn More</a></li>
								</ul>
							</div>
						</div>
					</div>
					@endif
					@endforeach
				</div>
					<br><br><a style="margin-left: 450px;" class="dcare__btn btn__org max__height-btn hover--theme" href="/event">Lihat Semua Agenda Sekolah</a>
					<!-- end Single Event -->
			</div>
		</section>

		
		<section class="dcare__counterup__area section-padding--lg bg-image--6">	
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="counterup__wrapper d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-between">
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{asset('assets/baru/images/funfact/1.png')}}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count">25</span>
                                </div>
                                <div class="fact__title">
                                    <h2>Jumlah Guru</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{asset('assets/baru/images/funfact/2.png')}}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count color--2">121</span>
                                </div>
                                <div class="fact__title">
                                    <h2>Jumlah Siswa</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{asset('assets/baru/images/funfact/3.png')}}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count color--3">1988</span>
                                </div>
                                <div class="fact__title">
                                    <h2>MTs Berdiri</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{asset('assets/baru/images/funfact/2.png')}}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count color--2">95</span>
                                </div>
                                <div class="fact__title">
                                    <h2>Jumlah Siswi</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
						</div>
					</div>
				</div>
			</div>
		</section><br>
	
	@php
    $testimonis = App\Testimoni::all();
    @endphp
		<section class="dcare__testimonial__area section-padding--lg bg-image--23">
   	 	  <center><h1 style="color: white;">Testimoni Alumni</h1></center>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<div class="testimonial__slide--3 owl-carousel owl-theme">
							<!-- Start Single Testimonial Area -->
							@foreach($testimonis as $data)
							<div class="testimonial--3">
								<div class="testimonial__thumb">
									<img class="img-circle" src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" alt="clint images">
								</div>
								<div class="testimonial__content">
									<p style="color: white;">{{$data->content}}.</p>
									<div class="tes__info">
										<h6 style="color: white;">{{$data->nama}}</h6>
										<span style="color: white;">{{$data->angkatan}}</span>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section class="featured-gallery">
		<center><h2>INSTAGRAM</h2></center>
			<div class="row">
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-2">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
					</a>
					<div id="content-2" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-3">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
					</a>
					<div id="content-3" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-2">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
					</a>
					<div id="content-2" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-3">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
					</a>
					<div id="content-3" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-2">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
					</a>
					<div id="content-2" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-3">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
					</a>
					<div id="content-3" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-4">
						<img src="{{asset('assets/guest/images/kegiatan/tari1.jpg')}}" alt="image">
					</a>
					<div id="content-4" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/tari1.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-5">
						<img src="{{asset('assets/guest/images/kegiatan/juara1.jpg')}}" alt="image">
					</a>
					<div id="content-5" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/juara1.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		
		<!-- <section class="sponsor">
			<div class="container">
				<div class="row">
					<div class="sponsor-logo">
						<div class="col-sm-3">
							<img src="images/sponsor-logo-1.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-2.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-3.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-4.png" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="newsletter-content">
						<div class="col-md-6">
							<h2><strong>Get The Latest News From Sekolah!</strong> Join our newsletter now</h2>
						</div>
						<div class="col-md-6">
							<input type="email" placeholder="Enter your e-mail address">
							<input class="hvr-push" type="submit" value="Subscribe">
						</div>
					</div>
				</div>
			</div>
		</section> -->
		@endsection