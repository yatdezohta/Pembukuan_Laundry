@extends ('layout.master')

@section ('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Pengeluaran</h3>
            <div class="box-tools pull-right">
              <a href="{{route('Pengeluaran.create')}}" class="btn btn-box-tool"><i class="fa fa-plus-circle"></i>Tambah Baru</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- <form id="hapus" method="post" action="" style="display:none">
              @csrf
              @method('DELETE')
            </form> -->
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Keterangan</th>
                <th>harga</th>
                <th>catatan</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <?php $number = 0;?>
              @foreach ($data as $value)
            <tr>
              <td>{{ ++ $number}}.</td>
              <td>{{ $value->deskripsi}}</td>
              <td>{{ $value->harga}}</td>
              <td>{{ $value->catatan}}</td>
              <td>
                <a href="{{ route('Pengeluaran.edit', ['Pengeluaran' => $value->id_pengeluaran]) }}"><button type="button" class="btn btn-primary">Update</button></a>
              <!-- <a href="" onclick="event.preventDefault(); if(confirm('Apakah anda yakin?')){$('form#hapus').attr('action', '{{ route ('Pengeluaran.destroy', ['Pengeluaran' => $value->id_pengeluaran]) }}').submit(); }">
                <button type="button" class="btn  btn-danger">Delete</button></a> -->
              </td>
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
