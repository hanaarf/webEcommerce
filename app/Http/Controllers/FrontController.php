<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\MerkProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('Front.base');
    }

    public function produk()
    {
        $produk = Produk::all();
        return view('Front.produk', compact('produk'));
    }

    public function produkMerk($slug)
    {
        $merk  = MerkProduk::where('slug', $slug)->first();
        $produk = Produk::where('merk_produk_id', $merk->id)->get();
        return view('Front.produkMerk', compact('merk', 'produk'));
    }

    public function produkCate($slug)
    {
        $category  = Categori::where('slug', $slug)->first();
        $produk = Produk::where('categori_id', $category->id)->get();
        return view('Front.produkCate', compact('category', 'produk'));
    }

    public function detailProduk($slug)
    {
        $produk = Produk::where('slug', $slug)->first();
        return view('Front.detail', compact('produk'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        // ini search pake 2 field di satu tabel
        // $produk = Produk::where('nama_produk', 'LIKE', "%{$query}%")
        // ->orWhere('harga', 'LIKE', "%{$query}%")->get();

        // pake 2 tabel
        $produk = Produk::where('nama_produk', 'LIKE', "%{$query}%")
        ->orWhereHas('merk', function ($q) use ($query) {
            $q->where('merk_produk', 'LIKE', "%{$query}%");
        })->get();
        return view('Front.produk', compact('produk'));
    }
}
    