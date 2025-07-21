<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlatTransportasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alat_transportasi')->insert([
            'id' => Str::uuid(),
            'transportasi' => 'Diantar Orang Tua'
        ]);

        DB::table('alat_transportasi')->insert([
            'id' => Str::uuid(),
            'transportasi' => 'Motor'
        ]);

        DB::table('alat_transportasi')->insert([
            'id' => Str::uuid(),
            'transportasi' => 'Mobil'
        ]);

        DB::table('alat_transportasi')->insert([
            'id' => Str::uuid(),
            'transportasi' => 'Transportasi Umum'
        ]);
    }
}
