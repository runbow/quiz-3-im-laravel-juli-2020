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
}
