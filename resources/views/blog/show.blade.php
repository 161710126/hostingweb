@extends('layouts.index')
@section('content')
 <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Blog Details</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Home</a>
                                 <!--  <span class="brd-separetor"><img src="images/icons/brad.png" alt="separator images"></span> -->
                                  <span class="breadcrumb-item active">Blog Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Blog Grid Area -->
        <div class="dcare__blog__list bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<!-- Start BLog Details -->
        			<div class="col-lg-9">
        				<div class="page__blog__details">
        					<article class="dacre__blog__details">
        						<div class="blog__thumb">
        							<img src="{{ asset ('assets/img/gambarweb/'.$artikels->gambar) }}" style="width: 800px; height: 600px;" alt="blog images">
        						</div>
        						<div class="blog__inner">
        							<h2>{{ $artikels->judul}}</h2>
        							<ul>
        								<li>Penulis : {{ $artikels->user->name}}</li>
        								<li>{{ date('M j, Y', strtotime($artikels->created_at)) }}</li>
        								<!-- <li><a href="#">Comments : 05</a></li>
        								<li><a href="#">Like : 07</a></li> -->
        							</ul>

        							<p>{!! $artikels->content !!}</p>

        							
        						</div>
        					</article>

        					<div class="blog__page__btn">
        						<div class="blog__share">
        							<span>Share By:</span>
        							<ul class="dacre__social__link--2 bg--2 d-flex justify-content-end">
										<li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"><i class="fa fa-facebook"></i></a></li>

										<li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"><i class="fa fa-twitter"></i></a></li>

										<li class="pinterest"><a target="_blank" href="https://www.plus.google.com/sharer?url={{ urlencode(Request::fullUrl()) }}"><i class="fa fa-google-plus"></i></a></li>

                <li class="whatsapp"><a target="_blank" href="whatsapp://send?text=https://localhost:8000/berita/{{$artikels->slug}}">
                <i class="fa fa-whatsapp my-float"></i></a></li>
                                        <!-- <a href="whatsapp://send?text=URL Artikel">Bagikan ke WhatsApp</a>
 -->
									</ul>
        						</div>
        					</div>
							<!-- prev next -->
							<div class="navigation-area">
								<div class="row">
								@if(isset($previous))
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="thumb">
											<a href="#"><img class="img-fluid" src="{{asset('assets/user/img/blog/prev.jpg')}}" alt=""></a>
										</div>
										<div class="arrow">
											<a href="{{ URL::to( 'berita/' . $previous->slug) }}"><span class="lnr text-white lnr-arrow-left"></span></a>
										</div>
										<div class="detials">
											<p>Prev Post</p>
											<a href="{{ URL::to( 'berita/' . $previous->slug) }}"><h4>{{ $previous->judul }}</h4></a>
										</div>
									</div>
									 @endif
									  @if(isset($next))
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Post</p>
											<a href="{{ URL::to( 'berita/' . $next->slug) }}"><h4>{{ $next->judul }}</h4></a>
										</div>
										<div class="arrow">
											<a href="{{ URL::to( 'berita/' . $next->slug) }}"><span class="lnr text-white lnr-arrow-right"></span></a>
										</div>
										<div class="thumb">
											<a href="{{ URL::to( 'berita/' . $next->slug) }}"><img class="img-fluid" src="{{asset('assets/user/img/blog/next.jpg')}}" alt=""></a>
										</div>										
									</div>	
									 @endif								
								</div>
							</div><br>
							<!-- End prev next -->

							  <!-- Start Blog Author -->
                           <!--  <div class="blog__author text-center">
                                <div class="author__thumb">
                                    <img src="{{asset('assets/baru/images/blog/author/user.png')}}" style="width: 150px; height: 150px;" alt="author images">
                                </div>
                                <div class="author__info">
                                   
                                    <h6>Admin MTs AL IKHLAS</h6>
                                    <ul class="dacre__social__link--2 bg--2 d-flex justify-content-center">
                                        <li class="facebook"><a target="_blank" href="https://www.facebook.com/mtsalikhlas.kebanii"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a target="_blank" href="https://twitter.com/MtsKeban"><i class="fa fa-twitter"></i></a></li>
                                        <li class="vimeo"><a target="_blank" href="https://www.instagram.com/wargamtsalikhlaskeban2/"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div><br> -->
                            <!-- End Blog Author -->

							<!-- Start Blog Comment -->
							<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://webmts.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

        				</div>
        			</div>
        			<!-- Start Sidebar -->
        			@include('blog.side')
        			<!-- End Sidebar -->
        		</div>
        	</div>
        </div>
@endsection