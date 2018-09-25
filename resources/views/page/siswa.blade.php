@extends('index')

@section('CHeader', 'Data Siswa')
@section('CActive', 'Siswa')
@section('content')

<!-- Main content -->
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $index => $data)
                <tr>
                  <td>{{$index + 1 }}</td>
                  <td>{{$data->nisn}}
                  </td>
                  <td>{{$data->nama}}</td>
                  <td>{{ $data->kelas}}</td>
                  <td><form method="post" action="">
                      <a href="" type="button" class="btn btn-warning">Edit</a> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleting{{ $data->id }}">Delete</button>
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
                <form method="post" class="delete_form" action="{{action('siswacontroller@destroy', $data->id)}}">
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
                  <th>NISN</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
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
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        

        
@endsection