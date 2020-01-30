@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
                    <h3>Add New Products</h3>
                    <a class="btn btn-light" href="{{route('products.index')}}">Back To All Products</a>
                </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-3">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(Session::has('success'))
                    <div class="alert alert-success"> {{ Session::get('success') }} </div>
                    @endif
                        <form action="{{route('products.store')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter product name">
                            </div>
                            <div class="form-group">
                                <label for="">Product Details</label>
                                <input type="text" class="form-control" name="details" value="{{ old('details') }}" placeholder="Enter product details">
                                <!-- <textarea type="text" class="form-control" name="details" value="{{ old('details') }}" placeholder="Enter product details"></textarea> -->
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection