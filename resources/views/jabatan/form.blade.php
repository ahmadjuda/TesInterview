@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Master Jabatan
        <small>Interior</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('jabatan') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Master Jabatan</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Master Jabatan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('jabatan') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i>Kembali</a>
          </div>
        </div>
        <div class="box-body">
          <form action="{{ empty($result) ? url('jabatan/add') : url("jabatan/$result->id_jabatan/edit") }}" class="form-horizontal" method="POST">{{ csrf_field() }}

            @if (!empty($result))
              {{ method_field('patch') }}
            @endif
            <div class="form-group">
              <label class="control-label col-sm-2">Jabatan</label>
              <div class="col-sm-10">
                <input type="text" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan" value="{{ @$result->nama_jabatan }}">
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