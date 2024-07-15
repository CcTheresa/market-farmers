@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome Vendor</div>
                <div class="card-body">
                    <p class="mb-4">Please specify your order in the form below:</p>

                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('vendor.demands.store') }}" method="POST" enctype="multipart/form-data"
                        class="border rounded-lg p-4">
                        @csrf

                        <div class="form-group row">
                            <label for="product" class="col-md-4 col-form-label text-md-right">Produce</label>
                            <div class="col-md-8">
                                <select id="product" name="product" class="form-control" required>
                                    <option value="Fruits">Fruits</option>
                                    <option value="Vegetables">Vegetables</option>
                                    <option value="Livestock">livestock</option>
                                    <option value="Poultry">poultry</option>
                                    <option value="Dairy">dairy </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="demands" class="col-md-4 col-form-label text-md-right">Demands (specify in kgs)</label>
                            <div class="col-md-8">
                                <input type="number" id="demands" name="demands" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">Location</label>
                            <div class="col-md-8">
                                <input type="text" id="location" name="location" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>
                            <div class="col-md-8">
                                <input type="file" id="photo" name="photo" class="form-control-file" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
