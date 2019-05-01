<div class="col-lg-3">
        				<div class="sidebar__widgets sidebar--right">

        					<!-- Single Widget -->
        					<div class="single__widget search">
        						<h4>Search Berita</h4>
        						<form method="GET" action="{{url('berita')}}">
        							<input type="search" name="search" value="" placeholder="Search keyword" required>
        							<button type="submit"><i class="fa fa-search"></i></button>
        						</form>
        					</div>
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<div class="single__widget about">
								<div class="about__content">
									<img src="{{asset('assets/baru/images/others/user.png')}}" alt="about images">
									<div class="about__info">
										<div class="about__inner">
                                                                                       <!--  <h3 style="color: white">"Programmer"</h3><br> -->
											<h6>MTs Al IKHLAS KEBAN II</h6>
											<h6>Admin Sekolah</h6>
											<ul class="dacre__social__link d-flex justify-content-center">
												<li class="facebook"><a target="_blank" href="https://www.facebook.com/mtsalikhlas.kebanii"><i class="fa fa-facebook"></i></a></li>
                                                                        <li class="twitter"><a target="_blank" href="https://twitter.com/MtsKeban"><i class="fa fa-twitter"></i></a></li>
                                                                        <li class="vimeo"><a target="_blank" href="https://www.instagram.com/wargamtsalikhlaskeban2/"><i class="fa fa-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
        					</div>
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<div class="single__widget recent__post">
        						<h4>Recent Posts</h4>
								<ul>
									@foreach($recent as $data)
                                                                        @if($data->status == 0)
                                                                        @else
									<li>
										<a href="/berita/{{ $data->slug }}"><img class="img-circle" src="{{ asset ('assets/img/gambarweb/'.$data->gambar) }}" alt=""></a>
										<div class="post__content">
											<h6><a href="/berita/{{ $data->slug }}">{{$data->judul}}</a></h6>
											<span class="date"><i class="fa fa-calendar"></i>{{ date('M j, Y', strtotime($data->created_at)) }}</span>
										</div>
									</li>
                                                                        @endif	
                                                                        @endforeach
								</ul>
        					</div>
        					<br>

        					<div class="single__widget recent__post">
									<h4 class="category-title">Post Catgories</h4>
									@foreach($kategori as $data)
									<ul class="cat-list">
											<a href="/berita/kategori/{{ $data->slug }}" class="d-flex justify-content-between">
											<h5><br>{{ $data->nama_kategori }}</h5>
											<p><br>{{ $data->Artikel->count() }}</p>
											</a>
																						
									</ul>
										@endforeach
								</div>
								<br>
        					<!-- End Widget -->

        				</div>
        			</div>