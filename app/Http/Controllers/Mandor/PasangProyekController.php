<?php

namespace App\Http\Controllers\Mandor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasangProyekController extends Controller
{
    //
    public function index(){
        return view('mandor.pasangproyek.index');
    }

    public function show(){
        return view('mandor.pasangproyek.detailproyek');
    }
}
