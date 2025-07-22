<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KepsekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sk = DB::table('sekolah')->where('nama_sekolah', 'SMK Negeri 2 Semarang')->first();
        DB::table('kepsek')->insert([
            'id' => Str::uuid(),
            'nama' => 'Warno',
            'gelar_depan' => 'Dr.',
            'gelar_belakang' => 'S.H.',
            'id_sekolah' => $sk->id,
            'tgl_mulai' => '2020-08-21',
            'tgl_selesai' => '2025-08-23',
            'is_active' => 'y',
        ]);
    }
}
