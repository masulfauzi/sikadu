<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataWaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sw = DB::table('siswa')->where('nama', 'Othniel')->first();
        $pk = DB::table('pekerjaan')->where('pekerjaan', 'Swasta')->first();
        $pd = DB::table('pendidikan')->where('jenjang_pendidikan', 'S1')->first();
        $ph = DB::table('penghasilan_bulanan')->where('urutan', '1')->first();

        DB::table('data_wali')->insert([
            'id' => Str::uuid(),
            'id_siswa' => $sw->id,
            'nama_wali' => 'Naratama',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '1988-01-28',
            'pekerjaan' => $pk->id,
            'pendidikan' => $pd->id,
            'penghasilan_bulanan' => $ph->id,
        ]);
    }
}
