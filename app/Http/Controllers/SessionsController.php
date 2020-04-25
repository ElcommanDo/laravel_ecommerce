<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        elseif(request('select1')=='user')
        {
            return redirect()->to('/');    
        }
        elseif(request('select1')=='admin')
        {
            return redirect()->to('categories');
        }
        // return redirect()->to('/');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }
}