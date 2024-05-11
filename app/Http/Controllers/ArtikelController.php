<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $DataArtikels = Artikel::paginate(3);

        return view('DataArtikel', ['DataArtikels' => $DataArtikels]);
    }

    public function create()
{
    return view('artikel.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'gambar' => 'required|url',
        'kategori' => 'required',
        'judul' => 'required',
        'deskripsi' => 'required',
        'tanggal_upload' => 'required|date',
        'link_artikel' => 'required|url',
    ]);

    Artikel::create($validatedData);

    return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan.');
}

public function edit(Artikel $artikel)
{
    return view('artikel.edit', compact('artikel'));
}

public function update(Request $request, Artikel $artikel)
{
    $validatedData = $request->validate([
        'gambar' => 'required|url',
        'kategori' => 'required',
        'judul' => 'required',
        'deskripsi' => 'required',
        'tanggal_upload' => 'required|date',
        'link_artikel' => 'required|url',
    ]);

    $artikel->update($validatedData);

    return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui.');
}

public function destroy(Artikel $artikel)
{
    $artikel->delete();

    return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus.');
}

}