<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataPasanganGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gr = DB::table('guru')->where('nama', 'Tama')->first();
        $pk = DB::table('pekerjaan')->where('pekerjaan', 'Swasta')->first();
        DB::table('data_pasangan_guru')->insert([
            'id' => Str::uuid(),
            'nama' => 'Bunga',
            'jenis_kelamin' => 'p',
            'id_guru' => $gr->id,
            'pekerjaan' => $pk->id,
        ]);
    }
}
