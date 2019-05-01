 @extends('layouts.index')
 @section('content')
 <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
            	<!-- <img src="images/bg-png/6.png" alt="bradcaump images"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Event List</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Beranda</a>
                                  <!-- <span class="brd-separetor"><img src="images/icons/brad.png" alt="separator images"></span> -->
                                  <span class="breadcrumb-item active">Event List</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
		<section class="dcare__event__area bg--white section-padding--lg">
			<div class="container">
				<div class="row event-grid-page">
					<!-- Start Single Event -->
					@if (count($events) > 0)
					@foreach($a as $data)
					@if($data->status == 0)
                    @else
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="event__list">
							<div class="event__thumb">
								<a href="/event/{{$data->slug}}">
								<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="width: 300px; height: 400px;" alt="event images">
								</a>
							</div>
							<div class="event__content">
								<div class="event__pub">
									<ul class="event__time">
										<li><i class="fa fa-calendar"></i>{{$data->tgl}} <i class="fa fa-clock-o"></i>{{ $data->jam}}</li>
										<li><i class="fa fa-home"></i>{{ $data->alamat}}</li>
									</ul>
								</div>
								<div class="event__inner">
									<h2><a href="/event/{{$data->slug}}">{{ $data->judul}}</a></h2>
									<p>{!! str_limit($data->deskripsi, 200, '&raquo;') !!}.</p>
								</div>
								<ul class="event__btn">
									<!-- <li><a href="#">Book Now</a></li> -->
									<li><a href="/event/{{$data->slug}}">Selengkapnya</a></li>
								</ul>
							</div>
						</div>
					</div>
					  @endif
					  @endforeach
					  @else
                      <center><h3><b><i>Maaf Tidak ada Event yang ditemukan</i></b></h3></center>
                      @endif
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="dcare__pagination mt--80">	
								{{ $events->links() }}
						</div>
					</div>
				</div>
			</div>
		</section>
		@endsection