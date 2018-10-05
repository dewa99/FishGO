<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_akses_halaman extends Controller
{
    public function index()
    {
    		return view('index');
    }
    public function tes()
    {
    	return view('test');
    }
}
