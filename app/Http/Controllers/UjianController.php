<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index()
    {
        $data_kuliah = \App\Ujian::all();
        return view('ujian.index',['data_kuliah' => $data_kuliah]);
    }
    public function create(Request $request)
    {
        \App\Ujian::create($request->all());
        return redirect('/ujian')->with('sukses','Data yang kamu inputkan berhasil ditambahkan!');
    }
}
