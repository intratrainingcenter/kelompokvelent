@extends('index')

@section('CHeader', 'Data Siswa')
@section('CActive', 'Siswa')
@section('content')

<!-- Main content -->
<section class="content">
	@if($success = Session::get('success'))
    <div id="alert" class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Alert! </h4>{{$success}}.
    </div>
  @endif
	<div style="position: relative; left: 89%;">
		<button id="button_add" type="button" class="btn bg-olive margin" data-toggle="modal" data-target="#modal-default">Tambah Siswa</button>
	</div>
      <!-- Small boxes (Stat box) -->
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
                    <th>Nama Siswa</th>
                    <th>Tanggal Lahir</th>
                    <th width="5%">Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Opsi</th>
	                </tr>
              	</thead>
                <tbody>
                	@foreach($data as $number => $data)
	                <tr>
                    <td>{{$number + 1 }}</td>
                    <td>{{$data->nisn}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->tanggal_lahir}}</td>
                    <td>{{$data->jenis_kelamin[0]}}</td>
                    <td>{{$data->nama_kelas}}</td>
	                  <td>
	                  	<button style="margin-right: -5px;" type="button" class="btn bg-orange margin" data-toggle="modal" data-target="#modal-edit-{{$data->id}}"><i class="fa fa-pencil"></i></button>
	                  	<button type="button" class="btn bg-maroon margin del" data-toggle="modal" data-target="#modal-delete-{{$data->id}}"><i class="fa fa-trash-o"></i></button>
	                  </td>
	                </tr>
                {{-- form edit --}}
                <div class="modal fade" id="modal-edit-{{$data->id}}" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    {!! Form::open(['route' => ['siswa.update',$data->id],'method' => 'put']) !!}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Edit Modal</h4>
                      </div>
                      <div class="modal-body">  
                        <center> 
                          <h4 class="statement">Ubah Data Siswa dengan NISN :{{$data->nisn}} </h4>
                        </center>
                      <br>
                      <label>Nama Murid :</label>
                      <input name="nama_murid" type="text" class="form-control" placeholder="..." value="{{$data->nama}}" required="">
                      <br>
                      <label>Tanggal Lahir:</label>
                       <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input name="tanggal_lahir" type="date" class="form-control pull-right 2" value="{{$data->tanggal_lahir}}" id="datepicker" required="">
                        </div>
                      <label>Jenis Kelamin :</label>
                        <select name="jenis_kelamin" class="form-control">
                          <option value="{{$data->jenis_kelamin}}">{{$data->jenis_kelamin}}</option>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      <label>Kelas :</label>
                        <select name="kelas" class="form-control">
                        <option value="{{$data->nama_kelas}}">{{$data->nama_kelas}}</option>
                          @foreach($kelas as $class)
                          <option value="{{$class->id}}">{{$class->nama_kelas}}</option>
                          @endforeach
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
                  <div class="modal fade" id="modal-delete-{{$data->id}}" style="display: none;">
                      <div class="modal-dialog">
                        <div class="modal-content">
                        {!! Form::open(['route' => ['siswa.destroy',$data->id],'method' => 'delete']) !!}
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Delete Modal</h4>
                          </div>
                          <div class="modal-body">  
                           <center> 
                              <input type="hidden" name="id_delete" id="id_delete">
                              <h3>Confirmation!</h3>
                              <h4 class="statement">Apakah anda ingin menghapus siswa {{$data->nama}} ?</h4>
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
              <tfoot>
              		 <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal Lahir</th>
                    <th width="5%">Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Opsi</th>
	                </tr>
              	</tfoot>
          	</table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
      {{-- form add --}}
                <div class="modal fade" id="modal-default" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    {!! Form::open(['route' => 'siswa.store','method' => 'post']) !!}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Tambah Siswa</h4>
                      </div>
                      <div class="modal-body">              
                      <label>Nama Murid :</label>
                      <input name="nama_murid" type="text" class="form-control 1" placeholder="..." required="">
                      <br>
                      <label>Tanggal Lahir:</label>
                       <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input name="tanggal_lahir" type="date" class="form-control pull-right 2" id="datepicker" required="">
                        </div>
                      <label>Jenis Kelamin :</label>
                        <select name="jenis_kelamin" class="form-control">
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      <label>Kelas :</label>
                        <select name="kelas" class="form-control">
                          @foreach($kelas as $index => $kelas)
                          <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    {!! Form::close() !!}
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>      
@endsection
@section('js')
	  	<script>
        	$(document).ready(function() {

          // empty the input after button add click
          $('#button_add').click(function(event) {
            $('.1').val('');
            $('.2').val('');
            $('.3').val('');
            $('.4').val('');
            $('.5').val('');
          });
        });
      </script>
@endsection