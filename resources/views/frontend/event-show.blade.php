@extends('layouts.index')
@section('content')
 <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
            	<!-- <img src="images/bg-png/6.png" alt="bradcaump images"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Event Details</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Beranda</a>
                                  <!-- <span class="brd-separetor"><img src="images/icons/brad.png" alt="separator images"></span> -->
                                  <span class="breadcrumb-item active">Event Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Class Details -->
        <section class="page-event-details bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9">
        				<div class="event-content-wrapper">

	        				<div class="event-section">
	        					<div class="enent__thumb">
	        						<img src="{{ asset ('assets/img/gambarweb/'.$events->poto) }}" style="width: 850px; height: 800px;" alt="big images">
	        						<!-- <div class="box-timer">
                                        <div class="countbox timer-grid">
                                            <div  data-countdown="2019/12/17"></div>
                                        </div>
                                     </div> -->
	        					</div>
	        					<div class="event__inner">
	        						<span><i class="fa fa-calendar"></i>{{$events->tgl}}</span>
	        						<h4>{{$events->judul}}</h4>
	        						<p>{!! $events->deskripsi !!}. </p>
	        					</div>
        					</div>
	        				<div class="event-section">
	        					<h2 class="event__information">EVENT DETAILS INFORMATION</h2>
	        					<div class="event__location">
	        					  <ul>
	        						<li><span class="ti-user"></span>Osis MTs AL IKHLAS KEBAN II
	        						<li><span class="ti-location-pin"></span>Gedung MTs AI IKHLAS KEBAN II</li>
	        						<li><span class="ti-time"></span>9.00 am - 5.00 pm</li>
	        						<li><span class="ti-mobile"></span>Phone : +081377714255</li>
	        						<li><span class="ti-email"></span>Email : mtsalikhlaskeban2@ymail.com,</li>
	        						<!-- <li><span class="ti-dribbble"></span><a href="https://mtsalikhlaskeban2.sch.id"> https://mtsalikhlaskeban2.sch.id</a></li> -->
	        						</ul>
	        						<div class="event_map_marker">
	        							<div id="evnetmap"></div>
	        						</div>
	        					</div>
        					</div>

        					<div class="event__share d-flex">
        						<span>Share By:</span>
        						<ul class="dacre__social__link--3 social-net-3 d-flex justify-content-start">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"><i class="fa fa-twitter"></i></a></li>
									<li class="pinterest"><a target="_blank" href="https://www.plus.google.com/sharer?url={{ urlencode(Request::fullUrl()) }}"><i class="fa fa-google-plus"></i></a></li>
								</ul>
        					</div>

        				  <div class="upcoming__event mt--80">
                                <h2>List Event</h2>
                                <div class="row">
                                @foreach($recentt as $data)
                                    <div class="col-lg-6">
                                        
                                        <div class="single__event d-flex bg__light__green">
                                            <div class="event__thumb">
                                                <a href="/event/{{$data->slug}}">
                                                    <img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="width: 200px;" alt="event images">
                                                </a>
                                                <div class="event__hover__info">
                                                    <span>{{ $data->tgl}}</span>
                                                </div>
                                            </div>
                                            <div class="event__inner">
                                                <h6><a href="/event/{{$data->slug}}">{!! str_limit($data->judul, 35, '&raquo;') !!}</a></h6>
                                                <ul class="event__time__location">
                                                    <li><i class="fa fa-home"></i>{{ $data->alamat}}</li>
                                                    <li><i class="fa fa-clock-o"></i>{{ $data->jam}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
                                   @endforeach
                                </div>
                          </div>
        					
        				</div>
        			</div>
        			<!-- Start Sidebar -->
        			@include('blog.side')
        			<!-- End Sidebar -->
        		</div>
        	</div>
        </section>
        <!-- End Class Details -->
        @endsection