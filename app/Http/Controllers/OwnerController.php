<?php

namespace App\Http\Controllers;

use \App\tb_outlet;
use \App\User;
use Hash;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
    	$data_owner = User::where('role', '=', 'owner')->get();

    	return view('owner.index', compact('data_owner'));
    }

    public function create()
    {
    	$data_outlet = tb_outlet::all();
    	return view('owner.tambah', compact('data_outlet'));
    }

    public function store(Request $request)
    {
    	$user = new User;
    	$user->nama = $request->nama;
    	$user->username = $request->username;
    	$user->password = Hash::make($request->password);
    	$user->role = 'owner';
    	$user->id_outlet = $request->id_outlet;
    	$user->save();

        return redirect('/owner');
    }

    public function edit($id)
    {
        $owner = User::find($id);
        $outlet = tb_outlet::all();
    	return view('owner.edit', compact('owner', 'outlet')); 
    }

    public function update(Request $request, $id)
    {
        $owner = User::find($id);
        $owner->update($request->all());
        return redirect('owner')->with('sukses', 'Data Berhasil Diupdate');
    }

     public function delete($id)
    {
        $owner = \App\User::find($id);
        $owner->delete();
        return redirect('/owner')->with('sukses', 'Data Berhasil dihapus');
    }
}
