<?php

namespace Database\Seeders;

use App\Models\Persyaratan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersyaratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persyaratan = [
            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Ijazah',
                'layanan_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Akte Klahiran',
                'layanan_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga Lama / Orang Tua',
                'layanan_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP Orang Tua',
                'layanan_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Surat Dari Rumah Sakit / Bidan',
                'layanan_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama_syarat' => 'Buku Nikah Orang Tua',
                'layanan_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Ijazah Terakhir',
                'layanan_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama_syarat' => 'Akte Kelahiran',
                'layanan_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP Wanita',
                'layanan_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP Pria',
                'layanan_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga Wanita',
                'layanan_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga Pria',
                'layanan_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama_syarat' => 'Akta Cerai (Kosongkan jika tidak ada)',
                'layanan_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Surat Kematian',
                'layanan_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP Ahli Waris',
                'layanan_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga Ahli Waris',
                'layanan_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama_syarat' => 'KTP Pemilik Tanah',
                'layanan_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Tanda Bukti Lunas PBB',
                'layanan_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Sertifikat Tanah',
                'layanan_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Surat Keterangan Dokter',
                'layanan_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Dokumen Beda Data',
                'layanan_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'KTP',
                'layanan_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_syarat' => 'Kartu Keluarga',
                'layanan_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Persyaratan::insert($persyaratan);

    }
}
