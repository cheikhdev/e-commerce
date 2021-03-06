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
            return response()->json(['success' => true,], 200);
        }
        else{
            $product = Product::find($request->product_id);
        
            Cart::add($product->id, $product->name_product,1, $product->prix_product)
                ->associate('App\Product');
                return response()->json(['success' => true,], 200);
        }
    }  
        public function add_to_cart(Request $request){
            //On recupere le produit dans la BD a partir de l'id qui est passe en parametre
            $product = Product::find($request->input('product_id'));
            //On s'assure qu'il y'a bien un produit qui est retourne
            if($product){
                Cart::add($product->id, $product->name_product,1, $product->prix_product)
                ->associate('App\Product');
            }
            return response()->json(['success' => true,], 200);
         }
            
    

    public function afficher_panier(Request $request){
        $product = Product::find($request->product_id);
         
        return view('panier' , compact('product'));
    }

     public function destroy($rowId){
    
        Cart::remove($rowId);
        return back()->with('succes' , 'Le produit a ete bien supprimer');


     }
     public function remove($rowId)
        {
            Cart::destroy($rowId);

            return back();
        }
     public function update_cart(Request $request){
        $uqty = $request->uqty;
        $rowId = $request->rowId;

        Cart::update($rowId, $uqty);
        return redirect()->back();
    }

    public function finish_cart(){
        return view("commande");
    }

   

}
