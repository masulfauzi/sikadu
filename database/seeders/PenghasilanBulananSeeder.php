<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenghasilanBulananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penghasilan_bulanan')->insert([
            'id' => Str::uuid(),
            'penghasilan' => 'Rp 1.000.000 - Rp 10.000.000',
            'urutan' => '1'
        ]);

        DB::table('penghasilan_bulanan')->insert([
            'id' => Str::uuid(),
            'penghasilan' => 'Rp 10.000.000 - Rp 50.000.000',
            'urutan' => '2'
        ]);

        DB::table('penghasilan_bulanan')->insert([
            'id' => Str::uuid(),
            'penghasilan' => 'Rp 50.000.000 - Rp 100.000.000',
            'urutan' => '3'
        ]);
    }
}
