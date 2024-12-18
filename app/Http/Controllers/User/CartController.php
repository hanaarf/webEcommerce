<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\Produk;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $produk = Produk::find($request->id);

        Carts::add([
            'id' => $produk->id,
            'nama_produk' => $produk->nama_produk,
            'qty' => $produk->qty,
            'price' => $produk->price,
            'weight' => $produk->weight,
            'options' => [
                'produk_image' => $produk->produk_image,
                'size' => $produk->size,
                'color' => $produk->color,
            ],
        ]);
        return response()->json(['success' => true, 'count' => Carts::count(), 'cart' => Carts::content()]);
    }

    public function update(Request $request){
        $rowId = $request->rowId;
        $qty = $request->qty;

        if($qty > 0){
            // Carts::update($rowId, $qty);
        } else{
            Carts::remove($rowId);
        }

        return response()->json(['success' => true, 'count' => Carts::count(), 'cart' => Carts::content()]);
    }
}
