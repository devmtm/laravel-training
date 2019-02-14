@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Categories</h2>
        <div>
            <a href="{{ URL::to('/categories/create') }}" class="btn btn-success">New</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ URL::to('categories/' . $category->id . '/edit' ) }}" class="btn btn-primary">Update</a>
                    <a href="{{ URL::to('categories/' . $category->id ) }}" class="btn btn-info">Detail</a>
                    <div style="display: inline-block;">
                        <form action="{{ URL::to('categories/' . $category->id ) }}" method="POST">
                            {{@method_field('DELETE')}}
                            {{@csrf_field()}}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

