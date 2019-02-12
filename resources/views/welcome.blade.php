@extends('layout')

@section('content')
    <div class="jumbotron text-center">
        <h1>Backend Training</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3><a href="{{ URL::to('/products') }}" class="">Products</a></h3>
                <p>Manage Your Products</p>
            </div>
            <div class="col-sm-4">
                <h3><a href="{{ URL::to('/categories') }}" class="">Categories</a></h3>
                <p>Manage Your Business Categories</p>
            </div>
            <div class="col-sm-4">
                <h3><a href="{{ URL::to('/reviews') }}" class="">Reviews</a></h3>
                <p>Monitor Customer Feedback</p>
            </div>
        </div>
    </div>

@endsection

