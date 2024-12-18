<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::all();
        return view('Admin.Provinsi.indexProvinsi', compact('provinsi'));
    }

    public function create(Request $request)
    {
        Provinsi::create([
            'provinsi' => $request->provinsi,
            'slug' => Str::slug($request->provinsi),
        ]);

        return redirect()->back()->with('Sukses', 'provinsi' .$request->provinsi. 'berhasil ditambah');
    }

    public function delete(Request $request)
    {
        Provinsi::where('id', $request->id)->delete();
        return redirect()->back()->with('Delete', 'provinsi berhasil dihapus');
    }
}
