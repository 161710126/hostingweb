@extends('layouts.index')
@section('content')
<section class="junior__welcome__area section-padding--lg poss-relative bg-image--21">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title--2">
							<h2 class="title__line" data-shadow="Visi Misi MTs AL IKHLAS">Visi Misi MTs AL IKHLAS</h2>
						</div>
					</div>
				</div>
				<div class="row jn__welcome__wrapper--2 align-items-center">
					<div class="col-md-12 col-lg-5 col-sm-12">
						<div class="welcome__juniro__three">
							<div class="welcome-tab nav" role="tablist">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#vission" role="tab">Visi MTs</a>
	                            <a class="nav-item nav-link " data-toggle="tab" href="#mission" role="tab">Misi MTs</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#object" role="tab">Tujuan</a>
                    		</div>
							<div class="welcome__tab__content">
								<!-- Start Single Content -->
								<div class="single__welcome__content tab-pane fade show active" id="vission" role="tabpanel">
									<p style="font-size: 19px; line-height:33px; color: black;">Meningkatkan Prestasi Siswa dalam bidang Imtek dan imtaq serta berakhlakul Karimah.</p>
								</div>
								<div class="single__welcome__content tab-pane fade" id="mission" role="tabpanel">
									<p style="font-size: 19px; line-height:33px; color: black;">1.Melaksanakan pembelajaran dan bimbingan secara efektif untuk mengoptimalkan potensi siswa<br>
                           2.Mengciptakan suasana yang kondusif untuk keefektipan seluruh kegiatan madrasah<br>
                           3.Mengembangkan budaya kompeletif bagi peningkatan prestasi siswa<br>
                           4.Menumbuhkembangkan penghayatan dan pengamalan terhadap Agama untuk membentuk budi pekerti yang baik.</p>
								</div>
								<div class="single__welcome__content tab-pane fade" id="object" role="tabpanel">
									<p style="font-size: 19px; line-height:33px; color: black;">1.Bersaing dalam penerapan ilmu pengetahuan dan teknologi<br>
									   2. Bersaing dalam kegiatan keagamaan dan kepedulian sekolah<br>
									   3. Bersaing dalam kebiasaan sopan santun dan berbudi pekerti.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="welcome__images wow fadeInUp" data-wow-delay="0.5s">
					<img src="{{asset('assets/baru/images/logo/bcmts.jpg')}}" style="width: 800px; height: 450px;" alt="welcome images">
				</div>
			</div>
		</section>
		@endsection