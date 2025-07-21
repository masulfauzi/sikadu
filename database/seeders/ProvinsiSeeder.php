<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinsi')->insert([
            'id' => Str::uuid(),
            'nama_provinsi' => 'Jawa Tengah'
        ]);

        DB::table('provinsi')->insert([
            'id' => Str::uuid(),
            'nama_provinsi' => 'Jawa Timur'
        ]);

        DB::table('provinsi')->insert([
            'id' => Str::uuid(),
            'nama_provinsi' => 'Jawa Barat'
        ]);
    }
}
