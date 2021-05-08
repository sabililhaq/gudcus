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
        //
        User::create(['name' => 'Admin', 'password' => bcrypt('admin'), 'email' => 'admin@admin.com', 'role_id' => '1', 'address' => 'Rumahnya Admin', 'phone_number' => '000000000001']);
        User::create(['name' => 'Kuli', 'password' => bcrypt('kuli'), 'email' => 'kuli@kuli.com', 'role_id' => '2', 'address' => 'Rumahnya Kuli', 'phone_number' => '000000000002']);
        User::create(['name' => 'Mandor', 'password' => bcrypt('mandor'), 'email' => 'mandor@mandor.com', 'role_id' => '3', 'address' => 'Rumahnya Mandor', 'phone_number' => '000000000003']);

    }
}
