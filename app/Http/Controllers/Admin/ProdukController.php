<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categori;
use App\Models\MerkProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('Admin.Produk.indexProduk', compact('produk'));
    }

    public function create()
    {
        $kategori = Categori::all();
        $merk = MerkProduk::all();
        return view('Admin.Produk.createProduk', compact('kategori', 'merk'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|unique:produks',
            'categori_id' => 'required',
            'merk_produk_id' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ], [
            'nama_produk.required' => 'nama produk harus diisi',
            'nama_produk.unique' => 'nama produk sudah ada',
            'categori_id.required' => 'kategori produk harus dipilih',
            'merk_produk_id.required' => 'merk produk harus dipilih',
            'deskripsi.required' => 'deskripsi produk harus diisi',
            'harga.required' => 'harga produk harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->route('create.produk')->withErrors($validator)->withInput();
        }

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'categori_id' => $request->categori_id,
            'merk_produk_id' => $request->merk_produk_id,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'slug' => Str::slug($request->nama_produk)
        ]);

        return redirect()->route('index.produk')->with('Sukses', 'produk berhasil ditambahkan');
    }

    public function detail($slug)
    {
        $produk = Produk::findOrFail($slug);
        return view('Admin.Produk.indexProduk', compact('produk'));
    }

    public function delete(Request $request)
    {
        $produk = Produk::findOrFail($request->id);
        $produk->delete();
        return redirect()->back()->with('Delete', 'berhasil menghapus data');
    }

    public function edit($slug)
    {
        $kategori = Categori::all();
        $merk = MerkProduk::all();
        $produk = Produk::where('slug', $slug)->firstOrFail();
        return view('Admin.Produk.editProduk', compact('produk', 'kategori', 'merk'));
    }

    public function update(Request $request){
        $produk = Produk::findOrFail($request->id);

        $produk->nama_produk = $request->nama_produk;
        $produk->categori_id = $request->categori_id;
        $produk->merk_produk_id = $request->merk_produk_id;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->slug = Str::slug($request->nama_produk);
        $produk->update();

        return redirect()->route('index.produk')->with('Sukses', 'Data User Berhasil Di Update');
    }

    public function updatee(Request $request, $slug){
        $produk = Produk::findOrFail($slug);

        $produk->nama_produk = $request->nama_produk;
        $produk->categori_id = $request->categori_id;
        $produk->merk_produk_id = $request->merk_produk_id;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->slug = Str::slug($request->nama_produk);
        $produk->update();

        return redirect()->route('index.produk')->with('Sukses', 'Data User Berhasil Di Update');
    }
}
