<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customers = Customer::all(); // Ambil semua data customer dari model

        return view('admin.customer.customer', ['customers' => $customers]);
    }

    public function destroy($email)
    {
        $customer = Customer::where('email', $email)->first();
        if ($customer) {
            $customer->delete();
            return redirect()->route('admin.customers')->with('success', 'Customer berhasil dihapus.');
        }
        return redirect()->route('admin.customers')->with('error', 'Customer tidak ditemukan.');
    }
}
