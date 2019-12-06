@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">

    <h3 class="box-title">Tambah Data Transaksi</h3>

  <form role="form" method="post" action="{{route ('Transaksi.store')}}">
    @csrf
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputPassword1">Jumlah</label>
        <input type="number" class="form-control" id="amount" name="amount" placeholder="Jumlah" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Mulai</label>
        <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Tanggal Mulai" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Selesai</label>
        <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Tanggal Selesai" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <input type="text" class="form-control" id="status" name="status" placeholder="Status" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Pelanggan</label>
        <select class="form-control" id="customer_id" name="customer_id" placeholder="Pelanggan" >
        @foreach ($cust as $customers)
          <option value="{{ $customers -> id_cust }}">
            {{$customers -> nama_cust}}
          </option>
        @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" placeholder="harga" >
      </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route ('Transaksi.index')}}"  class="btn btn-default">Kembali</a>

    </div>
  </form>
</div>
<!-- /.box -->

@endsection
