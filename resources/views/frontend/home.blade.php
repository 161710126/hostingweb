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
										<!-- <center><div class="slider__btn">
											<a style="margin-right: 140px;" class="dcare__btn btn__org max__height-btn hover--theme" href="/persyaratan">Persyaratan</a>
										</div>
										</center> -->
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
										<h1 style="color: #28ef0a;">Selamat Datang di situs<br>Resmi MTs AL IKHLAS</h1>
										<p style="color: #28ef0a; font-size: 20px;">Mts Al IKHLAS ini merupakan sekolah yang berdiri semejak tahun 1988,berkat sekolah ini banyak alumni-alumni MTs yang berhasil.</p>
									</div>
								</div>
								<!-- End Single Slide -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<section class="contact__box section-padding--lg bg-image--2">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-7">
						<div class="welcome-content">
							<h2 style="color: black;"> SAMBUTAN DARI KEPALA SEKOLAH</h2><br>
							<span style="font-size: 22px; color: black;">Bissmilahirohmanirohim</span><br>
							<span style="font-size: 22px; color: black;">Assalamualikum Wr.Wb</span>
							<p style="font-size: 20px; color: black;">Marilah kita bersyukur kehadirat Illahi Rabbi yang telah melimpahkan rahmat dan anugerah serta hidayah-Nya kepada kita. Semoga yang Maha Kuasa selalu meridhoi segala usaha kita dalam upaya meningkatkan mutu pendidikan.
Website MTs AL IKHLAS KEBAN II dibuat sebagai media informasi dan komunikasi bagi sekolah untuk memberikan informasi yang akurat, lengkap, utuh dan terpecaya tentang MTs AL IKHLAS KEBAN II.

Website ini menjadi media informasi online yang akan digunakan oleh MTs AL IKHLAS KEBAN II dalam mempublikasi informasi-informasi dan pengumuman-pengumuman terkait semua kegiatan, baik kegiatan akademik maupun non akademik yang ada di MTS AL IKHLAS KEBAN II
Web ini juga memuat Visi dan Misi serta informasi lain tentang MTs AL IKHLAS KEBAN II yang selalu berbenah dan mengembangkan diri untuk menjadi sekolah yang terdepan.

