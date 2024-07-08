<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorsController extends Controller
{
    public function VendorsDashboard(){

        return view('vendors.vendors_dashboard');
    }
}
