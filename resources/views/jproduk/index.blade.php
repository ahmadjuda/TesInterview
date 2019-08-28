@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Jenis Produk
        <small>Interior</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('jproduk') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Master Jenis Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('jproduk/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i>Tambah</a>
        </div>
        <div class="box-body">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis Produk</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($result as $row)
              <tr>
                <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                <td>{{ $row->jenis_produk }}</td>
                <td>
                  <a href="{{ url("jproduk/$row->id_jenis_produk/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <form action="{{ url("jproduk/$row->id_jenis_produk/delete") }}" method="POST" style="display:inline;">
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