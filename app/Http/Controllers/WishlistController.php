<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Product;
use Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add(Product $product)
    {
        // add the product to cart
        \Wishlist::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'description'=> $product->description,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));



        return redirect()->route('wishlist.index');

    }

    public function index()
    {

        $wishlistItems = \Wishlist::session(auth()->id())->getContent();


        return view('wishlist.index', compact('wishlistItems'));
    }

    public function destroy($itemId)
    {

       \Wishlist::session(auth()->id())->remove($itemId);

        return back();
    }

    public function update($rowId)
    {

        \Wishlist::session(auth()->id())->update($rowId, [
            'quantity' => [
                'relative' => false,
                'value' => request('quantity')
            ]
        ]);

        return back();
    }

   
}
