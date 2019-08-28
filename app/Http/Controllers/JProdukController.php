<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JProdukController extends Controller
{
    public function index()
    {
        $data['result'] = \App\JProduk::all();
        return view('jproduk/index')->with($data);
    }

    public function create()
    {
        return view('jproduk/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'jenis_produk'  =>  'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $status = \App\JProduk::create($input);

        if ($status) return redirect('jproduk')->with('success', 'Data berhasil ditambahkan');
        else return redirect('jproduk')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
        $data['result'] = \App\JProduk::where('id_jenis_produk', $id)->first();
        return view('jproduk/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'jenis_produk'  =>  'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\JProduk::where('id_jenis_produk', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('jproduk')->with('success', 'Data berhasil diubah');
        else return redirect('jproduk')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
        $result = \App\JProduk::where('id_jenis_produk', $id)->first();
        $status = $result->delete();

        if ($status) return redirect('jproduk')->with('success', 'Data berhasil dihapus');
        else return redirect('jproduk')->with('error', 'Data gagal dihapus');
    }
}
