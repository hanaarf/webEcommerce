<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Colors;
use App\Models\Produk;
use App\Models\ProdukImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukImageController extends Controller
{
    public function index()
    {
        $produk = ProdukImage::all();
        $namaProduk = Produk::all();
        $color = Colors::all();
        return view('Admin.ProdukImage.indexImage', compact('produk', 'namaProduk', 'color'));
    }

        public function create(Request $request)
        {
            ProdukImage::create([
                'produk_id' =>$request->produk_id,
                'color_id' =>$request->color_id,
                'image' =>$request->file('image')->store('img-produk')
            ]);

            return redirect()->back()->with('Sukses', 'berhasil menambahkan foto produk');
        }

    public function delete(Request $request)
    {
        $produk = ProdukImage::findOrFail($request->id);
        Storage::delete($produk->image);
        $produk->delete();
        return redirect()->back()->with('Delete', 'berhasil menghapus foto produk');
    }
}
