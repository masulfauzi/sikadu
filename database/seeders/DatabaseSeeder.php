<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(JenjangSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(TingkatSeeder::class);
        $this->call(JenisPrestasiSeeder::class);
        $this->call(StatusPerkawinanSeeder::class);
        $this->call(StatusKepegawaianSeeder::class);
        $this->call(TingkatPrestasiSeeder::class);
        $this->call(PekerjaanSeeder::class);
        $this->call(JenisTinggalSeeder::class);
        $this->call(AlatTransportasiSeeder::class);
        $this->call(AgamaSeeder::class);
        $this->call(SekolahAsalSeeder::class);
        $this->call(PendidikanSeeder::class);
        $this->call(PenghasilanBulananSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(JenisGtkSeeder::class);
        $this->call(JabatanGtkSeeder::class);
        $this->call(ProvinsiSeeder::class);
        $this->call(KabupatenSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(DesaSeeder::class);
        $this->call(SekolahSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(DataAyahSeeder::class);
        $this->call(DataIbuSeeder::class);
        $this->call(DataWaliSeeder::class);
        $this->call(PrestasiSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(NamaWajibPajakSeeder::class);
        $this->call(DataPasanganGuruSeeder::class);
        $this->call(DataIbuSeeder::class);
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
