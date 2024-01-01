<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = Siswa::where('nama_siswa', 'like', '%' . $request->cari . '%')->get();
        } else {
            $data = Siswa::with('jurusann', 'kelass')->orderBy('nama_siswa', 'asc')->get();
        }

        return view("siswa.index", compact("data", "request"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_jurusan = Jurusan::all();
        $data_kelas = Kelas::all();
        return view("siswa.create", compact('data_jurusan', 'data_kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nisn" => "required|unique:siswas",
            "nama_siswa" => "required|unique:siswas",
            "kota" => "required",
            "jk" => "required",
            "agama" => "required",
            "jurusan" => "required",
            "kelas" => "required",
            "username" => "required",
        ]);

        Siswa::create($request->all());
        return redirect()->route("siswa.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        $data_jurusan = Jurusan::all();
        $data_kelas = Kelas::all();
        return view("siswa.edit", compact("siswa", 'data_jurusan', 'data_kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            "nisn" => "required",
            "nama_siswa" => "required",
            "kota" => "required",
            "jk" => "required",
            "agama" => "required",
            "jurusan" => "required",
            "kelas" => "required",
            "username" => "required",
        ]);
        $siswa->update($request->all());
        return to_route("siswa.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return to_route("siswa.index")->with("success", "Data berhasil disimpan");
    }
}
