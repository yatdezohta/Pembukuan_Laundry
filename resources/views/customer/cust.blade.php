@extends ('layout.master')

@section ('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Pelanggan</h3>
            <div class="box-tools pull-right">
              <a href="{{route('Cust.create')}}" class="btn btn-box-tool"><i class="fa fa-plus-circle"></i>Tambah Baru</a>
</div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Hp</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
              </thead>
                <?php $number = 0;?>
                @foreach ($customer as $value)
              <tr>
                <td>{{ ++ $number}}.</td>
                <td>{{ $value->nama_cust}}</td>
                <td>{{ $value->nohp}}</td>
                <td>{{ $value->alamat}}</td>
                <td>
                   <button type="button" class="btn  btn-danger">Danger</button>
                   <button type="button" class="btn  btn-primary">Primary</button>
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
