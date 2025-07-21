<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = DB::table('provinsi')->where('nama_provinsi', 'Jawa Tengah')->first();
        // dd($data);

        DB::table('kabupaten')->insert([
            'id' => Str::uuid(),
            'nama_kabupaten' => 'Kota Semarang',
            'id_provinsi' => $data->id,
        ]);
            // foreach($data as $item){
            // }
    }
}
