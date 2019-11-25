@extends ('layout.master')

@section ('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data User</h3>
            <div class="box-tools pull-right">
              <a href="{{route('User.create')}}" class="btn btn-box-tool"><i class="fa fa-plus-circle"></i>Tambah Baru</a>
</div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <?php $number = 0;?>
              @foreach ($data as $value)
            <tr>
              <td>{{ ++ $number}}.</td>
              <td>{{ $value->nama_user}}</td>
              <td>{{ $value->email}}</td>
              <td>{{ $value->role}}</td>
              <td>
                <a href="{{ route('User.edit', ['User' => $value->id_User]) }}"><button type="button" class="btn btn-primary">Update</button></a>
              <a href="" onclick="event.preventDefault(); if(confirm('Apakah anda yakin?')){$('form#hapus').attr('action', '{{ route ('User.destroy', ['User' => $value->id_User]) }}').submit(); }">
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
