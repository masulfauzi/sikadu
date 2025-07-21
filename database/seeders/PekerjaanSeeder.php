<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pekerjaan')->insert([
            'id' => Str::uuid(),
            'pekerjaan' => 'PNS'
        ]);

        DB::table('pekerjaan')->insert([
            'id' => Str::uuid(),
            'pekerjaan' => 'Swasta'
        ]);

        DB::table('pekerjaan')->insert([
            'id' => Str::uuid(),
            'pekerjaan' => 'TNI'
        ]);
    }
}
