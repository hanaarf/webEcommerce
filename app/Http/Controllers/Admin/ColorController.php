<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Colors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ColorController extends Controller
{
    public function index()
    {
        $color = Colors::all();
        return view('Admin.Color.indexColor', compact('color'));
    }

    public function create(Request $request)
    {
        Colors::create([
            'name' => $request->name,
            'image' => $request->file('image')->store('img-color')
        ]);

        return redirect()->back()->with('Sukses', 'berhasil menambahkan warna '.$request->name);
    }

    public function delete(Request $request)
    {
        Colors::where('id', $request->id)->delete();
        return redirect()->back()->with('Delete', 'berhasil menghapus warna');
    }
}
