<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Periode::all();
    	return view('periode/index')->with($data);
    }

    public function create()
    {
    	return view('periode/form');
    }

    public function store(Request $request)
    {
    	$rules = [
    		'waktu_periode'	=>	'required|max:100'
    	];
    	$this->validate($request, $rules);

    	$input = $request->all();
    	$status = \App\Periode::create($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil ditambahkan');
    	else return redirect('/')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
    	$data['result'] = \App\Periode::where('id_periode', $id)->first();
    	return view('periode/form')->with($data);
    }

    public function update(Request $request, $id)
    {
    	$rules = [
    		'waktu_periode'	=>	'required|max:100'
    	];
    	$this->validate($request, $rules);

    	$input = $request->all();
    	$result = \App\Periode::where('id_periode', $id)->first();
    	$status = $result->update($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil diubah');
    	else return redirect('/')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
    	$result = \App\Periode::where('id_periode', $id)->first();
    	$status	= $result->delete();

    	if ($status) return redirect('/')->with('success', 'Data berhasil dihapus');
    	else return redirect('/')->with('error', 'Data gagal dihapus');
    }
}
