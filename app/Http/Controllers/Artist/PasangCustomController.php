<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Custom;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PasangCustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::all();
        $customs = Custom::all();
        // $customs = Custom::where('user_id', '=' , auth()->id());
        // return view('client.caribarang.index', ['users' => $users]);
        return view('artist.pasangcustom.index', ['users' => $users, 'customs' => $customs]);
    }

    public function detail(){
        $custom = Custom::all()->where('id', '=', request('custom_id'));
        $orders =  Order::all()->where('custom_id', '=', request('custom_id'));

        return view('artist.pasangcustom.detail', ['custom' => $custom, 'orders' => $orders]);
    }

    public function new(){
        return view('artist.pasangcustom.buat');
    }

    public function create()
    {
        //
        $user_id = auth()->user()->id;
        Custom::create([
            'user_id' => $user_id,
            'name' => request('name'),
            'description' => request('description'),
            'category' => request('category'),
            'city' => request('city'),
            'base_price' => request('base_price'),
            'estimated_time' => request('estimated_time'),
            'stock' => request('stock'),
            'file_path' => '/stisla/assets/img/example-image.jpg'
        ]);

        return redirect('artist/pasangcustom');
    }

    public function tambah(){

    }

    public function kurang(){

    }

    public function delete(){
        $id = request('custom_id');
        DB::delete('delete from customs where id = '.$id);
        // $users = User::all()->where('proyek_id', '=', request('proyek_id'));
        // foreach($users as $user){
        //     $user->applying = '0';
        //     $user->proyek_id = '0';
        //     $user->status_id = '8';
        //     $user->works_under = null;
        //     $user->save();
        // }

        return redirect('artist/pasangcustom');
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
