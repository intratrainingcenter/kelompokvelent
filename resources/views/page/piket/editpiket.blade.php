@extends('index')

@section('CHeader', 'Piket')
@section('CActive', 'Piket')
@section('content')

<!-- Main content -->
<section class="content">
      <!-- Small boxes (Stat box) -->
      <form method="post" action="{{action('piketcontroller@update', $id)}}" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PATCH" />
              	{{ csrf_field() }}
              <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>NISN</label>
                  <input type="text" name="nisn" value="{{$data->nisn}}" class="form-control" id="inputSuccess" placeholder="NISN ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Nama</label>
                  <input type="text" name="jadwalhari" value="{{$data->jadwalhari}}" class="form-control" id="inputSuccess" placeholder="Nama Siswa / Siswi ...">
                  <span class="help-block">Help block with success</span>
                </div>
                
                <div class="form-group">
                <input type="submit" class="btn btn-primary" />
                </div>
</form>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
@endsection