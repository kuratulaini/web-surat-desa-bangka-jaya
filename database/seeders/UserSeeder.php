<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'nik' => '123',
                'email' => 'admin@desa.go.id',
                'password' => Hash::make('12345678'),
                'profile_photo_path' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kuratul Aini',
                'nik' => '321',
                'email' => 'kuratul.aini@gmail.go.id',
                'password' => Hash::make('12345678'),
                'profile_photo_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLVjCaJYjH7tDTv-l5PSlqxye7t4g8OXvf9LoDOrv4WQ&s',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Agusri',
                'nik' => '111',
                'email' => 'geuchikbangkajaya@gmail.go.id',
                'password' => Hash::make('12345678'),
                'profile_photo_path' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        User::insert($users);
    }
}
