<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class showroomcontroller extends Controller
{
    //
    public function store (request $request) {

        $this -> validate ($request, [
            'id'=> 'required',
            'nama_mobil' => 'required',
            'brand_mobil' => 'required',
            'warna_mobil' => 'required',
            'tipe_mobil' => 'required',
            'harga_mobil' => 'required',
        ]);

    Inventori : create([
        'nama_mobil' => $request -> nama_mobil,
        'brand_mobil' => $request -> brand_mobil,
        'warna_mobil' => $request -> warna_mobil,
        'tipe_mobil' => $request -> tipe_mobil,
        'harga_mobil' => $request -> harga_mobil,
    ]);

return redirect() -> route ('showroom.index');
    }

    public function index(){

        $showroom = showroom::all();

        return view ('showroom.index', compact('showroom'));
    }
    public function create(){
        return view('showroom.create');
    }
}
