<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = DB::table('jenjang')->where('jenjang', 'SMK')->first();

        DB::table('sekolah')->insert([
            'id' => Str::uuid(),
            'npsn' => '0301',
            'nama_sekolah' => 'SMK Negeri 2 Semarang',
            'alamat' => 'Jl Dr Cipto',
            'no_telp' => '0851776',
            'id_jenjang' => $data->id,
        ]);
    }
}
