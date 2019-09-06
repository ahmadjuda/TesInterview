<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangunanController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Bangunan::all();
        return view('bangunan/index')->with($data);
    }

    public function create()
    {
        return view('bangunan/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'jenis_bangunan'  =>  'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $status = \App\Bangunan::create($input);

        if ($status) return redirect('bangunan')->with('success', 'Data berhasil ditambahkan');
        else return redirect('bangunan')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
        $data['result'] = \App\Bangunan::where('id_jenis_bangunan', $id)->first();
        return view('bangunan/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'jenis_bangunan'  =>  'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Bangunan::where('id_jenis_bangunan', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('bangunan')->with('success', 'Data berhasil diubah');
        else return redirect('bangunan')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
        $result = \App\Bangunan::where('id_jenis_bangunan', $id)->first();
        $status = $result->delete();

        if ($status) return redirect('bangunan')->with('success', 'Data berhasil dihapus');
        else return redirect('bangunan')->with('error', 'Data gagal dihapus');
    }
}
