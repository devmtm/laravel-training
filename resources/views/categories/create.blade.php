@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 style="margin-top: 0px;">Crete Category</h2>
        <form action="{{URL::to('categories')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{URL::to('/categories')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection

