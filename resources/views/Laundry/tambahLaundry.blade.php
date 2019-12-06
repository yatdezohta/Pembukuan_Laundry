@extends ('layout.master')

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    @if($data->id_detLaundry > 0)
    <h3 class="box-title">Edit Data Laundry</h3>
    @else
    <h3 class="box-title">Tambah Data Laundry</h3>
    @endif
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  @if($data->id_detLaundry > 0)
  <form role="form" method="post" action="{{route ('Laundry.update', ['Laundry' => $data->id_detLaundry]) }}">
  @method('PUT')
  @else
  <form role="form" method="post" action="{{route ('Laundry.store')}}">
  @endif
    @csrf

  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputPassword1">Nama</label>
        <input type="text" class="form-control" id="nama_laundry" name="nama_laundry" placeholder="Nama Laundry" value="{{ $data->nama_laundry }}" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Unit</label>
        <input type="text" class="form-control" id="unit" name="unit" placeholder="Unit" value="{{ $data->unit }}" required>
      </div>
      <div class="form-group">
        <label for="id_tipe">Tipe Laundry</label>
        <select class="form-control" id="id_tipe" name="id_tipe" value="{{ $data->id_tipe }}">
          @foreach ($tipe as $tipelaundry)
            <option value="{{ $tipelaundry -> id_tipe }}">

              {{$tipelaundry -> tipe_laundry}}

            </option>
          @endforeach
        </select>
        <!-- <input type="text" class="form-control" id="id_tipe_laundry" name="id_tipe_laundry"placeholder="Tipe" required> -->

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="{{ $data->harga }}" required>
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route ('Laundry.index')}}"  class="btn btn-default">Kembali</a>

    </div>
  </form>
</div>
<!-- /.box -->

@endsection
