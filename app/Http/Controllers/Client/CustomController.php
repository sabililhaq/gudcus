<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Custom;
use App\Models\Order;

use App\Models\User;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $customs = Custom::all();
        // return view('client.caribarang.index', ['users' => $users]);
        return view('client.custom.index', ['customs' => $customs]);
    }

    public function detail(){
        $custom = Custom::all()->where('id', '=', request('custom_id'));
        $artist_id = -1;
        foreach ($custom as $cus) {
            $artist_id = $cus->user_id;
        }
        $artist = User::all()->where('id', '=', $artist_id);
        return view('client.custom.detail', ['custom' => $custom, 'artist' => $artist]);
    }

    public function order(){
        $custom = Custom::all()->where('id', '=', request('custom_id'));
        $artist_id = -1;
        foreach ($custom as $cus) {
            $artist_id = $cus->user_id;
        }
        $custom_id = request('custom_id');
        $artist = User::all()->where('id', '=', $artist_id);

        return view('client.custom.order', ['custom' => $custom,'custom_id' => $custom_id, 'artist' => $artist]);
    }

    public function new(){
        $user_id = auth()->user()->id;
        Order::create([
            'user_id' => $user_id,
            'custom_id' => request('custom_id'),
            'request' => request('request'),
            'notes' => request('notes'),
            'status' => 1,
            'delivery_status' => 1,
            'file_path' => '/stisla/assets/img/products/product-1.jpg'
        ]);

        return redirect('client/order');
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
