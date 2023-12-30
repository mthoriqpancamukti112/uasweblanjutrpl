<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Guru::all();
        return view("guru.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("guru.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg",
            "nip" => "required",
            "nama_guru" => "required",
            "no_hp" => "required",
            "jk" => "required",
            "mata_pelajaran" => "required",
            "alamat" => "required",
            "username" => "required",
        ]);

        $input = $request->all();

        //upload gambar
        if ($image = $request->file('image')) {
            $destinationPath = 'images_guru/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }


        Guru::create($input);
        return redirect()->route("guru.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = Guru::all();
        return view("halamanDataGuru", compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        return view("guru.edit", compact("guru"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg",
            "nip" => "required",
            "nama_guru" => "required",
            "no_hp" => "required",
            "jk" => "required",
            "mata_pelajaran" => "required",
            "alamat" => "required",
            "username" => "required",
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images_guru/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        } else {
            unset($input['image']);
        }

        $guru->update($input);
        return to_route("guru.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return to_route("guru.index")->with("success", "Data berhasil disimpan");
    }
}