@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Ubah Data Tipe Laundry</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label for="editCust">No</label>
        <input type="email" class="form-control" id="editNama" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama</label>
        <input type="password" class="form-control" id="editNohp" placeholder="No Handphone">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Unit</label>
        <input type="password" class="form-control" id="editNohp" placeholder="No Handphone">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tipe Laundry</label>
        <input type="password" class="form-control" id="editNohp" placeholder="No Handphone">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga</label>
        <input type="password" class="form-control" id="editNohp" placeholder="No Handphone">
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="submit" class="btn btn-primary">Batal</button>

    </div>
  </form>
</div>
<!-- /.box -->

@endsection
