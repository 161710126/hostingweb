@extends('layouts.index')
@section('content')
<div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
             <!--  <img src="{{asset('assets/baru/images/bg-png/6.png')}}" alt="bradcaump images"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Silakan Hubungi Kami</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Beranda</a>
                                  <span class="brd-separetor"><img src="{{asset('assets/baru/images/icons/brad.png')}}" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Kontak Informasi</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <section class="page__contact bg--white pb--150 pt--180 bg-image--27">
        	<div class="container">
        		<div class="row">
        			
        			<!-- Start Single Address -->
        			<div class="col-md-6 col-sm-6 col-12 col-lg-4 xs-mt-60">
        				<div class="address phone">
        					<div class="ct__icon">
        						<i class="fa fa-phone"></i>
        					</div>
							<div class="address__inner">
								<h2>Telepon</h2>
								<ul>
								<center><a href="tell:+0812-7446-510">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  1. Mahyudin  : +0812-7446-510</a></center>
								<center><a href="tell:+0812-7174-7160"> 2. Sopri : +0812-7174-7160</a></center>
								<center><a href="tell:+0813-6811-7269">&nbsp&nbsp&nbsp&nbsp 3. Armin L : +0813-6811-7269</a></center>
								</ul>
							</div>
        				</div>
        			</div>
        			<!-- End Single Address -->
        			<!-- Start Single Address -->
        			<div class="col-md-6 col-sm-6 col-12 col-lg-4">
        				<div class="address location">
        					<div class="ct__icon">
        						<i class="fa fa-home"></i>
        					</div>
							<div class="address__inner">
								<h2>Lokasi</h2>
								<p>Jl.Kabupaten Desa Keban II,Kec.Sanga Desa,Kab.Muba,provinsi.Sumsel</p>
							</div>
        				</div>
        			</div>
        			<!-- End Single Address -->
        			<!-- Start Single Address -->
        			<div class="col-md-6 col-sm-6 col-12 col-lg-4 md-mt-60 sm-mt-60">
        				<div class="address email">
        					<div class="ct__icon">
        						<i class="fa fa-envelope"></i>
        					</div>
							<div class="address__inner">
								<h2>E-mail</h2>
								<ul>
									<li>Sekolah : mtsalikhlaskeban2@yahoo.com</li>
									
								</ul>
							</div>
        				</div>
        			</div>
        			<!-- End Single Address -->
        		</div>
        	</div>
        </section>

        <!-- Start Contact Form -->
        <section class="contact__box section-padding--lg bg-image--27">
        	<div class="container">
        	@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif
        		<div class="row">
        			<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<h2 class="title__line">Berikan Masukan</h2>
							<p>Silakan untuk kepada user atau pengujung dimohon untuk memberikan kritikan dan saran tentang website kami</p>
						</div>
					</div>
        		</div>
        		<div class="row mt--80">
        			<div class="col-lg-12">
    				<div class="contact-form-wrap">
                            {!! Form::open(['route'=>'contactus.store']) !!}
<div class="row">
<div class="form-group col-sm-6 {{ $errors->has('nama') ? 'has-error' : '' }}">
{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder'=>'Nama*']) !!}
<span class="text-danger">{{ $errors->first('nama') }}</span>
</div>
	
<div class="form-group col-sm-6 {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email*']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>
</div>

<div class="row">
<div class="form-group col-sm-6 {{ $errors->has('telepon') ? 'has-error' : '' }}">
{!! Form::text('telepon', old('telepon'), ['class'=>'form-control', 'placeholder'=>'Telepon*']) !!}
<span class="text-danger">{{ $errors->first('telepon') }}</span>
</div>

<div class="form-group col-sm-6 {{ $errors->has('subject') ? 'has-error' : '' }}">
{!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Subject*']) !!}
<span class="text-danger">{{ $errors->first('subject') }}</span>
</div>
</div>

<div class="row">
<div class="form-group col-sm-12 {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Message*']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>
</div>
<div class="form-group">
<center><button class="dcare__btn"">Kirim</button></center>
</div>
{!! Form::close() !!}
                        </div> 
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
        			</div>
        		</div>
        	</div>
        </section>

         <section class="contact-form bg-image--17"><br>
			<div class="container">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.3252189323553!2d103.49055714897064!3d-2.7194115980091387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3075065d6880cd%3A0xaf99af45910df3ee!2sMTs+Al-Ikhlas+keban+II!5e0!3m2!1sid!2sid!4v1539843096911" width="600" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section>
		<!-- <section class="contact-form">
		<center><h2>Maps Zoom</h2></center><br>
			<div class="container">
			 <iframe src="https://www.google.com/maps/embed?pb=!4v1538731042398!6m8!1m7!1sIGyEbTeZ8fjX_ztad0j9NA!2m2!1d-2.719216632611727!2d103.4926186716606!3f181.08717533472128!4f-3.4272152749862954!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section> -->
@endsection

