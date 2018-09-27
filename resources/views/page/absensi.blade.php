@extends('index')

@section('CHeader', 'Absensi')
@section('CActive', 'Absensi')
@section('content')

	<section class="content">
		    
        @if($success = Session::get('success'))
          <div id="alert" class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert! </h4>{{$success}}.
          </div>
        @elseif($failed = Session::get('failed')) 
          <div id="alert" class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert! </h4>{{$failed}}.
          </div>
        @endif

        <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class=""><a href="#start_absen" data-toggle="tab" aria-expanded="false">Mulai Absen</a></li>
              <li class="active"><a href="#data_absen" data-toggle="tab" aria-expanded="false">Data Absen</a></li>
              <li class="pull-left header"><i class="fa fa-th"></i> Custom Tabs</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="data_absen">
                
                  <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                     <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>NAMA</th>
                            <th>KELAS</th>
                            <th>STATUS</th>
                            <th width="5%">OPTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data_absent as $number => $data)
                          <tr>
                            <td>{{$number+1}}</td>
                            <td>{{$data->nisn}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->kelas}}</td>
                            <td>{{$data->status}}</td>
                            <td width="13%">
                            <button style="margin-right: -5px;" type="button" class="btn bg-orange margin" data-toggle="modal" data-target="#modal-edit-{{$data->id_absen}}"><i class="fa fa-pencil"></i></button>
                             <button type="button" class="btn bg-maroon margin del" data-toggle="modal" data-target="#modal-delete-{{$data->id_absen}}"><i class="fa fa-trash-o"></i></button>
                            </td>
                          </tr>

                          {{-- form edit --}}
                        <div class="modal fade" id="modal-edit-{{$data->id_absen}}" style="display: none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                            {!! Form::open(['route' => ['absensi.update',$data->id_absen],'method' => 'put']) !!}
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Edit Modal</h4>
                              </div>
                              <div class="modal-body">  
                                <center style="margin-bottom: 20px;">
                                <h3>Nama : {{$data->nama}}</h3>
                                <h3>Kelas : {{$data->kelas}}</h3>
                                </center>
                                <select class="form-control" name="status">
                                  @if($data->status == 'izin')
                                    <option value="sakit">Sakit</option>
                                    <option value="izin" selected>Izin</option>
                                    <option value="alpha">Alpha</option>
                                  @elseif($data->status == 'alpha')
                                    <option value="sakit">Sakit</option>
                                    <option value="izin">Izin</option>
                                    <option value="alpha" selected>Alpha</option>
                                  @else
                                    <option value="sakit" selected>Sakit</option>
                                    <option value="izin">Izin</option>
                                    <option value="alpha">Alpha</option>  
                                  @endif
                                </select>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                             {!! Form::close() !!}
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>      

                    {{-- form hapus --}}
                      <div class="modal fade" id="modal-delete-{{$data->id_absen}}" style="display: none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                            {!! Form::open(['route' => ['absensi.destroy',$data->id_absen],'method' => 'delete']) !!}
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Delete Modal</h4>
                              </div>
                              <div class="modal-body">  
                               <center> 
                                  <input type="hidden" name="id_delete" id="id_delete">
                                  <h3>Confirmation!</h3>
                                  <h4 class="statement">Hapus Absen Dengan nama siswa {{$data->nama}} ?</h4>
                               </center>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Confirm</button>
                              </div>
                             {!! Form::close() !!}
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>      

                          @endforeach
                      </tbody>
                    </table>
                    </div>
                    <!-- /.box-body -->
                  </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="start_absen">
                   <!-- Small boxes (Stat box) -->
                  <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                     <div class="box-body">
                      <table id="example3" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                            <th>No</th>
                            <th>NAMA KELAS</th>
                            <th>JUMLAH MURID</th>
                            <th>WALI KELAS</th>
                            <th width="15%">OPTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data_class as $number => $data)
                          <tr>
                            <td>{{$number+1}}</td>
                            <td>{{$data->nama_kelas}}</td>
                            <td>{{$data->jumlah_murid}}</td>
                            <td>{{$data->wali_kelas}}</td>
                            <td>
                            <a href="{{ route('absensi.show',$data->id) }}" type="button" class="btn bg-olive margin">Pilih Kelas</a>
                            </td>
                          </tr>

                          @endforeach
                      </tbody>
                    </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
              <!-- /.row (main row) -->

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
    </section>

@endsection