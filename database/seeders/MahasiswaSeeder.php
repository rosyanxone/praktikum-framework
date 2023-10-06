<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = [
            [
            'id' => '1',
            'nim' => '12345678',
            'nama' => 'Kamisato',
            'kelas' => 'IFB',
            'angkatan' => '2021',
            ],
            [
            'id' => '2',
            'nim' => '12674782',
            'nama' => 'Kim Jon Unch',
            'kelas' => 'IFA',
            'angkatan' => '2021',
            ]
            ];
            foreach ($mahasiswas as $mahasiswa){
            Mahasiswa::create([
            'id' => $mahasiswa['id'],
            'nim' => $mahasiswa['nim'],
            'nama' => $mahasiswa['nama'],
            'kelas' => $mahasiswa['kelas'],
            'angkatan' => $mahasiswa['angkatan'],
            ]);
            }
    }
}
