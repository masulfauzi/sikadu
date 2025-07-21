<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agama')->insert([
            'id' => Str::uuid(),
            'agama' => 'Islam'
        ]);

        DB::table('agama')->insert([
            'id' => Str::uuid(),
            'agama' => 'Katolik'
        ]);

        DB::table('agama')->insert([
            'id' => Str::uuid(),
            'agama' => 'Kristen'
        ]);

        DB::table('agama')->insert([
            'id' => Str::uuid(),
            'agama' => 'Buddha'
        ]);

        DB::table('agama')->insert([
            'id' => Str::uuid(),
            'agama' => 'Hindu'
        ]);

        DB::table('agama')->insert([
            'id' => Str::uuid(),
            'agama' => 'Konghucu'
        ]);
    }
}
