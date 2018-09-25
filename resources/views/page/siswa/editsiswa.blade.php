@extends('index')

@section('CHeader', 'Siswa')
@section('CActive', 'Siswa')
@section('content')

<!-- Main content -->
<section class="content">
      <!-- Small boxes (Stat box) -->
      <form method="post" action="{{action('siswacontroller@update', $id)}}" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PATCH" />
              	{{ csrf_field() }}
              <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>NISN</label>
                  <input type="text" name="nisn" value="{{$data->nisn}}" class="form-control" id="inputSuccess" placeholder="NISN ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Nama</label>
                  <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="inputSuccess" placeholder="Nama Siswa / Siswi ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input value="{{$data->tanggal_lahir}}" name="tanggal_lahir" type="date" class="form-control pull-right" id="datepicker">
                </div>
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Kelas</label>
                  <input type="text" name="kelas" value="{{$data->kelas}}" class="form-control" id="inputSuccess" placeholder="Kelas ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group">
                  <label>Select</label>
                  <select name="jenis_kelamin" class="form-control">
                    <option value="">{{$data->jenis_kelamin}}</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                   
                  </select>
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-primary" />
                </div>
</form>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
@endsection