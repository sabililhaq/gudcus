<?php

namespace Database\Seeders;
use App\Models\Proyek;

use Illuminate\Database\Seeder;

class ProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Proyek::create(['user_id' => '6', 'name' => 'Kolam Renang Hotel Cisangkuy', 'address' => 'Jalan Cisangkuy no. 69, Jember Utara', 'detail' => 'Dibutuhkan kuli spesialis kolam renang yang paham tentang cor dan kayu, Gaji tetap Rp3.000.000', 'specialties_needed' => 'Cor, Kayu']);
        Proyek::create(['user_id' => '6', 'name' => 'Gedung WTC', 'address' => 'Jalan WTC no. 12, Jember Utara', 'detail' => 'Kuli akan ditempatkan pada bagian pemasangan fondasi, Gaji kisaran Rp750.000 - Rp1.000.000', 'specialties_needed' => 'Beton, Baja Ringan']);
        Proyek::create(['user_id' => '7', 'name' => 'Proyek Mangkrak', 'address' => 'Perumahan Gaje no. 63, Arkansas', 'detail' => 'Kuli akan ditempatkan pada bagian mekanik proyek, Gaji tetap Rp 2.500.000', 'specialties_needed' => 'Mekanik']);
    }
}
