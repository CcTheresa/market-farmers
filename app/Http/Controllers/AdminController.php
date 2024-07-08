<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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



        return view('admin.admin_dashboard',compact('totalUsers','totalFarmers','totalVendors','dataPoints'));
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
            $request->photo->move('user',$photoname);
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