Terimakasih kami sampaikan pada seluruh masyarakat atas kepercayaan yang diberikan kepada kami untuk mendidik Sumber Daya Manusia yang handal dan profesional untuk menyongsong masa depan lebih cemerlang.
Mudah mudahan dengan metode seperti ini dapat memperkecil angka putus sekolah di Indonesia khususnya di kec.sanga desa.<br>
<span style="font-size: 22px;">Assalamualikum Wr.Wb</span></p>
							<img src="{{asset('assets/guest/images/signature.png')}}" alt="signature"><br>
							<span style="color: black; font-size: 20px;" class="author">Mahyudin S.pd<br> <span style="color: black; font-size: 20px;">Kepala Sekolah</span></span>
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

		@php
		$artikels = App\Artikel::orderBy('created_at','desc')->paginate(3);
		@endphp
		<section class="jnr__blog_area section-padding--lg bg-image--3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center white--title">
							<h2 class="title__line">Berita Terbaru</h2>
						</div>
					</div>
				</div>
				<div class="row blog__wrapper mt--40">
				@if (count($artikels) > 0)
					@foreach($artikels as $data)
					@if($data->status == 0)
                     @else
					<!-- Start Single Blog -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="blog">
							<div class="blog__date">
								<span>Date : {{ date('M j, Y', strtotime($data->created_at)) }}</span>
							</div>
							<div class="blog__thumb">
								<a href="/berita/{{$data->slug}}">
									<img src="{{ asset ('assets/img/gambarweb/'.$data->gambar) }}" style="width: 500px; height: 300px;" alt="blog images">
								</a>
							</div>
							<div class="blog__inner">
								<span style="font-size: 19px;">Post By : {{ $data->user->name}}</span>
								<h4><a href="/berita/{{$data->slug}}">{!! str_limit($data->judul, 55, '&raquo;') !!}</a></h4>
								<p>{!! str_limit($data->content,120) !!}.</p>
							</div>
						</article>
					</div>
					<!-- End Single Blog -->
					    @endif
						@endforeach
						@else
                            <center><h3><b><i>Maaf Tidak ada Berita yang ditemukan</i></b></h3></center><br>
                        @endif
                             <a style="margin-left: 450px;" class="dcare__btn btn__org max__height-btn hover--theme" href="/berita">Lihat Semua Berita & Artikel Kami</a>
				</div>
			</div>
		</section>

		
	
		@php
		$events = App\Event::orderBy('created_at','desc')->paginate(2);
		@endphp
		<section class="dcare__event__area bg-image--14 section-padding--lg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center white--title">
							<h2 class="title__line">Acara sekolah</h2>
							
						</div>
					</div>
				</div>
				<div class="row mt--50">
				@if (count($events) > 0)
					@foreach($events as $data)
					 @if($data->status == 0)
                     @else
					<!-- Start Single Event -->
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="dcare__event__wrapper">
							<!-- Start Event -->
							<div class="single__event d-flex">
								<div class="event__thumb">
									<a href="/event/{{$data->slug}}">
										<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="width: 300px; height: 200px;" alt="event images">
									</a>
									<div class="event__hover__info">
										<span>{{$data->tgl}}</span>
									</div>
								</div>
								<div class="event__inner">
									<h6><a href="/event/{{$data->slug}}">{!! str_limit($data->judul, 35, '&raquo;') !!}</a></h6>
									<ul class="event__time__location">
										<li><i class="fa fa-home"></i>{{$data->alamat}}</li>
										<li><i class="fa fa-clock-o"></i>{{$data->jam}}</li>
									</ul>
								</div>
							</div>
							<!-- End Event -->
						</div>
					</div>
				@endif
					@endforeach
					@else
					<center><h3><b><i>Maaf Tidak ada Event yang ditemukan</i></b></h3></center>
					@endif
					<!-- End Single Event -->
					</div>
					<br><a style="margin-left: 450px;" class="dcare__btn btn__org max__height-btn hover--theme" href="/event">Lihat Semua Agenda Sekolah</a>
			</div>
		</section>

		<section class="dcare__choose__us__area section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<h2 class="title__line">Kenapa Harus Memilih MTs AL IKHLAS</h2>
							<p>Menciptakan Siswa-Siwi yang kreatif dan inovatif, serta mencetak kepribadian Siswa yang terdidik dan terpelajar</p>
						</div>
					</div>
				</div>
				<div class="row mt--40">
					<!-- Start Single Choose Option -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="dacre__choose__option">
							<!-- Start Single Choose -->
							<div class="choose">
								<div class="choose__inner">
									<h4>Baca Al Qur'an</h4>
									<p>Sekolah MTs Al ikhlas menjamin Siswa-Siswi nya bisa membaca Al Qur'an</p>
								</div>
								<div class="choose__icon">
									<img src="{{asset('assets/baru/images/choose/icon/1.png')}}" alt="choose icon">
								</div>
							</div>
							<!-- End Single Choose -->
							<!-- Start Single Choose -->
							<div class="choose">
								<div class="choose__inner">
									<h4>Memahami Tajwid dan Kitab Al Qur'an </h4>
									<p>Sekolah ini menekankan Siswa-Siswi bukan sekedar membaca tetapi harus memahami Tajwid dan kitab Al Qur'an</p>
								</div>
								<div class="choose__icon">
									<img src="{{asset('assets/baru/images/choose/icon/3.png')}}" alt="choose icon">
								</div>
							</div>
							<!-- End Single Choose -->
							<!-- Start Single Choose -->
							<div class="choose">
								<div class="choose__inner">
									<h4>Memahami Agama Islam</h4>
									<p>Sekolah MTs Al ikhlas mengajarkan banyak pelajaran Agama islam yaitu SKI(Sejarah Kebudayaan Islam),Aqidah Akhlak, Ilmu Fiqih dan Bahasa Arab</p>
								</div>
								<div class="choose__icon">
									<img src="{{asset('assets/baru/images/choose/icon/2.png')}}" alt="choose icon">
								</div>
							</div>
							<!-- End Single Choose -->
						</div>
					</div>
					<!-- End Single Choose Option -->
					<!-- Start Single Choose Option -->
					<div class="col-lg-4 col-md-6 col-sm-12 d-block d-lg-block d-md-none">
						<div class="dacre__choose__option wow flipInX">
							<div class="choose__big__img">
								<img src="{{asset('assets/guest/images/logo1.png')}}" alt="choose images">
							</div>
						</div>
					</div>
					<!-- End Single Choose Option -->
					<!-- Start Single Choose Option -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="dacre__choose__option text__align--left">
							<!-- Start Single Choose -->
							<div class="choose">
								<div class="choose__icon">
									<img src="{{asset('assets/baru/images/choose/icon/4.png')}}" alt="choose icon">
								</div>
								<div class="choose__inner">
									<h4>Bersaing</h4>
									<p>Sekolah ini walaupun swasta tapi tekatnya tinggi untuk bersaing dengan skekolah negeri dengan cara apapun</p>
								</div>
							</div>
							<!-- End Single Choose -->
							<!-- Start Single Choose -->
							<div class="choose">
								<div class="choose__icon">
									<img src="{{asset('assets/baru/images/choose/icon/5.png')}}" alt="choose icon">
								</div>
								<div class="choose__inner">
									<h4>Berprestasi</h4>
									<p>Sekolah imi menciptakan Siswa-siswi yang Berprestasi Karna dengan siswa-siswi yang berprestasi dapat memajukan Sekolah MTs Al ikhlas </p>
								</div>
							</div>
							<!-- End Single Choose -->
							<!-- Start Single Choose -->
							<div class="choose">
								<div class="choose__icon">
									<img src="{{asset('assets/baru/images/choose/icon/6.png')}}" alt="choose icon">
								</div>
								<div class="choose__inner">
									<h4>Melanjutkan Sekolah</h4>
									<p>Sekolah MTs Al ikhlas membantu siswanya untuk melanjutkan sekolahnya baik Negri maupun swasta</p>
								</div>
							</div>
							<!-- End Single Choose -->
						</div>
					</div>
					<!-- End Single Choose Option -->
				</div>
			</div>
		</section>

		<!-- Start our Class Area -->
		<section class="junior__classes__area section-lg-padding--top section-padding--md--bottom bg--white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="section__title text-center">
							<h2 class="title__line">Data Guru MTs AL IKHLAS KEBAN II</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
						</div>
					</div>
				</div>
				<div class="row classes__wrap activation__one owl-carousel owl-theme clearfix mt--40">
				@foreach($gurus as $data)
					<!-- Start Single Classes -->
					<div class="col-lg-4 col-sm-6">
						<div class="junior__classes">
							<div class="classes__thumb">
								<a href="#">
									<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="height: 400px;" alt="class images">
								</a>
							</div>
							<div class="classes__inner">
								<div class="class__details">
									<h4><a href="class-details.html">{{ $data->nama}}</a></h4>
									<ul class="class__time">
								<h4>Jabatan       : {{ $data->jabatan }}</h4>
								
									</ul>
									<!-- <div class="class__btn">
										<a class="dcare__btn--2" href="class-details.html">Admission Now</a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Classes -->
				@endforeach
				</div>
			</div>
		</section>
		<!-- End our Class Area -->

		<section class="dcare__counterup__area section-padding--lg bg-image--6">	
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="counterup__wrapper d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-between">
							<!-- Start Single Fact -->
                           @foreach($infos as $data)
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count">{{ $data->jumlah }}</span>
                                </div>
                                <div class="fact__title">
                                    <h2>{{ $data->nama }}</h2>
                                </div>
                            </div> 
          					@endforeach
						</div>
					</div>
				</div>
			</div>
		</section><br>
	
	@php
    $testimonis = App\Testimoni::all();
    @endphp
		<section class="dcare__testimonial__area section-padding--lg bg-image--13">
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
									<p style="color: white;">{!! str_limit($data->content, 500, '&raquo;') !!}</p>
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