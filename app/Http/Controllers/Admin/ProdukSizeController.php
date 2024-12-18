<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukSize;
use Illuminate\Http\Request;

class ProdukSizeController extends Controller
{
    public function index()
    {
        $namaProduk = Produk::all();
        $produk = ProdukSize::all();
        return view('Admin.ProdukSize.indexPS', compact('namaProduk', 'produk'));
    }

    public function create(Request $request)
    {
        ProdukSize::create([
            'produk_id' => $request->produk_id,
            'size' => $request->size,
            'harga' => $request->harga,
        ]);
        return redirect()->back()->with('Sukses', 'Berhasil menambahkan produk dgn ukuran  '.$request->size);
    }

    public function delete(Request $request)
    {
        ProdukSize::where('id', $request->id)->delete();
        return redirect()->back()->with('Delete', 'berhasil menghapus produk size');
    }
}
