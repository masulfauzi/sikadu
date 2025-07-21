<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenjang')->insert([
            'id' => Str::uuid(),
            'jenjang' => 'SD',
        ]);

        DB::table('jenjang')->insert([
             'id' => Str::uuid(),
            'jenjang' => 'SMP',
        ]);

        DB::table('jenjang')->insert([
             'id' => Str::uuid(),
            'jenjang' => 'SMA',
        ]);

        DB::table('jenjang')->insert([
             'id' => Str::uuid(),
            'jenjang' => 'SMK',
        ]);
    }
}
