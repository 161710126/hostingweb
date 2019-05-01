 @extends('layouts.index')
 @section('content')


<div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
             <!--  <img src="{{asset('assets/baru/images/bg-png/6.png')}}" alt="bradcaump images"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Fasilitas-MTs AL IKHLAS</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Beranda</a>
                                  <span class="brd-separetor"><img src="{{asset('assets/baru/images/icons/brad.png')}}" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Fasilitas</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
    <!-- Start Our Gallery Area -->
    <div class="junior__gallery__area gallery-page-one gallery__masonry__activation gallery--3 bg-image--25 section-padding--lg">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="gallery__menu">
                            <button data-filter="*"  class="is-checked">All</button>
                            @foreach($kategfasilitas as $data)
                            <button style="margin-bottom: 20px; margin-left: 10px;" data-filter=".web{{$data->id}}">{{$data->nama_fasilitas}}</button>
                            @endforeach
                        </div>
          </div>
        </div>
        <div class="row galler__wrap masonry__wrap mt--80">
          <!-- Start Single Gallery -->
          @foreach($fasilitas as $data)
          <div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item web{{$data->Kategori_fasilitas->id}}">
            <div class="gallery">
              <div class="gallery__thumb">
                <a href="#">
                  <img class="img-circle" style="/*margin-left: 20px;*/ width: 450px; height: 300px;" src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" alt="gallery images">
                </a>
              </div>
              <div class="gallery__hover__inner">
                <div class="gallery__hover__action">
                  <ul class="gallery__zoom">
                    <li><a href="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="width: 850px; height: 800px;" data-lightbox="grportimg" data-title="{{$data->nama}}"><i class="fa fa-search"></i></a></li>
                    
                  </ul>
                </div>
              </div>
            </div>  
          </div>  
          @endforeach
          <!-- End Single Gallery -->
          <!-- Start Single Gallery -->
          
          <!-- End Single Gallery -->
        </div>  
      </div>
    </div>
  @endsection