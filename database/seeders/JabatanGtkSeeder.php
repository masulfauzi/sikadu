<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanGtkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatan_gtk')->insert([
            'id' => Str::uuid(),
            'jabatan_gtk' => 'Guru Bimbingan Konseling'  
        ]);

        DB::table('jabatan_gtk')->insert([
            'id' => Str::uuid(),
            'jabatan_gtk' => 'Guru Matematika'  
        ]);
    }
}
