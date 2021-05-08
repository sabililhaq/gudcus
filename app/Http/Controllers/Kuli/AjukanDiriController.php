<?php

namespace App\Http\Controllers\Kuli;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


use Illuminate\Http\Request;

class AjukanDiriController extends Controller
{
    //
    public function index(){
        return view('kuli.ajukandiri.index');
    }
}
