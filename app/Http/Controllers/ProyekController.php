<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProyekController extends Controller
{
    //
    public function index(){
        $proyek=DB::table('proyek')->get();

        return view('layouts.index', compact('proyek'));
    }

    public function create(){
        return view('layouts.create');
    }

    public function store(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'title'=>'required',
        //     'isi'=>'required'
        // ]);

        $query= DB::table('proyek')->insert([
            'nama' => $request['nama'],
            'deskripsi' => $request['deskripsi'],
            'tanggal_mulai' => $request['tanggal_mulai'],
            'tanggal_deadline' => $request['tanggal_deadline'],
            'status' => 0
        ]);

        return redirect('/proyek');
    }
}
