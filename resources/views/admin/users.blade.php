<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    @include('admin.admincss')

    <style>
        /* Inline CSS for table styling */
        table {
            border: bottom;
            width: 30%;
            border-collapse: collapse;
            background-color: #f0f0f0;
            margin: 10px 0;
        }
        
        th, td {
            padding: 10px;
            text-align: center;
        }
        
        th {
            background-color: #333;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #ccc;
        }
        
        tr:nth-child(odd) {
            background-color: #eee;
        }
        
        tr td {
            border-bottom: 1px solid #ddd;
        }
       
    </style>
</head>
<body>
    

<div class="container-scroller">

@include('layouts.inc.admin.navbar')



</div>
<div class="container-fluid page-body-wrapper">
@include('layouts.inc.admin.sidebar')


<div class="main-panel">
    <div class="content-wrapper">
        @yield('content')
<div style="position: relative; top: 60px; right: -75px">


@if(session()->has('message'))
<div class="alert alert-success">

<button type="button" class="close" data-dismiss="alert" aria-hidden='true'> X</button>
{{session()->get('message')}}

</div>

@endif
<h2>All Users</h2>
<table >

<tr>
    <th >Name</th>
    <th >email</th>
    <th >role</th>
    <th >status</th>
    <th >User Profile</th>
    <th >Action</th>
</tr>

@foreach($data as $user)
<tr align="center">
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->role}}</td>

    <td><!--activate status button-->
    @if($user->role !=="admin")
        <a href="/user/{{$user->id}}" class="btn btn-sm btn-{{$user->status =='active' ? 'success':'danger'}}">
            {{$user->status == 'active'?'active':'inactive'}}</td>
            @else

    @endif
    <td> <!--edit button-->
        <a href="{{url('edit_user',$user->id)}}" class="btn btn-primary">
            <i class="fa fa-pen">
    edit</a>
    </td>

    <!--delete button-->
    @if($user->role !=="admin")
    <td><a href="{{url('/deleteuser',$user->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a></td>
    @else
    <td><a >Not Allowed</a></td>
    @endif
</tr>

@endforeach
</table>
</div>
        
</div>
</div>
</div>

@include('admin.adminscript')

</body>

</html>