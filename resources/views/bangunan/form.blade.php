@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Master Jenis Bangunan
        <small>Interior</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('bangunan') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Master Jenis Bangunan</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Master Jenis Bangunan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('bangunan') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i>Kembali</a>
          </div>
        </div>
        <div class="box-body">
          <form action="{{ empty($result) ? url('bangunan/add') : url("bangunan/$result->id_jenis_bangunan/edit") }}" class="form-horizontal" method="POST">{{ csrf_field() }}

            @if (!empty($result))
              {{ method_field('patch') }}
            @endif
            <div class="form-group">
              <label class="control-label col-sm-2">Jenis Bangunan</label>
              <div class="col-sm-10">
                <input type="text" name="jenis_bangunan" class="form-control" placeholder="Jenis Bangunan" value="{{ @$result->jenis_bangunan }}">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-save"></i>
                  Simpan
                </button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
        </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection