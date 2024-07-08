<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerController extends Controller
{
    public function FarmerDashboard(){

        return view('farmer.farmer_dashboard');
    }
}
