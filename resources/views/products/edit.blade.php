@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Product</h2>
        <div style="margin-bottom: 20px;">
            <a href="{{ URL::to('/products') }}" class="">Products</a>
            /
            {{$product->name}}
        </div>
        <form action="{{URL::to('products') .'/' . $product->id}}" method="POST">
            {{csrf_field()}}
            {{@method_field('PUT')}}
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>

            <div class="form-group">
                <label for="name">Product Description:</label>
                <textarea type="text" class="form-control" id="description" name="description">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="name">Product Price:</label>
                <input type="text" class="form-control" value="{{ $product->regular_price }}" id="regular_price" name="regular_price">
            </div>

            <div class="form-group">
                <label for="name">Product Sale Price:</label>
                <input type="nunber" class="form-control" value="{{ $product->sale_price }}" id="sale_price" name="sale_price">
            </div>

            <div class="form-group">
                <label for="name">Product Status:</label>
                <input type="text" class="form-control" value="{{ $product->status }}" id="status" name="status">
            </div>

            <div class="form-group">
                <label for="name">Product Category:</label>
                <select type="text" class="form-control" id="category_id" name="category_id">
                    <option>Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{($category->id == $product->category_id)? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{URL::to('/products')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection

