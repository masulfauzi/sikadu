<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisTinggalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_tinggal')->insert([
            'id' => Str::uuid(),
            'jenis_tinggal' => 'Bersama Orang Tua'
        ]);

        DB::table('jenis_tinggal')->insert([
            'id' => Str::uuid(),
            'jenis_tinggal' => 'Kontrak'
        ]);

        DB::table('jenis_tinggal')->insert([
            'id' => Str::uuid(),
            'jenis_tinggal' => 'Bersama Wali'
        ]);
    }
}
