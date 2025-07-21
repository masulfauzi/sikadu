<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jurusan')->insert([
            'id' => Str::uuid(),
            'jurusan' => 'Pengembangan Perangkat Lunak dan Gim',
            'nama_pendek' => 'PPLG'
        ]);

        DB::table('jurusan')->insert([
            'id' => Str::uuid(),
            'jurusan' => 'Pemasaran',
            'nama_pendek' => 'PM'
        ]);

        DB::table('jurusan')->insert([
            'id' => Str::uuid(),
            'jurusan' => 'Pariwisata',
            'nama_pendek' => 'ULP'
        ]);

        DB::table('jurusan')->insert([
            'id' => Str::uuid(),
            'jurusan' => 'Akutansi',
            'nama_pendek' => 'AKL'
        ]);

        DB::table('jurusan')->insert([
            'id' => Str::uuid(),
            'jurusan' => 'Manajemen Perkantoran',
            'nama_pendek' => 'MPLB'
        ]);
    }
}
