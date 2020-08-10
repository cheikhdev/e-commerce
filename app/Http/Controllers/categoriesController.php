<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Category;

class categoriesController extends Controller
{
    //
    
   
    public function index(){
        return view("home");
    }
    public function store(Request $request)
    {
      
       $data = $request->validate([
          'name_category'=>'min:4',
          
          
          
      ]);
      

     return redirect('/ajouproduit');
     
  }
}