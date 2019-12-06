@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">

    <h3 class="box-title">Edit Data Transaksi</h3>

  </div>

  <form role="form" method="post" action="{{route ('Transaksi.update', ['Transaksi' => $data->id_transaksi]) }}">
  @method('PUT')
    @csrf
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <input type="text" class="form-control" id="status" name="status" placeholder="Status" value="{{ $data->status }}">
      </div>

    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->

@endsection
