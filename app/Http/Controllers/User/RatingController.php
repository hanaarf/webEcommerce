<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function rate(Request $request)
    {
        $rating = Rating::updateOrCreate(
            ['user_id' => Auth::id(), 'produk_id' => $request->produk_id],
            ['rating' => $request->rating]
        );

        return response()->json(['success' => true]);
    }

}
