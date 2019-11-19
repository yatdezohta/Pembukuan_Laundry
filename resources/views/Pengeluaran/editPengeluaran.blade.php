@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Ubah Data Pelanggan</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label for="editCust">No</label>
        <input type="email" class="form-control" id="editNama" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Keterangan</label>
        <input type="number" class="form-control" id="editNohp" placeholder="Jumlah">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga</label>
        <input type="date" class="form-control" id="editAlamat" placeholder="Tanggal Mulai">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Catatan</label>
        <input type="date" class="form-control" id="editAlamat" placeholder="Tanggal Selesai">
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
