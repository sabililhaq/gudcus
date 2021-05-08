<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjukanDiriController extends Controller
{
    //
    public function index(){
        return view('kuli.ajukandiri.index');
    }
}
