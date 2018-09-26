@extends('index')

@section('CHeader', 'Mata Pelajaran')
@section('CActive', 'Mapel')
@section('content')
<script type="text/javascript">
  setTimeout(fade_out, 3000);

function fade_out() {
  $("#mydiv").fadeOut().empty();
}
  </script>

<!-- Main content -->
<section class="content">
      <!-- Small boxes (Stat box) -->
      @if(count($errors) > 0)
                <div class="alert alert-danger" id="mydiv">
                 <ul>
                 @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                 @endforeach
                 </ul>
                </div>
                @endif
                @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible" role="alert" id="mydiv">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>{{$message}}</strong>
              </div>
            @endif
            @if($message = Session::get('warning'))
            <div class="alert alert-danger alert-dismissible" role="alert" id="mydiv">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>{{$message}}</strong>
              </div>
            @endif
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mata Pelajaran</h3>
             
              <a class="btn btn-app pull-right" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Tambah Mata Pelajaran
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Mapel</th>
                  <th>Mata Pelajaran</th>
                  <th>Pengajar</th>
                  
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $index => $data)
                <tr>
                  <td>{{$index + 1 }}</td>
                  <td>{{$data->id_mapel}}</td>
                  <td>{{$data->mapel}}</td>
                  <td>{{$data->pengajar}}</td>
                  
                  <td><form method="post" action="">
                      <a href="{{action('mapelcontroller@edit', $data->id)}}" type="button" class="btn btn-warning">Edit</a> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleting{{ $data->id }}">Delete</button>
                    </form>
                  </td>
                </tr>
                <div class="modal fade" id="deleting{{$data->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Data?</h4>
              </div>
              <div class="modal-body">
                <p>Yakin ingin menghapus data <b>{{$data->mapel}}</b> dengan id_mapel : <b>{{$data->id_mapel}}</b>&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <form method="post" class="delete_form" action="{{action('mapelcontroller@destroy', $data->id)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE"/>
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
                @endforeach                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>ID Mapel</th>
                  <th>Mata Pelajaran</th>
                  <th>Pengajar</th>
                  
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <form method="post" action="{{url('mapel')}}">
                {{csrf_field()}}
              <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>ID MAPEL</label>
                  <input type="text" name="id_mapel" class="form-control" id="inputSuccess" placeholder="NISN ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Mapel</label>
                  <input type="text" name="mapel" class="form-control" id="inputSuccess" placeholder="Nama Siswa / Siswi ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Pengajar</label>
                  <input type="text" name="pengajar" class="form-control" id="inputSuccess" placeholder="Nama Siswa / Siswi ...">
                  <span class="help-block">Help block with success</span>
                </div>
                
                

              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" />
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    
        

        
@endsection