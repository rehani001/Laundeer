<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
    	$data_paket = \App\tb_paket::all();
    	return view('paket.index', ['data_paket' => $data_paket]);
    }

    public function create()
    {
        $outlet = \App\tb_outlet::all();
    	return view('paket.tambah',compact('outlet'));
    }

    public function edit($id)
    {
        
        $outlet = \App\tb_outlet::all();
        $paket = \App\tb_paket::find($id);
        return view('paket.edit', compact('outlet', 'paket'));
    }

    public function update(Request $request, $id)
    {
        $paket = \App\tb_paket::find($id);
        $paket->update($request->all());
        return redirect('paket')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function store(Request $request)
    {
        \App\tb_paket::create($request->all());
        return redirect('/paket')->with('sukses', 'Data Berhasil Diinput');
    }

    public function delete($id)
    {
        $paket = \App\tb_paket::find($id);
        $paket->delete();
        return redirect('/paket')->with('sukses', 'Data Berhasil dihapus');
    }

}
