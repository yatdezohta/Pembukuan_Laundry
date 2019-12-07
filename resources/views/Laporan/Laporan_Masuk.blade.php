@extends ('layout.master')

@section ('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Laporan</h3>
            <div class="box-tools pull-right">
    
</div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

                                <div class="row" id="select_date">

                                  <div class="col-md-4">
                                    <label for="month">Pilih Bulan</label>
                                    <select class="form-control" name="month" id="bulan">
                                      <option value="">-- Pilih Bulan --</option>
                                      <option value="1">Januari</option>
                                      <option value="2">Februari</option>
                                      <option value="3">Maret</option>
                                      <option value="4">April</option>
                                      <option value="5">Mei</option>
                                      <option value="6">Juni</option>
                                      <option value="7">Juli</option>
                                      <option value="8">Agustus</option>
                                      <option value="9">September</option>
                                      <option value="10">Oktober</option>
                                      <option value="11">November</option>
                                      <option value="12">Desember</option>
                                    </select>
                                  </div>
                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                  <br>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Jumlah</th>
                <th>Tanggal mulai</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
                <th>Pelanggan</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <?php $number = 0;?>
              @foreach ($data as $value)
            <tr>
              <td>{{ ++ $number}}.</td>
              <td>{{ $value->amount}}kg</td>
              <td>{{ $value->start_date}}</td>
              <td>{{ $value->end_date}}</td>
              <td>{{ $value->status}}</td>
              <td>{{ $value->customer_id}}</td>
              <td>{{ $value->harga}}</td>
              <td>{{ $value->Total}}</td>

            </tr>
              @endforeach

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

</section>
<!-- /.content -->
@endsection
