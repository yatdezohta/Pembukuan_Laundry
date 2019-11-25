@extends ('layout.master')

@section ('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tipe Laundry</h3>
            <div class="box-tools pull-right">
              <a href="{{route('Tipe.create')}}" class="btn btn-box-tool"><i class="fa fa-plus-circle"></i>Tambah Baru</a>
</div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form  method="post" action="">
              @csrf
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Tipe Laundry</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <?php $number = 0;?>
              @foreach ($data as $value)
              <tr>
              <td>{{ ++ $number}}.</td>
              <td>{{ $value->tipe_laundry}}</td>
              <td>
                <a href="{{ route('Tipe.edit', ['Tipe' => $value->id_tipe]) }}"><button type="button" class="btn btn-primary">Update</button></a>
              <a href="" onclick="event.preventDefault(); if(confirm('Apakah anda yakin?')){$('form#hapus').attr('action', '{{ route ('Tipe.destroy', ['Tipe' => $value->id_tipe]) }}').submit(); }">
                <button type="button" class="btn  btn-danger">Delete</button></a>
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
