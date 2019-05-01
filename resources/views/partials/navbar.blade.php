 <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/home">
                    <img src="{{asset('assets/admin/assets/images/logo2.png')}}" style="width: 30px;" alt="" />
                    <span class="logo-name">MTs AL ikhlas</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="javascript:void(0);" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    <!-- #START# Notifications-->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">{{$countNotif}}</span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">NOTIFICATIONS Komentar Pengunjung</li>
                            <li class="body">
                                <ul class="menu">
                                @php
                                $kontaks = App\contact::orderBy('created_at','desc')->get();
                                @endphp
                            @foreach($kontaks as $data)
                            @if($data->status == 0)
                                    <li>
                                        <a href="{{route('notifikasi')}}">
                                            <span class="table-img msg-user">
                                                <img src="{{asset('assets/guest/images/logo1.png')}}" alt="">
                                            </span>

                                            <span class="menu-info">
                                                <span class="menu-title">{{$data->nama}}</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i>{{$data->created_at->diffForHumans()}}
                                                </span>
                                                <span class="menu-desc">{{$data->email}}</span>
                                            </span>
                                        </a>
                                    </li>
                                    @endif
                                @endforeach
                                </ul>
                            </li>
                           <!--  <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li> -->
                        </ul>
                    </li>
                    <!-- #END# Notifications-->
                    <li class="dropdown user_profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="{{asset('assets/admin/assets/images/3.png')}}" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">feedback</i>Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <i class="material-icons">power_settings_new</i>Logout</a>
                        </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>