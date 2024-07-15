<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\ChartController; // Ensure ChartController is imported
use App\Models\VendorDemand;

class AdminController extends Controller
{
    public function AdminDashboard(ChartController $chartController){
//cards
        $totalUsers= User::count();
        
        
        $totalFarmers= User::where('role','farmer')->count();
        $totalVendors= User::where('role','vendor')->count();
//pie chart
$totalOthers = $totalUsers - ($totalFarmers + $totalVendors);

$dataPoints = [
    ['Role', 'Count'],
    ['Farmers', $totalFarmers],
    ['Vendors', $totalVendors],
    ['Others', $totalOthers],
];


$totalFruits = VendorDemand::where('Product', 'Fruits')->count();
$totalVegetables = VendorDemand::where('Product', 'Vegetables')->count();
$totalLivestock = VendorDemand::where('Product', 'livestock')->count();
$totalPoultry = VendorDemand::where('Product', 'poultry')->count();
$totalDairy = VendorDemand::where('Product', 'dairy')->count();

        $barChartData=[
            ['Product', 'Count'],
            ['Fruits', $totalFruits],
            ['Vegetables', $totalVegetables],
            ['Livestock', $totalLivestock],
            ['Dairy', $totalDairy],
            ['Poultry', $totalPoultry],
     
     
        ];
      
        return view('admin.admin_dashboard',compact('totalUsers','totalFarmers','totalVendors','dataPoints','barChartData'));
    }

    public function users(){

        $data=user::all();
        return view('admin.users',compact("data"));
    }

    public function deleteuser($id){

        $data=user::find($id);
        $data->delete();
        return redirect()->back()->with('message','User successfully deleted.');
    }

    public function edituser($id){


        $data=user::find($id);

        return view('admin.edit_user',compact("data"));

    }

    public function updateuser(Request $request, $id){


        $data=user::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'User not found');
        }

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->role=$request->role;
        
        $photo=$request->photo;

        if($photo){

            $photoname=time().'.'.$photo->getClientOriginalExtension();
            $request->photo->move('/user_photos',$photoname);
            $data->photo=$photoname;
        }
$data->save();

        return redirect()->back()->with('message','User Profile updated successfully');
    }

    public function update($id){

        $data=user::find($id);
        
        if($data){
            if($data->status=='active'){
                $data->status='inactive';
            }
            else{
                $data->status='active';
            }
            $data->save();
        }
        return back();
    }
}
