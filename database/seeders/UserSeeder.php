<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        User::create(['name' => 'Admin', 'password' => bcrypt('admin'), 'email' => 'admin@admin.com', 'role_id' => '1', 'address' => 'Rumahnya Admin', 'phone_number' => '000000000001']);
        
        //Kuli
        User::create(['name' => 'Kuli', 'password' => bcrypt('kuli'), 'email' => 'kuli@kuli.com', 'role_id' => '2', 'address' => 'Rumahnya Kuli', 'phone_number' => '000000000002', 'kuli_availability' => '0', 'kuli_specialties' => 'Besi', 'experience' => 'Berpengalaman mengerjakan hal berbau besi']);
        User::create(['name' => 'Ahmad Kuliawan', 'password' => bcrypt('kuli1'), 'email' => 'kuli1@kuli.com', 'role_id' => '2', 'address' => 'Jalan Masih Ada no 420, Jember Utara', 'phone_number' => '000000000003', 'kuli_availability' => '1', 'kuli_specialties' => 'Cor', 'experience' => 'Berpengalaman engecor dan menjadi tumbal proyek']);
        User::create(['name' => 'Fulan', 'password' => bcrypt('kuli2'), 'email' => 'kuli2@kuli.com', 'role_id' => '2', 'address' => 'Jalan Rambutan no 123, Queensland', 'phone_number' => '000000000004', 'kuli_availability' => '1', 'kuli_specialties' => 'Besi, Mekanik', 'experience' => 'Berpengalaman mengerjakan hal berbau besi dan mesin']);
        User::create(['name' => 'Dummy', 'password' => bcrypt('kuli3'), 'email' => 'kuli3@kuli.com', 'role_id' => '2', 'address' => 'Perumahan Elitis no 11, Arkansas', 'phone_number' => '000000000005', 'kuli_availability' => '1', 'kuli_specialties' => 'Kayu, Besi', 'experience' => 'Berpengalaman mengerjakan hal berbau kayu']);
        
        //Mandor
        User::create(['name' => 'Mandor', 'password' => bcrypt('mandor'), 'email' => 'mandor@mandor.com', 'role_id' => '3', 'address' => 'Rumahnya Mandor', 'phone_number' => '000000000003']);
        User::create(['name' => 'David Daud', 'password' => bcrypt('mandor1'), 'email' => 'mandor1@mandor.com', 'role_id' => '3', 'address' => 'Perumahan Marjinal no 720, Jember Utara', 'phone_number' => '000000000004']);

    }
}
