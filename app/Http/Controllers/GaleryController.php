<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Galery::all();
        return view("galery.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("galery.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg",
        ]);

        $input = $request->all();

        //upload gambar
        if ($image = $request->file('image')) {
            $destinationPath = 'galery/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }


        Galery::create($input);
        return redirect()->route("galeri.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = Galery::all();
        return view("halamanGallery", compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galeri)
    {
        return view("galery.edit", compact("galeri"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galeri)
    {
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg|max:2048",
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'galery/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        } else {
            unset($input['image']);
        }

        $galeri->update($input);
        return to_route("galeri.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galeri)
    {
        $galeri->delete();
        return to_route("galeri.index")->with("success", "Data berhasil disimpan");
    }
}
