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

    </section>

@endsection