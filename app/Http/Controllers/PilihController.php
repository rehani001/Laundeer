<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilihController extends Controller
{
    public function index()
    {
    	$data_paket = \App\tb_paket::where('id_outlet', '=', auth()->user()->id_outlet)->paginate(4);
    	return view('pilih.paket', compact('data_paket'));
    }
}
