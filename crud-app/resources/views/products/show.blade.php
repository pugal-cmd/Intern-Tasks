@extends('layouts.app')
@section('main')
    <h5><i class="bi bi-pencil-square"></i>Product Details</h5>
            <nav class="my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home </a></li>
                <li class="breadcrumb-item-active"> /  View Product</li>
            </ol>
        </nav>
        <div class="card">
        <img src="{{ asset('pictures/' . $product->image) }}" alt="image"
         class="card-img-top">
                 <div class="card-body">
                <div class="card-title fw-bold">{{$product->name}}</div>
<p>{{$product->description}}</p>          
<p class="fw-bold">M R P = <small class="text-danger text-decoration-line-through">Rs {{$product->mrp}}</small></p>
<p class="fw-bold">Selling Price = <small class="text-success">Rs {{$product->price}}</small></p>

</div>
        </div>
@endsection
