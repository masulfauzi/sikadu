<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataIbuGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gr = DB::table('guru')->where('nama', 'Tama')->first();
        DB::table('data_ibu_guru')->insert([
            'id' => Str::uuid(),
            'nama_ibu' => 'Sujinem',
            'id_guru' => $gr->id,
        ]);
    }
}
