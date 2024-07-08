<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function pieChart(){
        $totalUsers = User::count();
        $totalFarmers = User::where('role', 'farmer')->count();
        $totalVendors = User::where('role', 'vendor')->count();

        $dataPoints = [
            ["label" => "Farmers", "y" => $totalFarmers],
            ["label" => "Vendors", "y" => $totalVendors],
            ["label" => "Others", "y" => $totalUsers - $totalFarmers - $totalVendors],
        ];

        return response()->json($dataPoints);
    }
}
