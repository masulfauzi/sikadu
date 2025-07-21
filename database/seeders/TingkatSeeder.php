<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TingkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tingkat')->insert([
            'id' => Str::uuid(),
            'tingkat' => 'X'
        ]);

        DB::table('tingkat')->insert([
            'id' => Str::uuid(),
            'tingkat' => 'XI'
        ]);

        DB::table('tingkat')->insert([
            'id' => Str::uuid(),
            'tingkat' => 'XII'
        ]);
    }
}
