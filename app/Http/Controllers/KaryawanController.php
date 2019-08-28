<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Karyawan::all();
    	return view('karyawan/index')->with($data);
    }

    public function create()
    {
    	return view('karyawan/form');
    }

    public function store(Request $request)
    {
    	$rules = [
    		'nama_karyawan'	=>	'required|max:100',
    		'tanggal_lahir'	=>	'required',
    		'alamat'		=>	'required',
    		'telp'			=>	'required',
    		'id_jabatan'	=>	'required|exists:jabatan'
    	];
    	$this->validate($request, $rules);

    	$input = $request->all();
    	$status = \App\Karyawan::create($input);

    	if ($status) return redirect('karyawan')->with('success', 'Data berhasil ditambahkan');
    	else return redirect('karyawan')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
    	$data['result'] = \App\Karyawan::where('id_karyawan', $id)->first();
    	return view('karyawan/form')->with($data);
    }

    public function update(Request $request, $id)
    {
    	$rules = [
    		'nama_karyawan'	=>	'required|max:100',
    		'tanggal_lahir'	=>	'required',
    		'alamat'		=>	'required',
    		'telp'			=>	'required',
    		'id_jabatan'	=>	'required|exists:jabatan'
    	];
    	$this->validate($request, $rules);

    	$input = $request->all();
    	$result = \App\Karyawan::where('id_karyawan', $id)->first();
    	$status = $result->update($input);

    	if ($status) return redirect('karyawan')->with('success', 'Data berhasil diubah');
    	else return redirect('karyawan')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
    	$result = \App\Karyawan::where('id_karyawan', $id)->first();
    	$status	= $result->delete();

    	if ($status) return redirect('karyawan')->with('success', 'Data berhasil dihapus');
    	else return redirect('karyawan')->with('error', 'Data gagal dihapus');
    }
}