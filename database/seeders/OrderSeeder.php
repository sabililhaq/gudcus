<?php

namespace Database\Seeders;
use App\Models\Order;


use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Order::create([
            'user_id'=>'6', 
            'custom_id'=>'1', 
            'request'=>'Gambar tim barcelona',
            'notes' => 'Kalo bisa gambarnya kecil, banyakin variasi warnanya',
            'status' => '3',
            'delivery_status'=> '4',
            'file_path'=>'/stisla/assets/img/products/product-2.jpg'
        ]);

        Order::create([
            'user_id'=>'7', 
            'custom_id'=>'1', 
            'request'=>'Gambar bulan',
            'notes' => 'Dipercepat ya, saya udah bayar DPnya',
            'status' => '2',
            'delivery_status'=> '4',
            'file_path'=>'/stisla/assets/img/products/product-3.jpg'
        ]);

        Order::create([
            'user_id'=>'8', 
            'custom_id'=>'1', 
            'request'=>'Gambar basket',
            'notes' => 'Semoga gk nipu',
            'status' => '3',
            'delivery_status'=> '2',
            'file_path'=>'/stisla/assets/img/products/product-4.jpg'
        ]);

        Order::create([
            'user_id'=>'9', 
            'custom_id'=>'1', 
            'request'=>'Gambar basket',
            'notes' => 'Semoga gk nipu',
            'status' => '1',
            'delivery_status'=> '1',
            'file_path'=>'/stisla/assets/img/products/product-4.jpg'
        ]);
        
        Order::create([
            'user_id'=>'10', 
            'custom_id'=>'1', 
            'request'=>'Gambar basket',
            'notes' => 'Semoga gk nipu',
            'status' => '3',
            'delivery_status'=> '3',
            'file_path'=>'/stisla/assets/img/products/product-4.jpg'
        ]);

        Order::create([
            'user_id'=>'11', 
            'custom_id'=>'2', 
            'request'=>'Gantungan panda',
            'notes' => 'Panda nya yg lucu',
            'status' => '3',
            'delivery_status'=> '3',
            'file_path'=>'/stisla/assets/img/products/product-5.jpg'
        ]);
    }
}
