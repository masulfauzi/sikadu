<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendidikan')->insert([
            'id' => Str::uuid(),
            'jenjang_pendidikan' => 'SD'
        ]);

        DB::table('pendidikan')->insert([
            'id' => Str::uuid(),
            'jenjang_pendidikan' => 'SMP'
        ]);

        DB::table('pendidikan')->insert([
            'id' => Str::uuid(),
            'jenjang_pendidikan' => 'SMA / SMK'
        ]);

        DB::table('pendidikan')->insert([
            'id' => Str::uuid(),
            'jenjang_pendidikan' => 'S1'
        ]);

        DB::table('pendidikan')->insert([
            'id' => Str::uuid(),
            'jenjang_pendidikan' => 'S2'
        ]);

        DB::table('pendidikan')->insert([
            'id' => Str::uuid(),
            'jenjang_pendidikan' => 'S3'
        ]);
    }
}
