<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Contracts\Session\Session;
use App\Order;
use App\Category;
use App\Product;
class ProductsController extends Controller
{
    //Barre de recherche des produits
    public function search()
    {
        request()->validate([
            'q' => 'required|min:3'
        ]);

        $q = request()->input('q');

        $produc = Product::where('name_product', 'like', "%$q%")
                ->orWhere('description_product', 'like', "%$q%")
                ->paginate(6);

        return view('products.search')->with('products', $produc);
    }
 // AFFICHAGE PRODUIT PAR CATEGORIE   
public function pagecategory(){
      //$produit = Product::find($request->id)->get();
      $products = Product::all();
      $category = Category::all();
      $categories=Category::where('id' , 1)->get();
     // dd($categories);
      return view ('pages.category',compact('categories','category','products'));
    }

    public function desc(){
      //return view("/orders/description");
  
  //}
  //public function achat(){
  // return view("/orders/achat");

}
  // AFFICHAGE DES PRODUITS PAR CATHEGORIES
  //public function getCategory($category) {
     //  $singleCategory = Category::find($category);
     //  return view('pages.category', ['category' => $singleCategory]);
//}
    
    public function User(){

   
      // Get the currently authenticated user...
      $user = Auth::user();
      
      // Get the currently authenticated user's ID...
      $id = Auth::id();
      $user_id = Auth::id();
  
      $produit->user_id  = Auth::id();
      $produit->save();
  
  }
    public function index(){
      $products = Product::orderBy('created_at')->get();
      $products = \App\Product::orderBy('created_at', 'DESC')->get();

      return view('products.index', compact('products'));
   }
   public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
      $name = !is_null($filename) ? $filename : str_random('25');
      $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
   
      return $file;
   }   
   
   
   
   public function create()
   {
      $categories = \App\Category::pluck('name_category','id');
     
      return view('products.create', compact('categories'));
      
      
   }
   
   public function store(Request $request)
   {
     
      $data = $request->validate([
         'name_product'=>'required|min:5',
         'prix_product' => 'required|min:3|numeric',
         'description_product' => 'max:1000000',
         'image_product' => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048',
         
         
     ]);
     $produit = new Product();
     //On verfie si une image est envoyée
      /*if($request->has('image_product')){
         //On enregistre l'image dans un dossier
         $image = $request->file('image_product');
         //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
         $image_name = Str::slug($request->input('name')).'_'.time();
         //Nous enregistrerons nos fichiers dans /uploads/images dans public
         $folder = 'uploads/product_images/';
         //Nous allons enregistrer le chemin complet de l'image dans la BDD
         $produit->image_product = $folder.$image_name.'.'.$image->getClientOriginalExtension();
         //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
         $file = $this->uploadImage($image, $folder, 'public', $image_name);
         dd($file,$produit->image_product);
      }*/
      if($request->has('image_product')){
         //On enregistre l'image dans un dossier
         $image = $request->file('image_product');
         //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
         $image_name = Str::slug($request->input('name')).'_'.time();
         //Nous enregistrerons nos fichiers dans /uploads/images dans public
         $folder = '/uploads/images/';
         //Nous allons enregistrer le chemin complet de l'image dans la BD
         $produit->image_product = $folder.$image_name.'.'.$image->getClientOriginalExtension();
         //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
         $file = $this->uploadImage($image, $folder, 'public', $image_name);
         
     }
  
     $produit->name_product = $request->input('name_product');
     $produit->prix_product = $request->input('prix_product');
     $produit->description_product = $request->input('description_product');
     $produit->admin_id = 1;
     //$produit->category_id = $request->input('category_id');
     $produit->category_id = 1;
     $produit->save();
     //dd($file,$produit->image_product);
     

     return redirect('/produit');
     
   }
   

public function edit($id)
{
   // Pour que l'admin soit le seul apte a editer 
   $this->authorize('admin');
   // Editons les produits 
   $product = \App\Product::find($id);
   //$categories = \App\Category::pluck('name_category','id');
   return view('products.edit', compact('product'));
}

public function destroy($id)
{
   $product = Product::find($id);
   if($product)
       $product->delete();
   return redirect('/produit');
}


                 
         
public function update(Request $request, $id){
   $data = $request->validate([
      'name_product'   => 'required',
      'prix_product' => 'required | numeric',
      'description_product'=>'required',
      'image_product' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048'
      
   ]);
   $product = Product::find($id);
   if($product){
      if($request->has('image_product')){
         //On enregistre l'image dans une variable
         $image = $request->file('image_product');
         if(file_exists(public_path().$product->images))//On verifie si le fichier existe
            Storage::delete(asset($product->images));//On le supprime alors
         //Nous enregistrerons nos fichiers dans /uploads/images dans public
         $folder = '/uploads/images/';
         $image_name = Str::slug($request->input('name')).'_'.time();
         $product->image_product = $folder.$image_name.'.'.$image->getClientOriginalExtension();
         //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
         $this->uploadImage($image, $folder, 'public', $image_name);
     }
     $product->name_product  = $request->input('name_product');
     $product->prix_product = $request->input('prix_product');
     $product->description_product = $request->input('description_product');
     $product->category_id = $request->input('category_id');
     $product->save();
     

 }
 return redirect()->back();
}




         
         
public function merci()   {
   return view("orders.merci");
}   
public function achat1()   {
   return view("orders.achat1");
}            
 
public function show($id){
   $product = Product::find($id);
   return view("orders.show", compact('product'));
}

public function achat($id){
  
   $product = Product::find($id);
   return view("orders.achat", compact('product'));
}
public function store1(Request $request)
{
   if(!$request->session()->has('cart') || empty($request->session()->get('cart'))){
      return redirect('/');
  }
   
 $data = $request->validate([
     'nom_client'=>'required|min:2',
     'prenom_client' => 'required|min:2',
     'Adresse_client' => 'required|min:3',
     'num_tel' => 'required|min:9|numeric',
 ]);
 $carts = $request->session()->get('cart');
 $cart_total = 0;
 foreach ($carts['products'] as $cart){
   $cart_total += $cart['total'];
}
//dd($request->input('nom_client'));
$order = new Order();
$order->prix_total= $cart_total;
/*if($order){
   foreach($carts['products'] as $key => $cart){
       $order_product = $order->products()->sync([$key]);
   }
}*/
  $order->nom_client = $request->input('nom_client');
  $order->prenom_client = $request->input('prenom_client');
  $order->Adresse_client = $request->input('Adresse_client');
  $order->num_tel = $request->input('num_tel');
  $order->admin_id = 1;
  $order->delivery_id = 1;
  $order->save();
  if($order){
      foreach($carts['products'] as $key => $cart){
         $order_product = $order->products()->sync([$key]);
      }
   }
  $request->session()->forget('cart');
  return redirect('/home');
}

     // public function show($slog){
         //return  view('home',compact("slog"));
     // }
      public function agri(){
      return  view('products.Agriculture');
      }
      public function acc(){
         return  view('products.acc');
         }
      public function tele(){
         return  view('products.Telecoms');
         }
      public function sante(){
            return  view('products.Sante');
            }
      public function elec(){
               return  view('products.Electronique');
               }
      public function sport(){
                  return  view('products.Sport');
                  }
      public function backoffi(){
      return  view('backoffice.index');
                     }
}
