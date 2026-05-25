@extends('layouts.app')
@section('main')
    
    <h5><i class="bi bi-pencil-square"></i>Edit Product</h5>
        <hr />
       <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home </a></li>
                <li class="breadcrumb-item-active"> / Edit Product</li>
            </ol>
        </nav>
        
        <div class="col-md-8">
<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-12">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" id="name" class="form-control
                      @if($errors->has('name')) is-invalid @endif
                      " placeholder="Enter Product Name" value="{{ old('name', $product->name) }}">
                       @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
                    </div>
                </div>
    <div class="row mb-3">
    <div class="col-md-6">
        <label for="mrp" class="form-label">M R P</label>
        <input type="text" name="mrp" id="mrp" class="form-control
        @if($errors->has('mrp')) is-invalid @endif
        " placeholder="Enter M R P " value="{{ old('mrp', $product->mrp) }}">
         @error('mrp')
            <div class="invalid-feedback">
                {{ $message }}
        @enderror
            </div>
    </div>

    <div class="col-md-6">
        <label for="price" class="form-label">Selling Price</label>
        <input type="text" name="price" id="price" class="form-control
        @if($errors->has('price')) is-invalid @endif
        " placeholder="Enter Selling Price " value="{{ old('price', $product->price) }}">
         @error('price')
            <div class="invalid-feedback">
                {{ $message }}
        @enderror
            </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-12">
        <label for="description"></label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control @if($errors->has('description')) is-invalid @endif" style="resize: none; height: 150px"; placeholder="Enter Description" {{ old('description', $product->description) }}></textarea>
       
         @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        
    </div>
</div>
<div class="row mb-3">
                    <div class="col-md-12">
                      <label for="image" class="form-label">Product Image</label>
                      <input type="file" name="image" id="image"  class="form-control  @if($errors->has('image')) is-invalid @endif">
                    @if($errors->has('image')) is-invalid @endif
                      @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
                    </div>
                </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
                                <button type="reset" class="btn btn-danger">Reset </button>

            </div>
            </form>
        </div>
@endsection