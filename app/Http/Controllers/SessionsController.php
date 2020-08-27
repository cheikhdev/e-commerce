<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class SessionsController extends Controller
{
    public function create2()
    {
        return view('sessions.create2');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Email ou Mot de passe incorrect, veuiller ressayer '
            ]);
        }
        
        return redirect()->to('/home');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/home');
    }
}