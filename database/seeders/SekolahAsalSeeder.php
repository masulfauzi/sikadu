<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SekolahAsalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sekolah_asal')->insert([
            'id' => Str::uuid(),
            'sekolah' => 'SMP Yoannes XXIII',
            'npsn' => '3107'
        ]);

        DB::table('sekolah_asal')->insert([
            'id' => Str::uuid(),
            'sekolah' => 'SMP Negeri 5 Semarang',
            'npsn' => '1402'
        ]);
    }
}
