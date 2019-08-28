<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Jabatan::all();
    	return view('jabatan/index')->with($data);
    }

    public function create()
    {
    	return view('jabatan/form');
    }

    public function store(Request $request)
    {
    	$rules = [
    		'nama_jabatan'	=>	'required|max:100'
    	];
    	$this->validate($request, $rules);

    	$input = $request->all();
    	$status = \App\Jabatan::create($input);

    	if ($status) return redirect('jabatan')->with('success', 'Data berhasil ditambahkan');
    	else return redirect('jabatan')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
    	$data['result'] = \App\Jabatan::where('id_jabatan', $id)->first();
    	return view('jabatan/form')->with($data);
    }

    public function update(Request $request, $id)
    {
    	$rules = [
    		'nama_jabatan'	=>	'required|max:100'
    	];
    	$this->validate($request, $rules);

    	$input = $request->all();
    	$result = \App\Jabatan::where('id_jabatan', $id)->first();
    	$status = $result->update($input);

    	if ($status) return redirect('jabatan')->with('success', 'Data berhasil diubah');
    	else return redirect('jabatan')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
    	$result = \App\Jabatan::where('id_jabatan', $id)->first();
    	$status	= $result->delete();

    	if ($status) return redirect('jabatan')->with('success', 'Data berhasil dihapus');
    	else return redirect('jabatan')->with('error', 'Data gagal dihapus');
    }
}
