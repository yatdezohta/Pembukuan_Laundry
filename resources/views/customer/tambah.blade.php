@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    @if($data->id_cust > 0)
    <h3 class="box-title">Edit Data Pelanggan</h3>
    @else
    <h3 class="box-title">Tambah Data Pelanggan</h3>
    @endif
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  @if($data->id_cust > 0)
  <form role="form" method="post" action="{{route ('Cust.update', ['Cust' => $data->id_cust]) }}">
  @method('PUT')
  @else
  <form role="form" method="post" action="{{route ('Cust.store')}}">
  @endif
    @csrf

    <div class="box-body">
      <div class="form-group">
        <label for="tambahCust">Nama Pelanggan</label>
        <input type="text" class="form-control" id="nama_cust" name="nama_cust"  placeholder="Nama Pelanggan" value="{{ $data->nama_cust }}" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">No HP</label>
        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP" value="{{ $data->nohp }}" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat"placeholder="Alamat" value="{{ $data->alamat }}" required>
      </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route ('Cust.index')}}"  class="btn btn-default">Kembali</a>
    </div>
  </form>
</div>
<!-- /.box -->

@endsection
