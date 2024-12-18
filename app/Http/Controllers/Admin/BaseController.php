<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BaseController extends Controller
{
    public function index()
    {
        $produk = Produk::count();
        $user = User::where('role', '2')->count();
        return view('template.base', compact('produk', 'user'));
    }

    public function dataUser()
    {
        $user = User::where('role', '2')->get();
        return view('Admin.DataUser.indexUser', compact('user'));
    }

    public function dataAdmin()
    {
        $admin = User::where('role', '1')->get();
        return view('Admin.DataUser.indexAdmin', compact('admin'));
    }

    public function deleteUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        // Storage::delete($user->image);
        $user->delete();
        return redirect()->route('data.user')->with('Delete', 'berhasil menghapus data user');
    }
}
