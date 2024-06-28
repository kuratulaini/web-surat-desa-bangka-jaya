<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanan = [
            [
                'nama_layanan' => 'Surat Pengantar Dukcapil Pembuatan KTP',
                'perkiraan_selesai' => '2',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Pengantar Dukcapil Pembuatan KK',
                'perkiraan_selesai' => '2',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Pengantar Akta Kelahiran',
                'perkiraan_selesai' => '2',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Pengantar SKCK',
                'perkiraan_selesai' => '3',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Pengantar Nikah',
                'perkiraan_selesai' => '2',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Keterangan Tidak Mampu',
                'perkiraan_selesai' => '2',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Keterangan Izin Usaha',
                'perkiraan_selesai' => '1',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Keterangan Ahli Waris',
                'perkiraan_selesai' => '2',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Keterangan Kepimilikan Tanah',
                'perkiraan_selesai' => '3',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Keterangan Kematian',
                'perkiraan_selesai' => '2',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Keterangan Domisili',
                'perkiraan_selesai' => '1',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Keterangan Beda Data',
                'perkiraan_selesai' => '2',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_layanan' => 'Surat Keterangan Pindah',
                'perkiraan_selesai' => '2',
                'photos' => 'https://collectivehub.com/wp-content/uploads/2017/11/Stocksy_txp5b5a56287Iw000_Small_480271-750x500.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        Layanan::insert($layanan);
    }
}
