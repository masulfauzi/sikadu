<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TingkatPrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tingkat_prestasi') -> insert([
            'id' => Str::uuid(),
            'tingkat' => 'Kota'
        ]);

        DB::table('tingkat_prestasi') -> insert([
            'id' => Str::uuid(),
            'tingkat' => 'Provinsi'
        ]);

        DB::table('tingkat_prestasi') -> insert([
            'id' => Str::uuid(),
            'tingkat' => 'Nasional'
        ]);

        DB::table('tingkat_prestasi') -> insert([
            'id' => Str::uuid(),
            'tingkat' => 'Internasional'
        ]);
    }
}
