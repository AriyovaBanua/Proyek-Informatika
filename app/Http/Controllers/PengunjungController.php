<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    
    public function index()
    {
        return view("customer.dashboard");
    }
    public function shop()
    {
        return view("customer.shop");
    }
    public function myorder()
    {
        return view("customer.myorder");
    }
}
