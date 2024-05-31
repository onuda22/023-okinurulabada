<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_user = [
            [
                'id_role'       => 1,
                'name'          => 'Admin',
                'phone_number'  => '081234567890',
                'password'      =>  Hash::make('123456'),
                'address'       => 'Kantor'
            ],
            [
                'id_role'       => 3,
                'name'          => 'Budiman',
                'phone_number'  => '081543128892',
                'password'      => Hash::make('123456'),
                'address'       => 'Kp. Citamiang'
            ]
        ];

        User::insert($list_user);
    }
}
