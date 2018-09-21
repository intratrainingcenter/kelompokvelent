 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        
        <li><a href="{{route('siswa')}}"><i class="fa fa-user-o"></i> <span>Data Siswa</span></a></li>
        <li><a href="{{route('kelas')}}"><i class="fa fa-graduation-cap"></i> <span>Kelas</span></a></li>
        <li><a href="{{route('mapel')}}"><i class="fa fa-book"></i> <span>Mata Pelajaran</span></a></li>
        <li><a href="{{route('absensi')}}"><i class="fa fa-calendar"></i> <span>Absensi</span></a></li>
        <li><a href="{{route('piket')}}"><i class="fa fa-trash"></i> <span>Jadwal Piket</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>