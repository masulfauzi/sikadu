<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NamaWajibPajakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gr = DB::table('guru')->where('nama', 'Tama')->first();
        DB::table('nama_wajib_pajak')->insert([
            'id' => Str::uuid(),
            'nama' => 'Tama',
            'id_guru' => $gr->id,
        ]);
    }
}
