<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\User;
class UsersController extends Controller
{
    public function store(Request $request)
    {           
       $client = new Client();
       $client->nom_client = $request->input('nom');
       $client->prenom_client = $request->input('prenom');
       $client->sexe_client = $request->input('genre');
       $client->telephone_client = $request->input('phone');
       $client->adresse_client = $request->input('adresse');
       $client->save();
    ///////////////////////////////////////////////////
    /////////////////////////////////////////////////////
       $user= new User();
       $user->name= $client->prenom_client;
       $user->email = $request->input('email');
       $user->roles = "user";
       $user->password=Hash::make($request->input('password'));
       $user->save();

       return redirect('/utilisateur');
    }
  
}

