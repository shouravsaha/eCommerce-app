<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $password = Hash::make('123456');

        $adminRecords = [
        'name' => 'Admin',
        'type' => 'admin',
        'mobile' => '01772159279',
        'email' => 'admin@gmail.com',
        'password' => $password,
        'image' => '',
        'status' => '1',
        ];
        Admin::insert($adminRecords);
    }
}
