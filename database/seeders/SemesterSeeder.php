<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('semester')->insert([
            'id' => Str::uuid(),
            'semester' => 'Ganjil',
            'urutan' => '1',
            'is_aktif' => '0',
            'tgl_mulai' => '2025-07-21',
            'tgl_selesai' => '2025-01-21',
            'kode_semester' => 'S1'
        ]);

        DB::table('semester')->insert([
            'id' => Str::uuid(),
            'semester' => 'Genap',
            'urutan' => '2',
            'is_aktif' => '0',
            'tgl_mulai' => '2025-01-25',
            'tgl_selesai' => '2025-07-25',
            'kode_semester' => 'S2'
        ]);
    }
}
