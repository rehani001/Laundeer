<?php

namespace App\Http\Controllers;

use \App\User;
use \App\tb_outlet;
use Illuminate\Http\Request;
use Hash;

class KasirController extends Controller
{
    public function dashboard()
    {
    	return view('dashboards.dashboard');
    }

    public function index()
    {
    	$data_kasir = User::where('role', '=', 'kasir')->paginate(4);
    	return view('kasir.index', ['data_kasir' => $data_kasir]);
    }

    public function create()
    {
        $outlet = tb_outlet::all();
    	return view('kasir.tambah', compact('outlet'));
    }

    public function edit($id)
    {
        $kasir = User::find($id);
        $outlet = tb_outlet::all();
    	return view('kasir.edit', compact('kasir', 'outlet'));
    }

    public function update(Request $request, $id)
    {
        $kasir = User::find($id);
        $kasir->update($request->all());
        return redirect('kasir')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = 'kasir';
        $user->id_outlet = $request->id_outlet;
        $user->save();

        return redirect('/kasir');
    }

    public function delete($id)
    {
        $kasir = \App\User::find($id);
        $kasir->delete();
        return redirect('/kasir')->with('sukses', 'Data Berhasil dihapus');
    }
}
