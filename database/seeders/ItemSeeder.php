<?php

namespace Database\Seeders;
use App\Models\Item;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Item::create(['user_id' => '22', 'name' => 'Gantungan Kunci']);

        Item::create(['user_id'=>'22', 'name'=>'Gantungan Kunci', 'description'=>'Gantungan yang bisa dipakai pada kunci', 'stock'=>'69', 'price'=>'5000']);
        Item::create(['user_id'=>'22', 'name'=>'Casing Iphone 69', 'description'=>'Casing yang digunakan untuk melindungi iphone 69 anda', 'stock'=>'14', 'price'=>'1500000']);
        Item::create(['user_id'=>'23', 'name'=>'Kaos Keren', 'description'=>'Lorem Ipsum Dolor Sit Amet', 'stock'=>'123', 'price'=>'75000']);
        
    }
}
