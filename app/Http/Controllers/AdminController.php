<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use Auth;
class AdminController extends Controller
{
    //
    public function halamanLogin()
    {
        return view("admin.login");
    }

    public function halamanUsers()
    {
        $admins = Admin::all(); // Fetch all admin records
        return view("admin.halaman_users",  ['admins' => $admins]);
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('username', 'password');
        
    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed, redirect to admin dashboard
    //         $request->session()->regenerate();
    //         return redirect()->route('admin.dashboard');
    //     } else {
    //         // Authentication failed, redirect back to login with error
    //         return redirect()->route('login')->with('error', 'Invalid credentials');
    //     }

    //     // $credentials = $request->only('username', 'password');

    //     // if (Auth::attempt($credentials)) {
    //     //     // Jika otentikasi berhasil
    //     //     return redirect()->intended('admin/dashboard');
    //     // }

    //     // // Jika otentikasi gagal
    //     // return back()->withErrors(['email' => 'Invalid credentials']);
    // }

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
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

    public function dashboard()
    {
        return view('admin.admin_dashboard');
    }

    public function create()
    {
        return view('admin.tambah_admin'); // Tampilkan formulir tambah admin
    }

    public function store(Request $request)
    {
        // Lakukan validasi input
        $validatedData = $request->validate([
            'username' => 'required|unique:admin', // Pastikan username unik di tabel admin
            'password' => 'required|min:5',
        ]);

        // Simpan admin baru ke database
        $admin = new Admin();
        $admin->username = $validatedData['username'];
        $admin->password = bcrypt($validatedData['password']); // Hash password sebelum disimpan
        $admin->save();

        return redirect()->route('admin.dashboard')->with('success', 'Admin berhasil ditambahkan!');
    }

}
