<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = DB::table('kabupaten')->where('nama_kabupaten', 'Kota Semarang')->first();

        DB::table('kecamatan')->insert([
            'id' => Str::uuid(),
            'nama_kecamatan' => 'Gajahmungkur',
            'id_kabupaten' => $data->id,
        ]);
    }
}
