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
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Dashboard</li>
        
        <li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        
        <li><a href="/siswa"><i class="fa fa-user-o"></i> <span>Data Siswa</span></a></li>
        <li><a href=""><i class="fa fa-graduation-cap"></i> <span>Kelas</span></a></li>
        <li><a href="{{route('mapel')}}"><i class="fa fa-book"></i> <span>Mata Pelajaran</span></a></li>
        <li><a href="{{route('absensi')}}"><i class="fa fa-calendar"></i> <span>Absensi</span></a></li>
        <li><a href="{{route('piket.index')}}"><i class="fa fa-trash"></i> <span>Jadwal Piket</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>