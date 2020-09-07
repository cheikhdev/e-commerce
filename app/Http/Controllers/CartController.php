<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Product;
class CartController extends Controller
{
    //
    public function store(Request $request){
    	
    Cart::add($request->id, $request->product_id, $request->prix_product)
    	->associate('App\Prodduct');
    return redirect()->route('/home')->with('succes','Le Produit a bien ete ajoute');
    	
    }
}
