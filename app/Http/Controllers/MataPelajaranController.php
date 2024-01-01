<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = MataPelajaran::where('nama_matapelajaran', 'like', '%' . $request->cari . '%')->get();
        } else {
            $data = MataPelajaran::with('jurusann')->orderBy('nama_matapelajaran', 'asc')->get();
        }

        return view("matapelajaran.index", compact("data", "request"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_jurusan = Jurusan::all();
        return view("matapelajaran.create", compact('data_jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_matapelajaran" => "required|unique:mata_pelajarans",
            "jurusan" => "required",
        ]);

        MataPelajaran::create($request->all());
        return redirect()->route("mapel.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(MataPelajaran $mataPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataPelajaran $mapel)
    {
        $data_jurusan = Jurusan::all();
        return view("matapelajaran.edit", compact("mapel", "data_jurusan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MataPelajaran $mapel)
    {
        $request->validate([
            "nama_matapelajaran" => "required",
            "jurusan" => "required",
        ]);
        $mapel->update($request->all());
        return to_route("mapel.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MataPelajaran $mapel)
    {
        $mapel->delete();
        return to_route("mapel.index")->with("success", "Data berhasil disimpan");
    }
}
