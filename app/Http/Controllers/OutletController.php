<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index()
    {
    	$data_outlet = \App\tb_outlet::all();
    	return view('outlet.index', ['data_outlet' => $data_outlet]);
    }

    public function create()
    {
    	return view('outlet.tambah');
    }

    public function edit($id)
    {
    	$outlet = \App\tb_outlet::find($id);
        return view('outlet.edit', compact('outlet'));
    }

    public function update(Request $request, $id)
    {
        $outlet = \App\tb_outlet::find($id);
        $outlet->update($request->all());
        return redirect('/outlet')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function store(Request $request)
    {
        \App\tb_outlet::create($request->all());
        return redirect('/outlet')->with('sukses', 'Data Berhasil Diinput');
    }

     public function delete($id)
    {
        $outlet = \App\tb_outlet::find($id);
        $outlet->delete();
        return redirect('/outlet')->with('sukses', 'Data Berhasil dihapus');
    }
}
