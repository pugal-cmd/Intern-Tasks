@extends('layouts.app')
@section('main')
 <div class="row">
            <div class="d-flex justify-content-between">
                <h5><i class="bi bi-journal-richtext"></i> Product details</h5>
              <a href="{{ route('products.create') }}" class="btn btn-primary ms-3"><i class="bi bi-journal-richtext"></i>New Product</a>
             <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="bi bi-journal-richtext"></i>New User</a>

            </div>
            <div class="col-md-12 table-responsive mt-3">
                <table class=" table table-bordered">
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>M.R.P</th>
                        <th>Selling Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach ($products as $product)
                    @php
                        $index = ($products->currentPage() - 1) * $products->perPage() + $loop->iteration;
                    @endphp
                        <tr>
                            <td>{{$index}}</td>
                            <td>
                            <img src="{{ asset('pictures/' . $product->image) }}"
                            style="width: 50px; height: 50px; object-fit: contain;"
                            alt="Mobile">
                            </td>                           
                             <td><a href="products/{{$product->id}}/show" class="text-decoration-none">{{$product->name}}</a></td>
                            <td>{{$product->mrp}}</td>
                            <td>{{$product->price}}</td>
                            <td class=" d-flex justify-content-between">
                                <a href="products/{{$product->id}}/edit" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
<form id="delete-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button type="button"
        class="btn btn-danger btn-sm"
        onclick="confirmDelete({{ $product->id }})">
        <i class="bi bi-trash"></i>
    </button>
</form>
</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
            </div>
        </div>
        
@endsection
