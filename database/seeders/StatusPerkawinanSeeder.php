<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusPerkawinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_perkawinan') -> insert([
            'id' => Str::uuid(),
            'status' => 'Sudah Menikah'
        ]);

        DB::table('status_perkawinan') -> insert([
            'id' => Str::uuid(),
            'status' => 'Belum Menikah'
        ]);
    }
}
