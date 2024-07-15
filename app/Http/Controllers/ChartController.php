<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\VendorDemand;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    //piechart
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

    //barchart
    public function ordersBarChart()
    {
       
$totalFruits = VendorDemand::where('Product', 'Fruits')->count();
$totalVegetables = VendorDemand::where('Product', 'Vegetables')->count();
$totalLivestock = VendorDemand::where('Product', 'livestock')->count();
$totalPoultry = VendorDemand::where('Product', 'poultry')->count();
$totalDairy = VendorDemand::where('Product', 'dairy')->count();

$barChartData=[
            ["label" => "Fruits", "y" => $totalFruits],
            ["label" => "Vegetables", "y" => $totalVegetables],
            ["label" => "livestock", "y" => $totalLivestock],
            ["label" => "poultry", "y" => $totalPoultry],
            ["label" => "dairy", "y" => $totalDairy],
            
           
];
return $barChartData;
  
     }

        

}