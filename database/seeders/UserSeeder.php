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
        User::create(['name' => 'Admin', 'password' => bcrypt('admin'), 'email' => 'admin@admin.com', 'role_id' => '1', 'address' => 'Rumahnya Admin', 'phone_number' => '085750479798']);
        
        //Kuli
        User::create(['name' => 'Kuli', 'password' => bcrypt('kuli'), 'email' => 'kuli@kuli.com', 'role_id' => '2', 'address' => 'Rumahnya Kuli', 'phone_number' => '080265228878', 'kuli_availability' => '0', 'kuli_specialties' => 'Besi', 'experience' => 'Pernah mengerjakan proyek besar sebagai tukang pasang besi dan baja ringan pada proyek besar']);
        User::create(['name' => 'Ahmad Kuliawan', 'password' => bcrypt('kuli1'), 'email' => 'kuli1@kuli.com', 'role_id' => '2', 'address' => 'Jalan Masih Ada no 420, Jember Utara', 'phone_number' => '080272494794', 'kuli_availability' => '1', 'kuli_specialties' => 'Cor', 'experience' => 'Berpengalaman ngecor dan menjadi tumbal proyek']);
        User::create(['name' => 'Fulan', 'password' => bcrypt('kuli2'), 'email' => 'kuli2@kuli.com', 'role_id' => '2', 'address' => 'Jalan Rambutan no 123, Queensland', 'phone_number' => '084154858211', 'kuli_availability' => '1', 'kuli_specialties' => 'Besi, Mekanik', 'experience' => 'Saya jago di alat dan mesin']);
        User::create(['name' => 'Vega Hakim', 'password' => bcrypt('kuli3'), 'email' => 'kuli3@kuli.com', 'role_id' => '2', 'address' => 'Perumahan Elitis no 11, Arkansas', 'phone_number' => '089279639128', 'kuli_availability' => '1', 'kuli_specialties' => 'Kayu, Besi', 'experience' => 'Berpengalaman mengerjakan hal berbau kayu']);
        User::create(['name' => 'Marsito Nardi Maulana', 'password' => bcrypt('kuli4'), 'email' => 'kuli4@kuli.com', 'role_id' => '2', 'address' => 'Psr. Aceh No. 127, Kendari 19820, SumBar', 'phone_number' => '081129549083', 'kuli_availability' => '1', 'kuli_specialties' => 'Kayu, Listrik', 'experience' => 'Berpengalaman mengerjakan hal berbau Aspal']);
        User::create(['name' => 'Dagel Hidayanto', 'password' => bcrypt('kuli5'), 'email' => 'kuli5@kuli.com', 'role_id' => '2', 'address' => 'Gg. Mulyadi No. 529, Pekalongan 80808, SulUt', 'phone_number' => '089581581949', 'kuli_availability' => '1', 'kuli_specialties' => 'Keramik, Tembok', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Gara Luluh Dabukke', 'password' => bcrypt('kuli6'), 'email' => 'kuli6@kuli.com', 'role_id' => '2', 'address' => 'Gg. Panjaitan No. 133, Parepare 15408, Lampung', 'phone_number' => '082869525140', 'kuli_availability' => '1', 'kuli_specialties' => 'Kayu', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Dartono Hutagalung', 'password' => bcrypt('kuli7'), 'email' => 'kuli7@kuli.com', 'role_id' => '2', 'address' => 'Jln. Cokroaminoto No. 76, Malang 39623, SulTeng', 'phone_number' => '086972021587', 'kuli_availability' => '1', 'kuli_specialties' => 'Kayu, Mekanik', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Argono Nasab Kusumo', 'password' => bcrypt('kuli8'), 'email' => 'kuli8@kuli.com', 'role_id' => '2', 'address' => 'Gg. Cemara No. 119, Sungai Penuh 79177, Bengkulu', 'phone_number' => '085232597482', 'kuli_availability' => '1', 'kuli_specialties' => 'Besi, Baja Ringan', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Kambali Sihombing', 'password' => bcrypt('kuli9'), 'email' => 'kuli9@kuli.com', 'role_id' => '2', 'address' => 'Gg. Zamrud No. 680, Binjai 25097, SulTeng', 'phone_number' => '084939707088', 'kuli_availability' => '1', 'kuli_specialties' => 'Baja Ringan', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Jaiman Sihombing', 'password' => bcrypt('kuli10'), 'email' => 'kuli10@kuli.com', 'role_id' => '2', 'address' => 'Jr. Bakaru No. 5, Tangerang 94272, Lampung', 'phone_number' => '080688699078', 'kuli_availability' => '1', 'kuli_specialties' => 'Ngaduk Semen', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Prabu Kurniawan', 'password' => bcrypt('kuli11'), 'email' => 'kuli11@kuli.com', 'role_id' => '2', 'address' => 'Jr. Baranangsiang No. 50, Sungai Penuh 73705, KalUt', 'phone_number' => '084858713560', 'kuli_availability' => '1', 'kuli_specialties' => 'Tumbal Proyek', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Hardi Januar', 'password' => bcrypt('kuli12'), 'email' => 'kuli12@kuli.com', 'role_id' => '2', 'address' => 'Dk. Uluwatu No. 754, Palopo 64394, SulBar', 'phone_number' => '080119297328', 'kuli_availability' => '1', 'kuli_specialties' => 'Cor, Genteng', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Panji Wage Dongoran', 'password' => bcrypt('kuli13'), 'email' => 'kuli13@kuli.com', 'role_id' => '2', 'address' => 'Gg. Setiabudhi No. 816, Palangka Raya 91562, JaTim', 'phone_number' => '083970118088', 'kuli_availability' => '0', 'kuli_specialties' => 'Genteng', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Irsad Wibowo', 'password' => bcrypt('kuli14'), 'email' => 'kuli14@kuli.com', 'role_id' => '2', 'address' => 'Gg. Raden Saleh No. 323, Tanjungbalai 19880, SumSel', 'phone_number' => '088978520441', 'kuli_availability' => '1', 'kuli_specialties' => 'Genteng', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Harja Hutasoit', 'password' => bcrypt('kuli15'), 'email' => 'kuli15@kuli.com', 'role_id' => '2', 'address' => 'Ds. K.H. Wahid Hasyim (Kopo) No. 461, Pangkal Pinang 46309, KepR', 'phone_number' => '087960703507', 'kuli_availability' => '0', 'kuli_specialties' => 'Ngopi', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Emas Pratama', 'password' => bcrypt('kuli16'), 'email' => 'kuli16@kuli.com', 'role_id' => '2', 'address' => 'Kpg. Pasirkoja No. 323, Mojokerto 29220, SulUt', 'phone_number' => '088179717613', 'kuli_availability' => '1', 'kuli_specialties' => 'Cor, Nembok', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Mustofa Maheswara', 'password' => bcrypt('kuli17'), 'email' => 'kuli17@kuli.com', 'role_id' => '2', 'address' => 'Jln. Sugiyopranoto No. 575, Samarinda 11573, KalBar', 'phone_number' => '088210720495', 'kuli_availability' => '0', 'kuli_specialties' => 'Genteng', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Fredi Mencurry', 'password' => bcrypt('kuli18'), 'email' => 'kuli18@kuli.com', 'role_id' => '2', 'address' => 'Psr. PHH. Mustofa No. 96, Tanjungbalai 76708, Jambi', 'phone_number' => '085553820811', 'kuli_availability' => '1', 'kuli_specialties' => 'Besi', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        User::create(['name' => 'Wawan Mandala', 'password' => bcrypt('kuli19'), 'email' => 'kuli19@kuli.com', 'role_id' => '2', 'address' => 'Gg. R.E. Martadinata No. 553, Administrasi Jakarta Utara 49410, NTB', 'phone_number' => '081591537440', 'kuli_availability' => '1', 'kuli_specialties' => 'Besi', 'experience' => '*Ini adalah pengalaman nguli sebagai portfolio kuli']);
        
        //Mandor
        User::create(['name' => 'Mandor', 'password' => bcrypt('mandor'), 'email' => 'mandor@mandor.com', 'role_id' => '3', 'address' => 'Rumahnya Mandor', 'phone_number' => '089603098514']);
        User::create(['name' => 'David Daud', 'password' => bcrypt('mandor1'), 'email' => 'mandor1@mandor.com', 'role_id' => '3', 'address' => 'Perumahan Marjinal no 720, Jember Utara', 'phone_number' => '083091160286']);
        User::create(['name' => 'Saadat Cakrabirawa Prayoga S.Pd', 'password' => bcrypt('mandor2'), 'email' => 'mandor2@mandor.com', 'role_id' => '3', 'address' => 'Jr. Basoka Raya No. 110, Bekasi 79141, KepR', 'phone_number' => '085484386343']);
        User::create(['name' => 'Murti Asmuni Adriansyah M.Pd', 'password' => bcrypt('mandor3'), 'email' => 'mandor3@mandor.com', 'role_id' => '3', 'address' => 'Jr. Suryo No. 285, Sabang 74441, PapBar', 'phone_number' => '084210923132']);
        User::create(['name' => 'Wakiman Hutagalung', 'password' => bcrypt('mandor4'), 'email' => 'mandor4@mandor.com', 'role_id' => '3', 'address' => 'Jln. Abdul Rahmat No. 779, Pontianak 64402, KalTim', 'phone_number' => '086348649061']);


    }
}
