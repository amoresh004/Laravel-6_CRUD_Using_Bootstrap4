@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(Session::has('success'))
                <div class="alert alert-success"> {{ Session::get('success') }} </div>
            @endif
            <div class="card">
                <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
                <h3>All Products</h3>
                <a class="btn btn-light" href="{{route('products.create')}}">Add new product</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->details }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{ route('products.edit', ['id' =>$product->id]) }}">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('products.destroy', ['id' =>$product->id]) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
