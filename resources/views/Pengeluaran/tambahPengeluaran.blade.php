@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    @if($data->id_pengeluaran > 0)
    <h3 class="box-title">Edit Data Pengeluaran</h3>
    @else
    <h3 class="box-title">Tambah Data Pengeluaran</h3>
    @endif
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  @if($data->id_pengeluaran > 0)
  <form role="form" method="post" action="{{route ('Pengeluaran.update', ['Pengeluaran' => $data->id_pengeluaran]) }}">
  @method('PUT')
  @else
  <form role="form" method="post" action="{{route ('Pengeluaran.store')}}">
  @endif
    @csrf

    <div class="box-body">
      <div class="form-group">
        <label for="tambahCust">Keterangan</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi"  placeholder="Keterangan" value="{{ $data->deskripsi }}" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="{{ $data->harga }}" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Catatan</label>
        <input type="text" class="form-control" id="catatan" name="catatan"placeholder="Catatan" value="{{ $data->catatan }}" required>
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route ('Pengeluaran.index')}}"  class="btn btn-default">Kembali</a>
    </div>
  </form>
</div>
<!-- /.box -->

@endsection
