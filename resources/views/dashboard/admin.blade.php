 @extends('layouts.admin1')
 @section('content')
 <section class="content" style="margin-left: 20px;">
  <div class="container-fluid">
        <!-- <div class="container-fluid"> -->
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-heading" style="font-size: 20px;">ASSALAMUALIKUM WR.WB</div>
            <div class="panel-heading" style="font-size: 20px;">Selamat datang di admin</div><br>
            <!-- Widgets -->
            @php
        $infos = App\infosekilas::paginate(3);
        @endphp
            <div class="row">
            @foreach($infos as $data)
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">{{$data->nama}}</div>
                        <h3 class="m-b-10">{{$data->jumlah}} 
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <div class="chart chart-bar"></div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Jumlah Guru</div>
                        <h3 class="m-b-10">24 orang
                            <i class="material-icons col-red">trending_down</i>
                        </h3>
                        <div class="icon">
                            <div class="chart" id="liveChart">Loading..</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="card">
                                <div class="chart-box-left">
                                    <div class="chart-note">
                                        <span class="dot dot-product"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note mr-0">
                                        <span class="dot dot-service"></span>
                                        <span>services</span>
                                    </div>
                                </div>
                               
                                <canvas id="chartReport1"></canvas>
                                
                                <div class="axisData">
                                    <div class="tick">
                                        MON <span class="value productValue">24</span> <span class="value serviceValue">20</span>
                                    </div>
                                    <div class="tick">
                                        TUE <span class="value productValue">18</span> <span class="value serviceValue">22</span>
                                    </div>
                                    <div class="tick">
                                        WED <span class="value productValue">16</span> <span class="value serviceValue">30</span>
                                    </div>
                                    <div class="tick">
                                        THU <span class="value productValue">18</span> <span class="value serviceValue">22</span>
                                    </div>
                                    <div class="tick">
                                        FRI <span class="value productValue">24</span> <span class="value serviceValue">18</span>
                                    </div>
                                    <div class="tick">
                                        SAT <span class="value productValue">36</span> <span class="value serviceValue">22</span>
                                    </div>
                                    <div class="tick">
                                        SUN <span class="value productValue">28</span> <span class="value serviceValue">30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="card">
                                <div class="chart-box-left">
                                    <div class="chart-note">
                                        <span class="dot dot-product"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note mr-0">
                                        <span class="dot dot-service"></span>
                                        <span>services</span>
                                    </div>
                                </div>
                                
                                <canvas id="chartReport2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fab fa-twitter fa-3x col-blue"></i>
                        <div class="title p-t-15">
                            <h3>Twitter</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Silakan gabung dengan kami di twitter.</span>
                        </div>
                        <a target="_blank" href="https://twitter.com/MtsKeban">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fab fa-instagram fa-3x col-red"></i>
                        <div class="title p-t-15">
                            <h3>Instagram</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Silakan gabung dengan kami di instagram.</span>
                        </div>
                        <a target="_blank" href="https://www.instagram.com/wargamtsalikhlaskeban2/">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fab fa-facebook-f fa-3x col-blue"></i>
                        <div class="title p-t-15">
                            <h3>Facebook</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Silakan gabung dengan kami di facebook.</span>
                        </div>
                        <a target="_blank" href="https://www.facebook.com/mtsalikhlas.kebanii">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </section>
    @endsection