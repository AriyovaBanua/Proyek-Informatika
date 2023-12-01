<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use Auth;
class AdminController extends Controller
{
    
// Fitur Login Admin-------------------------------------------------------------------------------->
    public function halamanLogin()
    {
        return view("admin.login");
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




// Fitur Dashboard Admin-------------------------------------------------------------------------------->    
    public function dashboard()
    {
        return view('admin.admin_dashboard');
    }
// End of Fitur Login Admin-------------------------------------------------------------------------------->


// Fitur Users Admin-------------------------------------------------------------------------------->
    public function halamanUsers()
    {
        $admins = Admin::all(); // Fetch all admin records
        return view("admin.halaman_users",  ['admins' => $admins]);
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

        return redirect()->route('admin.users')->with('success', 'Admin berhasil ditambahkan!');
    }

    public function edit($username)
    {
        $admin = Admin::where('username', $username)->first();

        if ($admin) {
            return view('admin.edit_admin')->with('admin', $admin);
        } else {
            return redirect()->route('admin.users')->with('error', 'Admin tidak ditemukan');
        }
    }

    public function update(Request $request, $username)
    {
        $admin = Admin::where('username', $username)->first();

        if ($admin) {
            $admin->password = bcrypt($request->input('password'));
            $admin->save();

            return redirect()->route('admin.success')->with('success', 'Admin updated successfully');
        } else {
            return redirect()->route('admin.users')->with('error', 'Admin not found');
        }
    }


    public function destroy($username)
    {
        $admin = Admin::where('username', $username)->first();

        if ($admin) {
            $admin->delete();
            return redirect()->route('admin.users')->with('success', 'Admin berhasil dihapus');
        } else {
            return redirect()->route('admin.users')->with('error', 'Admin tidak ditemukan');
        }
    }
// End of Fitur Users Admin-------------------------------------------------------------------------------->

    public function success()
    {
        return view('admin.success');
    }

    public function error()
    {
        return view('admin.error');
    }
}

