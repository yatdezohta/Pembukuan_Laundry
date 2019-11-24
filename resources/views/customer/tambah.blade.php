@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Data Pelanggan</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label for="tambahCust">Nama Pelanggan</label>
        <input type="email" class="form-control" id="tambahNama" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">No HP</label>
        <input type="password" class="form-control" id="tambahNohp" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <input type="password" class="form-control" id="tambahAlamat" placeholder="Password">
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
