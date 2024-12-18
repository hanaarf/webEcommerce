<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function toggleBookmark(Request $request)
    {
        $bookmark = Bookmark::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->first(); 

        if ($bookmark) {
            $bookmark->delete(); 
            return response()->json(['status' => 'unbookmarked']); 
        } else {
            Bookmark::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
            ]);
            return response()->json(['status' => 'bookmarked']); 
        }
    }

}
