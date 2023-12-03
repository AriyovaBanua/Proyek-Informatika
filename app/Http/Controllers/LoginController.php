<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
class LoginController extends Controller
{
    //
    // Fitur Login Admin-------------------------------------------------------------------------------->
    public function halamanLogin()
    {
        return view("admin.login.login");
    }


    public function logout(Request $request) 
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }


    public function login(Request $request)
    {
        $username = $request->input('username');
        $plainPassword = $request->input('password');

        // Retrieve the admin record from the database based on the provided username
        
        $admin = Admin::where('username', $username)->first();

        // Check if the admin exists and if the password matches (after hashing)
        if ($admin && $admin->validatePassword($plainPassword)) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('admin.dashboard');
        } else {
            // Authentication failed, redirect back to login with error
            return redirect()->route('login')->with('error', 'Username atau password salah');
        }
    }

// End of Fitur Login Admin--------------------------------------------------------------------------------> 
}
