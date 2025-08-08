<?php

namespace App\Modules\Siswa\Models;

use App\Helpers\UsesUuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Modules\Sekolah\Models\Sekolah;
use App\Modules\Desa\Models\Desa;


class Siswa extends Model
{
	use SoftDeletes;
	use UsesUuid;

	protected $dates      = ['deleted_at'];
	protected $table      = 'siswa';
	protected $fillable   = ['*'];	

	public function sekolah(){
		return $this->belongsTo(Sekolah::class,"id_sekolah","id");
	}
public function desa(){
		return $this->belongsTo(Desa::class,"id_desa","id");
	}

}
