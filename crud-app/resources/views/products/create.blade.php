@extends('layouts.app')

@section('main')

<h5><i class="bi bi-plus-square-fill"></i> Add New Product</h5>
<hr />

<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Add New Product</li>
    </ol>
</nav>

<div class="col-md-8">

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Product Name -->
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name"
                    class="form-control @error('name') is-invalid @enderror"
                    placeholder="Enter Product Name"
                    value="{{ old('name') }}">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <!-- Prices -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="mrp" class="form-label">M R P</label>
                <input type="text" name="mrp" id="mrp"
                    class="form-control @error('mrp') is-invalid @enderror"
                    placeholder="Enter M R P"
                    value="{{ old('mrp') }}">

                @error('mrp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="price" class="form-label">Selling Price</label>
                <input type="text" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror"
                    placeholder="Enter Selling Price"
                    value="{{ old('price') }}">

                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <!-- Description -->
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>

                <textarea name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror"
                    rows="4"
                    style="resize: none;"
                    placeholder="Enter Description">{{ old('description') }}</textarea>

                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <!-- Image -->
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="image" class="form-label">Product Image</label>

                <input type="file" name="image" id="image"
                    class="form-control @error('image') is-invalid @enderror">

                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <!-- Buttons -->
        <div class="mb-3">
            <button type="submit" class="btn btn-success">
                Save
            </button>

            <button type="reset" class="btn btn-danger">
                Reset
            </button>
        </div>

    </form>

</div>

@endsection