<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tk = DB::table('tingkat')->where('tingkat', 'X')->first();
        $jr = DB::table('jurusan')->where('nama_pendek', 'PPLG')->first();

        DB::table('kelas')->insert([
            'id' => Str::uuid(),
            'kelas' => 'X PPLG 1',
            'id_tingkat' => $tk->id,
            'id_jurusan' => $jr->id,
            'kode' => 'XP1'
        ]);
    }
}
