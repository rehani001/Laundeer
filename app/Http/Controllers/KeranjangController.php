<?php

namespace App\Http\Controllers;

use App\tb_member;
use App\tb_paket;
use App\tb_detail_transaksi;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
    	$keranjang = tb_detail_transaksi::where('id_user', '=', auth()->user()->id)->get();
        $keranjang = tb_detail_transaksi::where('status', '=', 'Keranjang')->get();
    	$member = tb_member::all();
    	return view('keranjang.index', compact('keranjang', 'member'));
    }

    public function store(Request $request)
    {
    	$keranjang = new tb_detail_transaksi;
    	$keranjang->id_paket = $request->id_paket;
    	$keranjang->qty = $request->qty;
        $keranjang->id_user = auth()->user()->id;
    	$keranjang->keterangan = $request->keterangan;
        $keranjang->save();

    	return redirect('/keranjang');
    }

    public function edit($id)
    {
        $paket = tb_paket::all();
        $keranjang = tb_detail_transaksi::find($id);
        return view('/keranjang.edit', compact('keranjang', 'paket'));
    }
    
    public function update(Request $request, $id)
    {
        $keranjang = tb_detail_transaksi::find($id);
        $keranjang->update($request->all());
        return redirect('keranjang')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $keranjang = tb_detail_transaksi::find($id);
        $keranjang->delete();
        return redirect('/keranjang')->with('sukses', 'Data Berhasil dihapus');
    }

}
