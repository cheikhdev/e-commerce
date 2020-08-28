<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
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

         $products = DB::table('products')->paginate(5);//paginate(6);
        return view('home', compact('products','categories'));
     }
     

     public function dashbord(){
        return view('dashbord');
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
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}
