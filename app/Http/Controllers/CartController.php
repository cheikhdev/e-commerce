<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Product;
class CartController extends Controller
{
    //
    public function store(Request $request){

        $duplicata= Cart::search(function($cartItem, $rowId) use ($request)
        {
            return $cartItem->id = $request->id;
        });

        if($duplicata->isNotEmpty()){
            return redirect()->route('espace_client'->with('success','Le produit à deja ete ajoute.'));
        }
        else{
            $product = Product::find($request->product_id);
        
            Cart::add($product->id, $product->name_product,1, $product->prix_product)
                ->associate('App\Prodduct');
            return redirect()->route('espace_client')->with('succes','Le Produit a bien ete ajoute');
        }
        
            
    }

    public function afficher_panier(){
        return view('panier');
    }


}
