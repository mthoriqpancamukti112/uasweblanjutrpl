<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();
        return view("siswa.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("siswa.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        return view("siswa.edit", compact("siswa"));
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
