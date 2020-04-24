<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatamemberController extends Controller
{
    public function index()
    {
    	return view('datamember.index');
    }
}
