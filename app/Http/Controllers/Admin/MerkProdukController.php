<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MerkProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MerkProdukController extends Controller
{
    public function index()
    {
        $merk = MerkProduk::all();
        return view('Admin.Merkproduk.indexMerkproduk', compact('merk'));
    }

    public function create(Request $request)
    {
        MerkProduk::create([
            'merk_produk' => $request->merk_produk,
            'slug' => Str::slug($request->merk_produk)
        ]);

        return redirect()->back()->with('Sukses', 'berhasil menambah data');
    }

    public function update(Request $request)
    {
        $merk = MerkProduk::findOrFail($request->id);

        $merk->merk_produk = $request->merk_produk;
        $merk->slug = Str::slug($request->merk_produk);
        $merk->update();

        return redirect()->back()->with('Sukses', 'berhasil mengubah data');
    }

    public function delete(Request $request)
    {
        $merk = MerkProduk::findOrFail($request->id);
        $merk->delete();
        return redirect()->back()->with('Delete', 'berhasil menghapus data');
    }
}
