<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        $like = new Like();
        $like->user_id = Auth::id();
        $like->produk_id = $request->produk_id;
        $like->save();

        return response()->json(['success' => true]);
    }

    public function unlike(Request $request)
    {
        $like = Like::where('user_id', Auth::id())
            ->where('produk_id', $request->produk_id)
            ->first();
        if ($like) {
            $like->delete();
        }

        return response()->json(['success' => true]);
    }


}
