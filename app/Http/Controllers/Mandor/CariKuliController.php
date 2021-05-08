<?php

namespace App\Http\Controllers\Mandor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CariKuliController extends Controller
{
    //
    public function index(){
        return view('mandor.carikuli.index');
    }
}
