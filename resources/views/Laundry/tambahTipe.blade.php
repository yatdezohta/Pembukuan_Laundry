@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    @if($data->id_tipe > 0)
    <h3 class="box-title">Edit Data Tipe Laundry</h3>
    @else
    <h3 class="box-title">Tambah Data Tipe Laundry</h3>
    @endif
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  @if($data->id_tipe > 0)
  <form role="form" method="post" action="{{route ('Tipe.update', ['Tipe' => $data->id_tipe]) }}">
  @else
  <form role="form" method="post" action="{{route ('Tipe.store')}}">
     @endif
    @csrf
    @method('PUT')
    <div class="box-body">
      <div class="form-group">
        <label for="tambahTipe">Tipe Laundry</label>
        <input type="text" class="form-control" id="tipe_laundry" name="tipe_laundry"  placeholder="Tipe Laundry" value="{{ $data->tipe_laundry }}">
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route ('Tipe.index')}}"  class="btn btn-default">Kembali</a>
    </div>
  </form>
</div>
<!-- /.box -->

@endsection
