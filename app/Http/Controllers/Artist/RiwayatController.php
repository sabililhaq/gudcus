<?php
namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;

use App\Models\Order;
use App\Models\Custom;
use Illuminate\Database\Console\DumpCommand;

class RiwayatController extends Controller
{
    //

    public function index(){
        // // $customs = Custom::all()->where('user_id', '=', auth()->user()->id);
        // $customs = Custom::all();
        // $orders = Order::all();
        // // dump($orders);
        // $items = $orders->union($customs);
        // // dump($items);

        // $items = $items->where('user_id', '=', auth()->user()->id);
        // // dump($items);

        // // dump($items->description);

        // // $orders = Order::all()->where('asd');

        // // $orders = Order::all->where('custom_id', '=', $customs);
        // $users = User::all();
        // // $orders = Order::all();

        $users = User::all();
        $items = Order::all();
        

        return view('artist.riwayat.index', ['users' => $users, 'orders' => $items]);
    }

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
