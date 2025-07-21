<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sw = DB::table('siswa')->where('nama', 'Othniel')->first();
        $jp = DB::table('jenis_prestasi')->where('jenis', 'Akademik')->first(); 
        $tk = DB::table('tingkat_prestasi')->where('tingkat', 'Kota')->first();
 
        DB::table('prestasi')->insert([
            'id' => Str::uuid(),
            'id_siswa' => $sw->id,
            'nama_prestasi' => 'Juara 1 LKS Desain Grafis Tingkat Kota Semarang',
            'jenis_prestasi' => $jp->id,
            'tingkat_prestasi' => $tk->id,
            'tahun' => '2024',
            'penyelenggaraan' => 'Dinas Pendidikan Kota Semarang'
        ]);
    }
}
