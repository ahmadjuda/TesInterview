@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Master Produk
        <small>Interior</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('produk') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Master Produk</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Master Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('produk') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i>Kembali</a>
          </div>
        </div>
        <div class="box-body">
          <form action="{{ empty($result) ? url('produk/add') : url("produk/$result->id_produk/edit") }}" class="form-horizontal" method="POST">{{ csrf_field() }}

            @if (!empty($result))
              {{ method_field('patch') }}
            @endif
            <div class="form-group">
              <label class="control-label col-sm-2">Jenis</label>
              <div class="col-sm-2">
                <select name="id_jenis_produk" class="form-control">
                  @foreach (\App\JProduk::all() as $jproduk)
                    <option value="{{ $jproduk->id_jenis_produk }}" {{ @$result->id_jenis_produk == $jproduk->id_jenis_produk ? 'selected' : '' }}>{{ $jproduk->jenis_produk }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Kode</label>
              <div class="col-sm-10">
              <input type="text" name="kode" class="form-control" placeholder="SF-" value="SF-{{ @$result->kode }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Nama</label>
              <div class="col-sm-10">
                <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" value="{{ @$result->nama_produk }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Harga</label>
              <div class="col-sm-10">
                <input type="text" name="harga" class="form-control" placeholder="Harga Produk" value="{{ @$result->harga }}"></input>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Panjang</label>
              <div class="col-sm-10">
                <input type="text" name="panjang" class="form-control" placeholder="Panjang" value="{{ @$result->panjang }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Lebar</label>
              <div class="col-sm-10">
                <input type="text" name="lebar" class="form-control" placeholder="Lebar" value="{{ @$result->lebar }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Tinggi</label>
              <div class="col-sm-10">
                <input type="text" name="tinggi" class="form-control" placeholder="Tinggi" value="{{ @$result->tinggi }}">
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