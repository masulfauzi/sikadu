<?php
namespace App\Modules\Siswa\Controllers;

use Form;
use App\Helpers\Logger;
use Illuminate\Http\Request;
use App\Modules\Log\Models\Log;
use App\Modules\Siswa\Models\Siswa;
use App\Modules\SekolahAsal\Models\SekolahAsal;
use App\Modules\Sekolah\Models\Sekolah;
use App\Modules\Agama\Models\Agama;
use App\Modules\Desa\Models\Desa;
use App\Modules\AlatTransportasi\Models\AlatTransportasi;
use App\Modules\JenisTinggal\Models\JenisTinggal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
	use Logger;
	protected $log;
	protected $title = "Siswa";
	
	public function __construct(Log $log)
	{
		$this->log = $log;
	}

	public function index(Request $request)
	{
		$query = Siswa::query();
		if($request->has('search')){
			$search = $request->get('search');
			// $query->where('name', 'like', "%$search%");
		}
		$data['data'] = $query->paginate(10)->withQueryString();

		$this->log($request, 'melihat halaman manajemen data '.$this->title);
		return view('Siswa::siswa', array_merge($data, ['title' => $this->title]));
	}

	public function create(Request $request)
	{
		$ref_sekolah_asal = SekolahAsal::all()->pluck('sekolah','id');
		$ref_sekolah = Sekolah::all()->pluck('npsn','id');
		$ref_agama = Agama::all()->pluck('agama','id');
		$ref_desa = Desa::all()->pluck('nama_desa','id');
		$ref_alat_transportasi = AlatTransportasi::all()->pluck('transportasi','id');
		$ref_jenis_tinggal = JenisTinggal::all()->pluck('jenis_tinggal','id');
		
		$data['forms'] = array(
			'nisn' => ['Nisn', html()->text("nisn", old("nisn"))->class("form-control") ],
			'nis' => ['Nis', html()->text("nis", old("nis"))->class("form-control") ],
			'nama' => ['Nama', html()->text("nama", old("nama"))->class("form-control") ],
			'jenis_kelamin' => ['Jenis Kelamin', html()->text("jenis_kelamin", old("jenis_kelamin"))->class("form-control") ],
			'nik' => ['Nik', html()->text("nik", old("nik"))->class("form-control") ],
			'sekolah_asal' => ['Sekolah Asal', html()->select("sekolah_asal", $ref_sekolah_asal, null)->class("form-control") ],
			'id_sekolah' => ['Sekolah', html()->select("id_sekolah", $ref_sekolah, null)->class("form-control") ],
			'tempat_lahir' => ['Tempat Lahir', html()->text("tempat_lahir", old("tempat_lahir"))->class("form-control") ],
			'tgl_lahir' => ['Tgl Lahir', html()->text("tgl_lahir", old("tgl_lahir"))->class("form-control")->class("datepicker") ],
			'agama' => ['Agama', html()->select("agama", $ref_agama, null)->class("form-control") ],
			'id_desa' => ['Desa', html()->select("id_desa", $ref_desa, null)->class("form-control") ],
			'alamat' => ['Alamat', html()->text("alamat", old("alamat"))->class("form-control") ],
			'alat_transportasi' => ['Alat Transportasi', html()->select("alat_transportasi", $ref_alat_transportasi, null)->class("form-control") ],
			'jenis_tinggal' => ['Jenis Tinggal', html()->select("jenis_tinggal", $ref_jenis_tinggal, null)->class("form-control") ],
			'no_telp' => ['No Telp', html()->text("no_telp", old("no_telp"))->class("form-control") ],
			'email' => ['Email', html()->text("email", old("email"))->class("form-control") ],
			'no_registrasi_akta_lahir' => ['No Registrasi Akta Lahir', html()->text("no_registrasi_akta_lahir", old("no_registrasi_akta_lahir"))->class("form-control") ],
			
		);

		$this->log($request, 'membuka form tambah '.$this->title);
		return view('Siswa::siswa_create', array_merge($data, ['title' => $this->title]));
	}

	function store(Request $request)
	{
		$request->validate([
			'nisn' => 'required',
			'nis' => 'required',
			'nama' => 'required',
			'jenis_kelamin' => 'required',
			'nik' => 'required',
			'sekolah_asal' => 'required',
			'id_sekolah' => 'required',
			'tempat_lahir' => 'required',
			'tgl_lahir' => 'required',
			'agama' => 'required',
			'id_desa' => 'required',
			'alamat' => 'required',
			'alat_transportasi' => 'required',
			'jenis_tinggal' => 'required',
			'no_telp' => 'required',
			'email' => 'required',
			'no_registrasi_akta_lahir' => 'required',
			
		]);

		$siswa = new Siswa();
		$siswa->nisn = $request->input("nisn");
		$siswa->nis = $request->input("nis");
		$siswa->nama = $request->input("nama");
		$siswa->jenis_kelamin = $request->input("jenis_kelamin");
		$siswa->nik = $request->input("nik");
		$siswa->sekolah_asal = $request->input("sekolah_asal");
		$siswa->id_sekolah = $request->input("id_sekolah");
		$siswa->tempat_lahir = $request->input("tempat_lahir");
		$siswa->tgl_lahir = $request->input("tgl_lahir");
		$siswa->agama = $request->input("agama");
		$siswa->id_desa = $request->input("id_desa");
		$siswa->alamat = $request->input("alamat");
		$siswa->alat_transportasi = $request->input("alat_transportasi");
		$siswa->jenis_tinggal = $request->input("jenis_tinggal");
		$siswa->no_telp = $request->input("no_telp");
		$siswa->email = $request->input("email");
		$siswa->no_registrasi_akta_lahir = $request->input("no_registrasi_akta_lahir");
		
		$siswa->created_by = Auth::id();
		$siswa->save();

		$text = 'membuat '.$this->title; //' baru '.$siswa->what;
		$this->log($request, $text, ['siswa.id' => $siswa->id]);
		return redirect()->route('siswa.index')->with('message_success', 'Siswa berhasil ditambahkan!');
	}

	public function show(Request $request, Siswa $siswa)
	{
		$data['siswa'] = $siswa;

		$text = 'melihat detail '.$this->title;//.' '.$siswa->what;
		$this->log($request, $text, ['siswa.id' => $siswa->id]);
		return view('Siswa::siswa_detail', array_merge($data, ['title' => $this->title]));
	}

	public function edit(Request $request, Siswa $siswa)
	{
		$data['siswa'] = $siswa;

		$ref_sekolah_asal = SekolahAsal::all()->pluck('sekolah','id');
		$ref_sekolah = Sekolah::all()->pluck('npsn','id');
		$ref_agama = Agama::all()->pluck('agama','id');
		$ref_desa = Desa::all()->pluck('nama_desa','id');
		$ref_alat_transportasi = AlatTransportasi::all()->pluck('transportasi','id');
		$ref_jenis_tinggal = JenisTinggal::all()->pluck('jenis_tinggal','id');
		
		$data['forms'] = array(
			'nisn' => ['Nisn', html()->text("nisn", $siswa->nisn)->class("form-control") ],
			'nis' => ['Nis', html()->text("nis", $siswa->nis)->class("form-control") ],
			'nama' => ['Nama', html()->text("nama", $siswa->nama)->class("form-control") ],
			'jenis_kelamin' => ['Jenis Kelamin', html()->text("jenis_kelamin", $siswa->jenis_kelamin)->class("form-control") ],
			'nik' => ['Nik', html()->text("nik", $siswa->nik)->class("form-control") ],
			'sekolah_asal' => ['Sekolah Asal', html()->select("sekolah_asal", $ref_sekolah_asal, null)->class("form-control") ],
			'id_sekolah' => ['Sekolah', html()->select("id_sekolah", $ref_sekolah, null)->class("form-control") ],
			'tempat_lahir' => ['Tempat Lahir', html()->text("tempat_lahir", $siswa->tempat_lahir)->class("form-control") ],
			'tgl_lahir' => ['Tgl Lahir', html()->text("tgl_lahir", $siswa->tgl_lahir)->class("form-control")->class("datepicker") ],
			'agama' => ['Agama', html()->select("agama", $ref_agama, null)->class("form-control") ],
			'id_desa' => ['Desa', html()->select("id_desa", $ref_desa, null)->class("form-control") ],
			'alamat' => ['Alamat', html()->text("alamat", $siswa->alamat)->class("form-control") ],
			'alat_transportasi' => ['Alat Transportasi', html()->select("alat_transportasi", $ref_alat_transportasi, null)->class("form-control") ],
			'jenis_tinggal' => ['Jenis Tinggal', html()->select("jenis_tinggal", $ref_jenis_tinggal, null)->class("form-control") ],
			'no_telp' => ['No Telp', html()->text("no_telp", $siswa->no_telp)->class("form-control") ],
			'email' => ['Email', html()->text("email", $siswa->email)->class("form-control") ],
			'no_registrasi_akta_lahir' => ['No Registrasi Akta Lahir', html()->text("no_registrasi_akta_lahir", $siswa->no_registrasi_akta_lahir)->class("form-control") ],
			
		);

		$text = 'membuka form edit '.$this->title;//.' '.$siswa->what;
		$this->log($request, $text, ['siswa.id' => $siswa->id]);
		return view('Siswa::siswa_update', array_merge($data, ['title' => $this->title]));
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'nisn' => 'required',
			'nis' => 'required',
			'nama' => 'required',
			'jenis_kelamin' => 'required',
			'nik' => 'required',
			'sekolah_asal' => 'required',
			'id_sekolah' => 'required',
			'tempat_lahir' => 'required',
			'tgl_lahir' => 'required',
			'agama' => 'required',
			'id_desa' => 'required',
			'alamat' => 'required',
			'alat_transportasi' => 'required',
			'jenis_tinggal' => 'required',
			'no_telp' => 'required',
			'email' => 'required',
			'no_registrasi_akta_lahir' => 'required',
			
		]);
		
		$siswa = Siswa::find($id);
		$siswa->nisn = $request->input("nisn");
		$siswa->nis = $request->input("nis");
		$siswa->nama = $request->input("nama");
		$siswa->jenis_kelamin = $request->input("jenis_kelamin");
		$siswa->nik = $request->input("nik");
		$siswa->sekolah_asal = $request->input("sekolah_asal");
		$siswa->id_sekolah = $request->input("id_sekolah");
		$siswa->tempat_lahir = $request->input("tempat_lahir");
		$siswa->tgl_lahir = $request->input("tgl_lahir");
		$siswa->agama = $request->input("agama");
		$siswa->id_desa = $request->input("id_desa");
		$siswa->alamat = $request->input("alamat");
		$siswa->alat_transportasi = $request->input("alat_transportasi");
		$siswa->jenis_tinggal = $request->input("jenis_tinggal");
		$siswa->no_telp = $request->input("no_telp");
		$siswa->email = $request->input("email");
		$siswa->no_registrasi_akta_lahir = $request->input("no_registrasi_akta_lahir");
		
		$siswa->updated_by = Auth::id();
		$siswa->save();


		$text = 'mengedit '.$this->title;//.' '.$siswa->what;
		$this->log($request, $text, ['siswa.id' => $siswa->id]);
		return redirect()->route('siswa.index')->with('message_success', 'Siswa berhasil diubah!');
	}

	public function destroy(Request $request, $id)
	{
		$siswa = Siswa::find($id);
		$siswa->deleted_by = Auth::id();
		$siswa->save();
		$siswa->delete();

		$text = 'menghapus '.$this->title;//.' '.$siswa->what;
		$this->log($request, $text, ['siswa.id' => $siswa->id]);
		return back()->with('message_success', 'Siswa berhasil dihapus!');
	}

}
