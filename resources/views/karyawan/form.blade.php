@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Master Karyawan
        <small>Interior</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('karyawan') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Master Karyawan</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Master Karyawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('karyawan') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i>Kembali</a>
          </div>
        </div>
        <div class="box-body">
          <form action="{{ empty($result) ? url('karyawan/add') : url("karyawan/$result->id_karyawan/edit") }}" class="form-horizontal" method="POST">{{ csrf_field() }}

            @if (!empty($result))
              {{ method_field('patch') }}
            @endif
            <div class="form-group">
              <label class="control-label col-sm-2">Nama</label>
              <div class="col-sm-10">
                <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama Karyawan" value="{{ @$result->nama_karyawan }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ @$result->tanggal_lahir }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Alamat</label>
              <div class="col-sm-10">
                <textarea type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap">{{ @$result->alamat }}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">No. Telepon</label>
              <div class="col-sm-10">
                <input type="text" name="telp" class="form-control" placeholder="No. Telepon" value="{{ @$result->telp }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Jabatan</label>
              <div class="col-sm-10">
                <select name="id_jabatan" class="form-control">
                  @foreach (\App\Jabatan::all() as $jabatan)
                    <option value="{{ $jabatan->id_jabatan }}" {{ @$result->id_jabatan == $jabatan->id_jabatan ? 'selected' : '' }}>{{ $jabatan->nama_jabatan }}</option>
                  @endforeach
                </select>
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