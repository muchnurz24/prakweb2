<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromController extends Controller
{

    public function index(){
        return view('from');
    }

    public function from(Request $request){
        $data = [
           'nama' => $request->input('nama'),
           'email' => $request->input('email'),
           'lokasi' => $request->input('lokasi'),
           'jk' => $request->input('jk'),
           'skill' => $request->input('skill')
        ];
        return view('from', compact('data'));
    }
}
