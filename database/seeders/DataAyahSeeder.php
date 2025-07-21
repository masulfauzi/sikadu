<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataAyahSeeder extends Seeder
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

        DB::table('data_ayah')->insert([
            'id' => Str::uuid(),
            'id_siswa' => $sw->id,
            'nama_ayah' => 'Robert Mellema',
            'tempat_lahir' => 'Wonosobo',
            'tgl_lahir' => '1985-03-21',
            'pekerjaan' => $pk->id,
            'pendidikan' => $pd->id,
            'penghasilan_bulanan' => $ph->id,
        ]);
    }
}
