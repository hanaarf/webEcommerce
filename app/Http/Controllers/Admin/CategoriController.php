<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriController extends Controller
{
    public function index()
    {
        $kategori = Categori::all();
        return view('Admin.Categori.indexCategori', compact('kategori'));
    }

    public function create(KategoriRequest $request)
    {
        Categori::create([
            'categori' => $request->categori,
            'slug' => Str::slug($request->categori)
        ]);

        return redirect()->back()->with('Sukses', 'berhasil menambah data');
    }

    public function update(KategoriRequest $request)
    {
        $kategori = Categori::findOrFail($request->id);

        $kategori->categori = $request->categori;
        $kategori->slug = Str::slug($request->categori);
        $kategori->update();

        return redirect()->back()->with('Sukses', 'berhasil mengubah data');
    }

    public function delete(Request $request)
    {
        $kategori = Categori::findOrFail($request->id);
        $kategori->delete();
        return redirect()->back()->with('Delete', 'berhasil menghapus data');
    }
}
