<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kelas::all();
        return view("kelas.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("kelas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_kelas" => "required",
        ]);

        Kelas::create($request->all());
        return redirect()->route("class.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $class)
    {
        return view("kelas.edit", compact("class"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $class)
    {
        $request->validate([
            "nama_kelas" => "required",
        ]);
        $class->update($request->all());
        return to_route("class.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $class)
    {
        $class->delete();
        return to_route("class.index")->with("success", "Data berhasil disimpan");
    }
}
