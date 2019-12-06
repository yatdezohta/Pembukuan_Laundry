@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    @if($data->id_user > 0)
    <h3 class="box-title">Edit Data User</h3>
    @else
    <h3 class="box-title">Tambah Data User</h3>
    @endif
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  @if($data->id_user > 0)
  <form role="form" method="post" action="{{route ('User.update', ['User' => $data->id_user]) }}">
  @method('PUT')
  @else
  <form role="form" method="post" action="{{route ('User.store')}}">
  @endif
    @csrf

    <div class="box-body">
      <div class="form-group">
        <label for="tambahUser">Nama</label>
        <input type="text" class="form-control" id="nama_user" name="nama_user"  placeholder="Nama" value="{{ $data->nama_user }}" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $data->email }}" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Jabatan</label>
        <input type="text" class="form-control" id="role" name="role"placeholder="Jabatan" value="{{ $data->role }}" required>
      </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route ('User.index')}}"  class="btn btn-default">Kembali</a>
    </div>
  </form>
</div>
<!-- /.box -->

@endsection
