<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_users = [
            [
                'user_id' => 1,
                'tanggal_lahir' => Carbon::create('1999','01','01'),
                'alamat' => 'Jl. Tangkuban Perahu No.19',
                'jenis_kelamin' => 'Pria',
                'nomor_telpon' => '1111111',
                'role' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'tanggal_lahir' => Carbon::create('2000','01','01'),
                'alamat' => 'Jl. Tangkuban Perahu No.20',
                'jenis_kelamin' => 'Wanita',
                'nomor_telpon' => '088888888888',
                'role' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'tanggal_lahir' => Carbon::create('1985','01','01'),
                'alamat' => 'Jl. Tangkuban Hati No.19',
                'jenis_kelamin' => 'Pria',
                'nomor_telpon' => '1111111',
                'role' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DetailUser::insert($detail_users);
    }
}
