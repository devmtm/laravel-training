@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Product Details</h2>
        <div style="margin-bottom: 20px;">
            <a href="{{ URL::to('/products') }}" class="">Products</a>
            /
            {{$product->name}}
        </div>
        <div style="margin-bottom: 20px;">
            <a href="{{ URL::to('products/' . $product->id . '/edit' ) }}" class="btn btn-primary">Update</a>
            <div style="display: inline-block;">
                <form action="{{ URL::to('products/' . $product->id ) }}" method="POST">
                    {{@method_field('DELETE')}}
                    {{@csrf_field()}}
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <td>Name</td>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$product->description}}</td>
            </tr>
            <tr>
                <td>Regular Price</td>
                <td>{{$product->regular_price}}</td>
            </tr>
            <tr>
                <td>Sale Price</td>
                <td>{{$product->sale_price}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{$product->status}}</td>
            </tr>
            <tr>
                <td>Image</td>
                <td>{{$product->image}}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{$product->category->name?? ''}}</td>
            </tr>
            <tr>
                <td>User</td>
                <td>{{$product->user_id}}</td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{$product->created_at}}</td>
            </tr>
        </table>
    </div>
@endsection

