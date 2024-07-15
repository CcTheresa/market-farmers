<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VendorDemand;
use Illuminate\Support\Facades\Storage;

class VendorsController extends Controller
{
    public function VendorsDashboard(){

        return view('vendors.vendors_dashboard');
    }
//vendor makes an order
    public function store(Request $request)
    {
        $data = $request->validate([
            'product'=>'required',
            'demands' => 'required|integer',
            'location' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->only(['product', 'demands', 'location']);

        $data['photo'] = $request->file('photo')->store('demands_photos');

        VendorDemand::create($data);

        return redirect()->route('vendor.dashboard')->with('success', 'Order submitted successfully.');
    }
    
}
