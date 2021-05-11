<?php

namespace App\Http\Controllers\Kuli;
use App\Http\Controllers\Controller;
use App\Models\Proyek;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;

class CariProyekController extends Controller
{
    //
    public function index(){
        $proyeks = Proyek::all();
        $users = User::all();
        return view('kuli.cariproyek.index', ['proyeks' => $proyeks, 'users' => $users]);
    }

    public function detail(){
        $proyek = Proyek::all()->where('id', '=', request('proyek_id'));
        $mandor = User::all()->where('id', '=', request('mandor_id'));
        // dump($mandor);
        return view('kuli.cariproyek.detail', ['proyek' => $proyek, 'mandor' => $mandor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
