<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = DB::table('kecamatan')->where('nama_kecamatan', 'Gajahmungkur')->first();

        DB::table('desa')->insert([
            'id' => Str::uuid(),
            'nama_desa' => 'Kalilangse',
            'id_kecamatan' => $data->id,
        ]);
    }
}
