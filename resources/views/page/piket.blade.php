@extends('index')

@section('CHeader', 'Jadwal Piket')
@section('CActive', 'Piket')
@section('content')

<!-- Main content -->
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <a class="btn btn-app pull-right" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Tambah Jadwal Piket
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NISN</th>
                  <th>Jadwal Hari</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data as $index => $data)
                <tr>
                  <td>{{$data->nisn}}</td>
                  <td>{{$data->jadwalhari}}
                  </td>
                  
                  <td>
                  <form method="post" action="">
                      <a href="{{action('piketcontroller@edit', $data->id)}}" type="button" class="btn btn-warning">Edit</a> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleting{{ $data->id }}">Delete</button>
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
                <p>Yakin ingin menghapus data {{$data->nama}} dengan nisn {{$data->nisn}}&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <form method="post" class="delete_form" action="{{action('piketcontroller@destroy', $data->id)}}">
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
                  <th>NISN</th>
                  <th>Jadwal Hari</th>
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
                <form method="post" action="{{url('piket')}}">
                {{csrf_field()}}
              <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>NISN</label>
                  <input type="text" name="nisn" class="form-control" id="inputSuccess" placeholder="NISN ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Jadwal Hari</label>
                  <input type="text" name="jadwalhari" class="form-control" id="inputSuccess" placeholder="Nama Siswa / Siswi ...">
                  <span class="help-block">Help block with success</span>
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