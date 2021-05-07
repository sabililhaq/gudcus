<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(['name' => 'admin', 'password' => bcrypt('admin'), 'email' => 'admin@admin.com', 'role_id' => '1', 'address' => 'Server', 'phone_number' => '000000000000']);

    }
}