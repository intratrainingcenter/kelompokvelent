@extends('index')

@section('CHeader', 'Absensi')
@section('CActive', 'Absensi')
@section('content')

	<section class="content">
		
      <!-- Small boxes (Stat box) -->
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
             <div class="box-body">
               {{ Form::open(array('route' => 'absensi.store')) }}
              <table id="example1" class="table table-bordered table-striped">
              	<thead>
              		 <tr>
	                  <th>No</th>
	                  <th>NISN</th>
	                  <th>NAMA</th>
	                  <th>JENIS KELAMIN</th>
	                  <th width="20%">OPTION</th>
	                </tr>
              	</thead>
                <tbody>
                	@foreach($data as $number => $data)
	                <tr>
	                  <td>{{$number+1}}</td>
	                  <td>{{$data->nisn}}</td>
	                  <td>{{$data->nama}}</td>
	                  <td>{{$data->jenis_kelamin}}</td>
	                  <td>

                    <input type="hidden" name="optionsRadios{{$number}}[]" value="{{$data->id}}">
                    <input style="visibility:hidden;" type="radio" name="optionsRadios{{$number}}[]" value="" checked>

	                  	<div class="form-group">
                        <div class="radio" style="margin-right: 8px;">
                          <label>
                            <input type="radio" name="optionsRadios{{$number}}[]" id="optionsRadios1" value="sakit">
                            Sakit
                          </label>
                        </div>
                        <div class="radio" style="margin-right: 8px;">
                          <label>
                            <input type="radio" name="optionsRadios{{$number}}[]" id="optionsRadios2" value="izin">
                            Izin
                          </label>
                        </div>
                        <div class="radio" style="margin-right: 8px;">
                          <label>
                            <input type="radio" name="optionsRadios{{$number}}[]" id="optionsRadios3" value="alpha">
                            Alpha
                          </label>
                        </div>
                      </div>
	                  </td>
	                </tr>

	                @endforeach
              </tbody>
          	</table>
              <hr>
              <input type="hidden" name="jumlah_data" value="{{$data_count}}">
              <button type="submit" class="btn bg-olive margin" style="position: relative; left: 90%;">Simpan</button>
              {{ Form::close() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      <!-- /.row (main row) -->

    </section>

@endsection

@section('js')
  <script>
    $(document).ready(function() {
       
    });
  </script>
@endsection