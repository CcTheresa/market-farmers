<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>

    @include('admin.admincss')
</head>
<style>
    /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px; /* Adjust width as needed */
}

.form-container h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group select {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group input[type="file"] {
    width: 100%;
    padding: 8px;
    font-size: 16px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
}

.btn-primary:hover {
    background-color: #0056b3;
}

</style>
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

<!--success message-->
@if(session()->has('message'))
<div class="alert alert-success">

<button type="button" class="close" data-dismiss="alert" aria-hidden='true'> X</button>
{{session()->get('message')}}

</div>

@endif
<body>
    <div class="form-container">
        <h1>Edit User</h1>
        
        <form action="{{ url('/update_user', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name" required value="{{ $data->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email" required value="{{ $data->email }}">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" placeholder="Phone" required value="{{ $data->phone }}">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Address" required value="{{ $data->address }}">
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" required>
                    <option value="" disabled>Select Role</option>
                    <option value="admin" {{ $data->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="farmer" {{ $data->role == 'farmer' ? 'selected' : '' }}>Farmer</option>
                    <option value="vendor" {{ $data->role == 'vendor' ? 'selected' : '' }}>Vendor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo">
            </div>

            <div class="form-group">
                <input type="submit" value="Edit User Profile" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>