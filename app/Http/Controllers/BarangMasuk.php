<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangMasuk extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.barang_masuk');
    }
}
