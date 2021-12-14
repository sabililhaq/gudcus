<?php

namespace Database\Seeders;
use App\Models\Custom;


use Illuminate\Database\Seeder;

class CustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Custom::create([
            'user_id'=>'22', 
            'name'=>'Casing Iphone X', 
            'description'=>'Pelindung iphone x anda yang mudah pecah',
            'category' => 'Aksesoris',
            'city' => 'Jakarta Selatan',
            'base_price'=>'50000',
            'estimated_time'=> '3-5 Hari',
            'stock'=>'69',
            'file_path' => "/assets/img/portfolio/fullsize/1.jpg"
        ]);

        Custom::create([
            'user_id'=>'22', 
            'name'=>'Gantungan Kunci 2d', 
            'description'=>'Gantungan kunci buat anda yang suka lupa taruh kunci motor dimana',
            'category' => 'Aksesoris',
            'city' => 'Jakarta Selatan',
            'base_price'=>'30000',
            'estimated_time'=> '5-7 Hari',
            'stock'=>'10',
            'file_path' => '/assets/img/portfolio/fullsize/2.jpg'
        ]);
        
        Custom::create([
            'user_id'=>'22', 
            'name'=>'Dummy 1', 
            'description'=>'Gantungan kunci buat anda yang suka lupa taruh kunci motor dimana',
            'category' => 'Aksesoris',
            'city' => 'Jakarta Selatan',
            'base_price'=>'30000',
            'estimated_time'=> '5-7 Hari',
            'stock'=>'10',
            'file_path' => '/assets/img/portfolio/fullsize/3.jpg'
        ]);

        Custom::create([
            'user_id'=>'22', 
            'name'=>'Dummy 2', 
            'description'=>'Gantungan kunci buat anda yang suka lupa taruh kunci motor dimana',
            'category' => 'Aksesoris',
            'city' => 'Jakarta Selatan',
            'base_price'=>'30000',
            'estimated_time'=> '5-7 Hari',
            'stock'=>'10',
            'file_path' => '/assets/img/portfolio/fullsize/4.jpg'
        ]);

        Custom::create([
            'user_id'=>'22', 
            'name'=>'Dummy 3', 
            'description'=>'Gantungan kunci buat anda yang suka lupa taruh kunci motor dimana',
            'category' => 'Aksesoris',
            'city' => 'Jakarta Selatan',
            'base_price'=>'30000',
            'estimated_time'=> '5-7 Hari',
            'stock'=>'10',
            'file_path' => '/assets/img/portfolio/fullsize/5.jpg'
        ]);

        Custom::create([
            'user_id'=>'23', 
            'name'=>'Galon Gambar', 
            'description'=>'Lorem Ipsum Dolor Sit Amet',
            'category' => 'Alat Tulis Kantor',
            'city' => 'Bandung',
            'base_price'=>'3500000',
            'estimated_time'=> '3-5 Hari',
            'stock'=>'100',
            'file_path' => '/assets/img/portfolio/fullsize/6.jpg'
        ]);

    }
}
