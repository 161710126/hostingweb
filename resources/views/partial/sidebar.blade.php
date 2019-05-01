<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/guest/images/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">M Junika Berli</a>
        </div>
      </div>

      
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-navicon"></i>
              <p>
                DATA MTs
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{Route('gurus.index')}}" class="nav-link ">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p> Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('eskuls.index')}}" class="nav-link">
                  <i class="fa fa-soccer-ball-o nav-icon"></i>
                  <p>Eskul</p>
                </a>
              </li>
              
               <li class="nav-item">
                <a href="{{Route('artikels.index')}}" class="nav-link">
                  <i class="fa fa-server"></i>
                  <p>Artikel</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('kategori.index')}}" class="nav-link">
                  <i class="fa fa-server"></i>
                  <p>Kategori Artikel</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('kategorisfasilitas.index')}}" class="nav-link">
                  <i class="fa fa-server"></i>
                  <p>Kategori Fasilitas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('kategoris.index')}}" class="nav-link">
                  <i class="fa fa-server"></i>
                  <p>Kategori Galerry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('fasilitas.index')}}" class="nav-link">
                  <i class="fa fa-institution"></i>
                  <p>Fasilitas</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('galeris.index')}}" class="nav-link">
                  <i class="fa fa-image nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('prestasis.index')}}" class="nav-link">
                  <i class="fa fa-graduation-cap"></i>
                  <p>Prestasi</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('events.index')}}" class="nav-link">
                  <i class="fa fa-graduation-cap"></i>
                  <p>Agenda</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('testimonis.index')}}" class="nav-link">
                  <i class="fa fa-users"></i>
                  <p>Testimoni</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{Route('kontaks.index')}}" class="nav-link">
                  <i class="fa fa-phone"></i>
                  <p>Kontak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('users.index')}}" class="nav-link">
                  <i class="fa fa-user-circle-o"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>
          
          
           <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>