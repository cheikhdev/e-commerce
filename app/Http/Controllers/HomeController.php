<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use App\Contact;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index(){
         $categories=Category::where('id' , 1)->get();

         $TotalMacon = DB::table('products')->whereIn('category_id', [1])->count();
         $TotalSanitaire_plomberie = DB::table('products')->whereIn('category_id', [2])->count();
         $TotalPeinture = DB::table('products')->whereIn('category_id', [3])->count();
         $TotalElectricite = DB::table('products')->whereIn('category_id', [4])->count();
         
         $products = DB::table('products')->paginate(12);//paginate(6);
          $product = \App\Product::All();
        return view('home', compact('products','categories','TotalMacon','TotalSanitaire_plomberie','TotalPeinture','TotalElectricite','product'));
     }
     

     public function dashbord(){
        return view('accueildashbord');
     }

     public function utilisateur(){
         $products = Product::all()->take(15);
        return view('utilisateur', compact('products'));
     }

     public function deconnect(){
         Auth::logout();
         $products = Product::all()->take(15);
         return view('home', compact('products'));
  }

   public function contact() {
      return view('partials.contact');
    }

    // Store Contact Form data
    public function CreateForm(Request $request){
    
        $data = $request->validate([
      'nom'   =>    'required|min:2',
      'prenom'   => 'required|min:3',
      'email'   =>  'required|email',
      'objet'   =>  'required',
      'message'   =>'required|max:1000000',
      
   ]);
    
        $posts = Contact::create([
           'nom' => request('nom'),
           'prenom' => request('prenom'),
           'email' => request('email'),
          'objet' => request('objet'),
           'message' => request('message'),
           ]);
        
        return redirect()
            ->back()
            ->with('success', 'Merci de nous contacter, nous allons vous repondre dans les plus brefs delais.');

    }

 
 



 
     
      
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

}