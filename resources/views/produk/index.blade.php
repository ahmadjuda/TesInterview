@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Produk
        <small>Interior</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('produk') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Master Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('produk/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i>Tambah</a>
          </div>
        <div class="box-body">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Jenis</th>
                <th>Nama Barang</th>
                <th>Panjang</th>
                <th>Lebar</th>
                <th>Tinggi</th>
                <th>Harga</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($result as $row)
              <tr>
                <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                <td>{{ $row->kode }}</td>
                <td>{{ $row->jproduk->jenis_produk }}</td>
                <td>{{ $row->nama_produk }}</td>
                <td>{{ $row->panjang }}</td>
                <td>{{ $row->lebar }}</td>
                <td>{{ $row->tinggi }}</td>
                <td>{{ $row->harga }}</td>
                <td>
                  <a href="{{ url("produk/$row->id_produk/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <form action="{{ url("produk/$row->id_produk/delete") }}" method="POST" style="display:inline;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
        </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection