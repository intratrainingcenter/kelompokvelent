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
		<button id="btn_add" type="button" class="btn bg-olive margin" data-toggle="modal" data-target="#modal-default">Add Class</button>
	</div>
		
      <!-- Small boxes (Stat box) -->
      	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Kelas</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
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
                	@foreach($data as $n => $dt)
	                <tr>
	                  <td>{{$n+1}}</td>
	                  <td>{{$dt->nama_kelas}}</td>
	                  <td>{{$dt->jumlah_murid}}</td>
	                  <td>{{$dt->wali_kelas}}</td>
	                  <td>
	                  	<button style="margin-right: -5px;" type="button" class="btn bg-orange margin" data-toggle="modal" data-target="#modal-edit-{{$dt->id}}"><i class="fa fa-pencil"></i></button>
	                  	<button type="button" class="btn bg-maroon margin del" data-toggle="modal" data-target="#modal-delete-{{$dt->id}}"><i class="fa fa-trash-o"></i></button>
	                  </td>
	                </tr>

                  {{-- form add --}}
                <div class="modal fade" id="modal-default" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    {!! Form::open(['route' => 'kelas.store','method' => 'post','id'=>'frm_add']) !!}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Add Modal</h4>
                      </div>

                      <div class="modal-body">              
                      <label>Nama Kelas :</label>
                      <input name="nama_kelas" type="text" class="form-control" placeholder="...">
                      <br>
                      <label>Jumlah Murid :</label>
                      <input name="jumlah_murid" type="number" class="form-control" placeholder="...">
                      <br>
                      <label>Wali Kelas :</label>
                      <input name="wali_kelas" type="text" class="form-control" placeholder="...">

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

                {{-- form edit --}}
                <div class="modal fade" id="modal-edit-{{$dt->id}}" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    {!! Form::open(['route' => ['kelas.update',$dt->id],'method' => 'put']) !!}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Edit Modal</h4>
                      </div>
                      <div class="modal-body">  

                      <label>Nama Kelas :</label>
                      <input name="nama_kelas" type="text" class="form-control" placeholder="..." value="{{$dt->nama_kelas}}">
                      <br>
                      <label>Jumlah Murid :</label>
                      <input name="jumlah_murid" type="number" class="form-control" placeholder="..." value="{{$dt->jumlah_murid}}">
                      <br>
                      <label>Wali Kelas :</label>
                      <input name="wali_kelas" type="text" class="form-control" placeholder="..." value="{{$dt->wali_kelas}}">

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
                  <div class="modal fade" id="modal-delete-{{$dt->id}}" style="display: none;">
                      <div class="modal-dialog">
                        <div class="modal-content">
                        {!! Form::open(['route' => ['kelas.destroy',$dt->id],'method' => 'delete']) !!}
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Delete Modal</h4>
                          </div>
                          <div class="modal-body">  
                           <center> 
                              <input type="hidden" name="id_delete" id="id_delete">
                              <h3>Confirmation!</h3>
                              <h4 class="statement">Apakah anda ingin menghapus kelas {{$dt->nama_kelas}} ?</h4>
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
          <!-- /.box -->
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

@endsection

@section('js')
	  	<script>
        	$(document).ready(function() {
        		$('#btn_add').click(function(event) {
        			$('form :input').val('');
        		});
      </script>
@endsection