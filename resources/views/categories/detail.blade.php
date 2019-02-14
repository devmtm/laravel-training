@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Category Details</h2>
        <div style="margin-bottom: 20px;">
            <a href="{{ URL::to('/categories') }}" class="">Products</a>
            /
            {{$category->name}}
        </div>
        <div style="margin-bottom: 20px;">
            <a href="{{ URL::to('categories/' . $category->id . '/edit' ) }}" class="btn btn-primary">Update</a>
            <div style="display: inline-block;">
                <form action="{{ URL::to('categories/' . $category->id ) }}" method="POST">
                    {{@method_field('DELETE')}}
                    {{@csrf_field()}}
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <td>Name</td>
                <td>{{$category->name}}</td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{$category->created_at}}</td>
            </tr>
        </table>
    </div>
@endsection

