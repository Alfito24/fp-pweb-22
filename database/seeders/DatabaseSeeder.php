<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Khansa',
            'phone_number'=>'082234124222',
            'email' => 'khansaalfito3456@gmail.com',
            'place_of_birth'=> 'Surabaya',
            'nik'=>'3578232412010001',
            'unit_name'=>'DPTSI',
            'registration_number'=>'12331',
            'group_id'=>'1',
            'sex'=>'M',
            'religion'=>'Islam',
            'blood_type'=>'O',
            'address'=>'Surabaya',
            'role'=>'student',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'first_name' => 'Bashara',
            'phone_number'=>'082234124223',
            'email' => 'basharaaina@gmail.com',
            'place_of_birth'=> 'Surabaya',
            'nik'=>'3578232412010002',
            'unit_name'=>'DPTSI',
            'registration_number'=>'12332',
            'group_id'=>'1',
            'sex'=>'M',
            'religion'=>'Islam',
            'blood_type'=>'O',
            'address'=>'Surabaya',
            'role'=>'admin',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'first_name' => 'Fiqri',
            'phone_number'=>'082234124224',
            'email' => 'fiqri@gmail.com',
            'place_of_birth'=> 'Surabaya',
            'nik'=>'3578232412010003',
            'unit_name'=>'DPTSI',
            'registration_number'=>'12333',
            'group_id'=>'1',
            'sex'=>'M',
            'religion'=>'Islam',
            'blood_type'=>'O',
            'address'=>'Surabaya',
            'role'=>'lecture',
            'password' => bcrypt('12345678'),
        ]);
    }
}
