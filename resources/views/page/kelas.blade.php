@extends('index')

@section('CHeader', 'Kelas')
@section('CActive', 'Kelas')
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
		<button id="button_add" type="button" class="btn bg-olive margin" data-toggle="modal" data-target="#modal-default">Tambah Kelas</button>
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
	                  <th>NAMA KELAS</th>
	                  <th>JUMLAH MURID</th>
	                  <th>WALI KELAS</th>
	                  <th width="15%">OPTION</th>
	                </tr>
              	</thead>
                <tbody>
                	@foreach($data as $number => $data)
	                <tr>
	                  <td>{{$number+1}}</td>
	                  <td>{{$data->nama_kelas}}</td>
	                  <td>{{$data->jumlah_murid}}</td>
	                  <td>{{$data->wali_kelas}}</td>
	                  <td>
	                  	<button style="margin-right: -5px;" type="button" class="btn bg-orange margin" data-toggle="modal" data-target="#modal-edit-{{$data->id}}"><i class="fa fa-pencil"></i></button>
	                  	<button type="button" class="btn bg-maroon margin del" data-toggle="modal" data-target="#modal-delete-{{$data->id}}"><i class="fa fa-trash-o"></i></button>
	                  </td>
	                </tr>

                {{-- form edit --}}
                <div class="modal fade" id="modal-edit-{{$data->id}}" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    {!! Form::open(['route' => ['kelas.update',$data->id],'method' => 'put']) !!}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Edit Modal</h4>
                      </div>
                      <div class="modal-body">  

                      <label>Nama Kelas :</label>
                      <input name="nama_kelas" type="text" class="form-control" placeholder="..." value="{{$data->nama_kelas}}" required="">
                      <br>
                      <label>Jumlah Murid :</label>
                      <input name="jumlah_murid" type="number" class="form-control" placeholder="..." value="{{$data->jumlah_murid}}" required="">
                      <br>
                      <label>Wali Kelas :</label>
                      <input name="wali_kelas" type="text" class="form-control" placeholder="..." value="{{$data->wali_kelas}}" required="">

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
                        {!! Form::open(['route' => ['kelas.destroy',$data->id],'method' => 'delete']) !!}
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Delete Modal</h4>
                          </div>
                          <div class="modal-body">  
                           <center> 
                              <input type="hidden" name="id_delete" id="id_delete">
                              <h3>Confirmation!</h3>
                              <h4 class="statement">Apakah anda ingin menghapus kelas {{$data->nama_kelas}} ?</h4>
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
	                  <th>NAMA KELAS</th>
	                  <th>JUMLAH MURID</th>
	                  <th>WALI KELAS</th>
	                  <th width="15%">OPTION</th>
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
                    {!! Form::open(['route' => 'kelas.store','method' => 'post']) !!}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Add Modal</h4>
                      </div>

                      <div class="modal-body">              
                      <label>Nama Kelas :</label>
                      <input name="nama_kelas" type="text" class="form-control class_name" placeholder="..." required="">
                      <br>
                      <label>Jumlah Murid :</label>
                      <input name="jumlah_murid" type="number" class="form-control amount_of_student" placeholder="..." required="">
                      <br>
                      <label>Wali Kelas :</label>
                      <input name="wali_kelas" type="text" class="form-control homeroom_teacher" placeholder="..." required="">

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
        			$('.class_name').val('');
              $('.amount_of_student').val('');
              $('.homeroom_teacher').val('');
        		});
          });
      </script>
@endsection