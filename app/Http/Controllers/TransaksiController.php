<?php

namespace App\Http\Controllers;

use App\tb_transaksi;
use App\tb_paket;
use App\tb_detail_transaksi;
use Illuminate\Http\Request;
use PDF;
use Str;

class TransaksiController extends Controller
{
    public function index()
    {
    	$transaksi = tb_transaksi::where('id_outlet', '=', auth()->user()->id_outlet)->where('id_user', '=', auth()->user()->id)->get();
    	return view('transaksi.index', compact('transaksi'));
    }

    public function store(Request $request)
    {
    	$transaksi = new tb_transaksi;
    	$transaksi->id_outlet = auth()->user()->id_outlet;
    	$transaksi->kode_invoice = str::random(10);
    	$transaksi->id_member = $request->id_member;
    	$transaksi->tgl = date('d-m-Y');
    	$transaksi->batas_waktu = date('d-m-Y', strtotime('+3 days', strtotime($transaksi->tgl)));
    	$transaksi->biaya_tambahan = $request->biaya_tambahan;
    	$transaksi->diskon = $request->diskon;
    	$transaksi->pajak = $request->pajak;
    	$transaksi->status = 'baru';
    	$transaksi->dibayar = 'belum_dibayar';
        $transaksi->id_user = auth()->user()->id;
        if ($transaksi->id_member == null) {
            return redirect('keranjang')->with('isi', 'Pilih Member Terlebih Dahulu !');
        }else{
            $transaksi->save();    
        }

        //Mengubah status keranjang 
        tb_detail_transaksi::where('status', '=', 'Keranjang')
                            ->update([
                                'status' => 'Proses',
                                'id_transaksi' => $transaksi->id
                            ]);
    	
    	return redirect('/transaksi');
    }

    public function dibayar(Request $request, $id)
    {
        $transaksi = tb_transaksi::where('id', $id);
        $transaksi->update([
                  'dibayar' =>'dibayar',
                  'tgl_bayar' => date('d-m-Y')
        ]);

        return redirect('transaksi');
    }

    public function proses(Request $request, $id)
    {
        $transaksi = tb_transaksi::where('id', $id);
        $transaksi->update([
                'status' => 'proses'
        ]);

        return redirect('transaksi');
    }

    public function selesai(Request $request, $id)
    {
        $transaksi = tb_transaksi::where('id', $id);
        $transaksi->update([
                'status' => 'selesai'
        ]);

        return redirect('transaksi');
    }

    public function diambil(Request $request, $id)
    {
        $transaksi = tb_transaksi::where('id', $id);
        $transaksi->update([
                'status' => 'diambil'
        ]);

        return redirect('transaksi');
    }

    public function datatransaksi()
    {
        $transaksi = tb_transaksi::where('id_outlet', '=', auth()->user()->id_outlet)->paginate(5);
        return view('transaksi.index', compact('transaksi'));
    }

    public function pajak(Request $request, $id)
    {
        $transaksi = tb_transaksi::where('id', $id);
        $transaksi->update([
            'pajak' => $request->pajak
        ]);

        return redirect('transaksi');
    }

    public function diskon(Request $request, $id)
    {
        $transaksi = tb_transaksi::where('id', $id);
        $transaksi->update([
            'diskon' => $request->diskon
        ]);

        return redirect('transaksi');
    }

    public function biaya_tambahan(Request $request, $id)
    {
        $transaksi = tb_transaksi::where('id', $id);
        $transaksi->update([
            'biaya_tambahan' => $request->biaya_tambahan
        ]);

        return redirect('transaksi');
    }

    public function exportPdf()
    {
        $transaksi = tb_transaksi::all();
        $pdf = PDF::loadView('export.exportpdf', ['transaksi' => $transaksi]);
        return $pdf->download('transaksi.pdf');
    }
}
