
<!-- Main Sidebar Container -->
  
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
          <li class="nav-header">Data</li>
          <li class="nav-item">
            <a href="{{route('siswa')}}" class="nav-link">
              <i class="nav-icon fa fa-user-o"></i>
              <p>
                Data Siswa
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kelas')}}" class="nav-link">
              <i class="nav-icon fa fa-graduation-cap"></i>
              <p>
                Kelas
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('mapel')}}" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Mata Pelajaran
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('absensi')}}" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Absensi
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('piket')}}" class="nav-link">
              <i class="nav-icon fa fa-trash  "></i>
              <p>
                Jadwal Piket
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
