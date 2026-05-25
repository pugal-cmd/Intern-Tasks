@extends('layouts.app')

@section('main')

<div class="col-md-6">

<h4>Add User</h4>

<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">
            <a href="{{ route('users.index') }}">User List</a>
        </li>
        <li class="breadcrumb-item active">Add New User</li>
    </ol>
</nav>

<form action="{{ route('users.store') }}" method="POST">

@csrf

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter full name">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email address">
</div>

<div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password">
</div>

<div class="mb-3">
    <label>Select Product</label>

    <select name="product_id" class="form-control">
        <option value="">-- Choose Product --</option>

        @foreach($products as $product)
            <option value="{{ $product->id }}">
                {{ $product->name }}
            </option>
        @endforeach

    </select>
</div>

<button type="submit" class="btn btn-success">
    Save User
</button>

</form>

</div>

@endsection