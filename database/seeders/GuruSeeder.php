<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ag = DB::table('agama')->where('agama', 'Kristen')->first();
        $ds = DB::table('desa')->where('nama_desa', 'Kalilangse')->first();
        $sp = DB::table('status_perkawinan')->where('status', 'Sudah Menikah')->first();
        $sk = DB::table('sekolah')->where('nama_sekolah', 'SMK Negeri 2 Semarang')->first();
        $jegtk = DB::table('jenis_gtk')->where('jenis_gtk', 'Guru')->first();
        $jagtk = DB::table('jabatan_gtk')->where('jabatan_gtk', 'Guru Matematika')->first();
        $skp = DB::table('status_kepegawaian')->where('status', 'PNS')->first();

        DB::table('guru')->insert([
            'id' => Str::uuid(),
            'nama' => 'Tama',
            'gelar_depan' => 'Dr.',
            'gelar_belakang' => 'S.H.',
            'nik' => '3564781',
            'jenis_kelamin' => 'l',
            'tempat_lahir' => 'Semarang',
            'tgl_lahir' => '1979-07-21',
            'id_desa' => $ds->id,
            'alamat' => 'Jl Kangkung',
            'agama' => $ag->id,
            'status_perkawinan' => $sp->id,
            'id_sekolah' => $sk->id,
            'npwp' => '156273',
            'jenis_gtk' => $jegtk->id,
            'jabatan_gtk' => $jagtk->id,
            'nuptk' => '26354',
            'status_kepegawaian' => $skp->id,
            'nip' => '8293',
            'email' => 'naratama23@gmail.com'
        ]);
    }
}
