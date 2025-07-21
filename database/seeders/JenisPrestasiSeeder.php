<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisPrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_prestasi')->insert([
            'id' => Str::uuid(),
            'jenis' => 'Akademik'
        ]);

        DB::table('jenis_prestasi')->insert([
            'id' => Str::uuid(),
            'jenis' => 'Non Akademik'
        ]);
    }
}
