<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    //
    public function index(){
        $orders = Order::all()->where('user_id', '=', auth()->user()->id);
        // return view('client.caribarang.index', ['users' => $users]);
        return view('client.order.index', ['orders' => $orders]);
    }

    public function detail(){
        $order = Order::all()->where('id', '=', request('order_id'));



        return view('client.order.detail', ['order' => $order]);
    }
}
