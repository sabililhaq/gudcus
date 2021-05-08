<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariProyekController extends Controller
{
    //
    public function index(){
        return view('kuli.cariproyek.index');
    }
}
