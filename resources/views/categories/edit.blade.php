@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Category</h2>
        <div style="margin-bottom: 20px;">
            <a href="{{ URL::to('/categories') }}" class="">Products</a>
            /
            {{$category->name}}
        </div>
        <form action="{{URL::to('categories') .'/' . $category->id}}" method="POST">
            {{csrf_field()}}
            {{@method_field('PUT')}}
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{URL::to('/categories')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection

