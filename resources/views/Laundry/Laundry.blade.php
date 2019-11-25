@extends ('layout.master')

@section ('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Laundry</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Unit</th>
                <th>Tipe Laundry</th>
                <th>Harga</th>
              </tr>
              </thead>
              <?php $number = 0;?>
              @foreach ($data as $value)
            <tr>
              <td>{{ ++ $number}}.</td>
              <td>{{ $value->nama_laundry}}</td>
              <td>{{ $value->unit}}</td>
              <td>{{ $value->id_tipe_laundry}}</td>
              <td>{{ $value->harga}}</td>
              <td>
                <a href="{{ route('Laundry.edit', ['Cust' => $value->id_detLaundry]) }}"><button type="button" class="btn btn-primary">Update</button></a>
              <a href="" onclick="event.preventDefault(); if(confirm('Apakah anda yakin?')){$('form#hapus').attr('action', '{{ route ('Laundry.destroy', ['Laundry' => $value->id_detLaundry]) }}').submit(); }">
                <button type="button" class="btn  btn-danger">Delete</button></a>
              </td>
            </tr>
              @endforeach

\
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

</section>
<!-- /.content -->
@endsection
