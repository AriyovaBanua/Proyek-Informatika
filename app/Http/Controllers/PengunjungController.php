<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    
    public function index(){
        return view("customer.dashboard");
    }
}
