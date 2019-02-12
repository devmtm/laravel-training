@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Products</h2>
        <div>
            <a href="{{ URL::to('/products/create') }}" class="btn btn-success">New</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td><?php echo $product->regular_price ?></td>
                <td><?= $product->status ?></td>
                <td>
                    <a href="{{ URL::to('products/' . $product->id . '/edit' ) }}" class="btn btn-primary">Update</a>
                    <a href="{{ URL::to('products/' . $product->id ) }}" class="btn btn-info">Detail</a>
                    <div style="display: inline-block;">
                        <form action="{{ URL::to('products/' . $product->id ) }}" method="POST">
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

