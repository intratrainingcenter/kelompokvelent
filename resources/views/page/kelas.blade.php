@extends('index')

@section('CHeader', 'Kelas')
@section('CActive', 'Kelas')
@section('content')

<!-- Main content -->
<section class="content">
	
	<div style="position: relative; left: 89%;">
		<button id="btn_add" type="button" class="btn bg-olive margin" data-toggle="modal" data-target="#modal-default">Add Kelas</button>
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
	                  <th width="20%">OPTION</th>
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
	                  	<button style="margin-right: -5px;" type="button" class="btn bg-orange margin" data-toggle="modal" data-target="#modal-edit"> Edit </button>
	                  	<button type="button" class="btn bg-maroon margin">Delete</button>
	                  </td>
	                </tr>
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
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
			{!! Form::close() !!}
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>      

         {{-- form edit --}}
    <div class="modal fade" id="modal-edit" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
            {!! Form::open(['route' => 'kelas.store','method' => 'post']) !!}
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Edit Modal</h4>
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
                <button type="submit" class="btn btn-primary">Save changes</button>
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
        		$('#btn_add').click(function(event) {
        			$('form :input').val('');
        		});
        	});
        </script>
@endsection