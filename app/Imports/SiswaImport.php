<?php

namespace App\Imports;

use Carbon\Carbon;
use ErrorException;
use Maatwebsite\Excel\Row;
use App\Modules\Desa\Models\Desa;
use App\Modules\Agama\Models\Agama;
use App\Modules\Siswa\Models\Siswa;
use App\Modules\Sekolah\Models\Sekolah;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadSheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Modules\SekolahAsal\Models\SekolahAsal;
use App\Modules\JenisTinggal\Models\JenisTinggal;
use App\Modules\AlatTransportasi\Models\AlatTransportasi;


class SiswaImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Siswa([
           'nisn'     => $row[0],
           'nis'    => $row[1],
           'nama'    => $row[2],
           'jenis_kelamin'    => $row[3],
           'nik'    => $row[4],
           'id_sekolah_asal'    => SekolahAsal::where('sekolah', $row[5])->value('id'),
           'id_sekolah'    => Sekolah::where('nama_sekolah', $row[6])->value('id'),
           'tempat_lahir'    => $row[7],
           'tgl_lahir'    => Carbon::parse(Date::excelToDateTimeObject($row[8]))->format('Y-m-d'),
           'id_agama'    => Agama::where('agama', $row[9])->value('id'),
           'id_desa'    => Desa::where('nama_desa', $row[10])->value('id'),
           'alamat'    => $row[11],
           'id_alat_transportasi'    => AlatTransportasi::where('transportasi', $row[12])->value('id'),
           'id_jenis_tinggal'    => JenisTinggal::where('jenis_tinggal', $row[13])->value('id'),
           'no_telp'    => $row[14],
           'email'    => $row[15],
           'no_registrasi_akta_lahir'    => $row[16],
        ]);
    }
    
    public function startRow(): int
    {
        return 2;
    }

//     public function transformDate($value, $format = 'd/m/Y')
// {
//     try {
//         return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
//     } catch (\ErrorException $e) {
//         return \Carbon\Carbon::createFromFormat($format, $value);
//     }
// }

}