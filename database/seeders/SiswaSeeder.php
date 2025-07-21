<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sa = DB::table('sekolah_asal')->where('sekolah', 'SMP Yoannes XXIII')->first();
        $sk = DB::table('sekolah')->where('nama_sekolah', 'SMK Negeri 2 Semarang')->first();
        $ag = DB::table('agama')->where('agama', 'Kristen')->first();
        $ds = DB::table('desa')->where('nama_desa', 'Kalilangse')->first();
        $at = DB::table('alat_transportasi')->where('transportasi', 'Motor')->first();
        $jt = DB::table('jenis_tinggal')->where('jenis_tinggal', 'Bersama Orang Tua')->first();

        DB::table('siswa')->insert([
            'id' => Str::uuid(),
            'nisn' => '130920',
            'nis' => '140208',
            'nama' => 'Othniel',
            'jenis_kelamin' => 'l',
            'nik' => '45678',
            'sekolah_asal' => $sa->id,
            'id_sekolah' => $sk->id,
            'tempat_lahir' => 'Semarang',
            'tgl_lahir' => '2008-03-21',
            'agama' => $ag->id,
            'id_desa' => $ds->id,
            'alamat' => 'Kampung Kalilangse RT 03 RW 05',
            'alat_transportasi' => $at->id,
            'jenis_tinggal' => $jt->id,
            'no_telp' => '0851432319',
            'email' => 'ontel14@gmail.com',
            'no_registrasi_akta_lahir' => '13029',
        ]);
    }
}
