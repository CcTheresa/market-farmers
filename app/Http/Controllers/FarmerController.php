<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VendorDemand;

class FarmerController extends Controller
{
    public function FarmerDashboard(){
        $vendorOrders = VendorDemand::with('vendor')->get(); // Fetch all vendor demands with vendor details


        // Load vendor details eagerly
       // $vendorOrders->load('vendor');
        return view('farmer.farmer_dashboard',compact('vendorOrders'));
    }

    public function showOrderForm($id)
    {
        $order = VendorDemand::findOrFail($id);
        return view('farmers.order_form', compact('order'));
    }

    public function acceptOrder(Request $request, $id)
    {
        $order = VendorDemand::findOrFail($id);

        // Validate and store accepted order details
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'destination' => 'required|string',
            'phone' => 'required|string',
        ]);

        // Store the accepted order in vendor_demands table
        $order->update([
            'farmer_name' => $data['name'],
            'farmer_email' => $data['email'],
            'destination' => $data['destination'],
            'phone' => $data['phone'],
        ]);

        return redirect()->route('farmer.dashboard')->with('success', 'Order accepted successfully.');
    }
}