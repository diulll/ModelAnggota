<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::create([
            'nomor_anggota' => 'A001',
            'nama' => 'Saya',
            'alamat' => 'Jalan Merdeka No. 123, Jakarta Pusat',
            'email' => 'saya@example.com',
            'tanggal_lahir' => '1990-05-15',
        ]);
    }
}
