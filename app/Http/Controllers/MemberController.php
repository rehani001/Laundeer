<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
    	$data_member = \App\tb_member::all();
    	return view('member.index', ['data_member' => $data_member]);
    }

    public function create()
    {
    	return view('member.tambah');
    }

    public function edit($id)
    {
    	$member = \App\tb_member::find($id);
        return view('member.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = \App\tb_member::find($id);
        $member->update($request->all());
        return redirect('member')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function store(Request $request)
    {
        \App\tb_member::create($request->all());
        return redirect('/member')->with('sukses', 'Data Berhasil Diinput');
    }

     public function delete($id)
    {
        $member = \App\tb_member::find($id);
        $member->delete();
        return redirect('/member')->with('sukses', 'Data Berhasil dihapus');
    }
}
 