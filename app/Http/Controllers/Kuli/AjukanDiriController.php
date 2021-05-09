<?php

namespace App\Http\Controllers\Kuli;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Gate;


use Illuminate\Http\Request;

class AjukanDiriController extends Controller
{
    //
    public function index(){
        $user = User::all();
        return view('kuli.ajukandiri.index', compact('user'));
    }
}
