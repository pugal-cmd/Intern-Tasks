@extends('layouts.app')

@section('main')

<div class="container mt-4">

    <h3>Edit User</h3>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Edit User</li>
    </ol>
</nav>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-5 mb-3">
            <label>Name</label>
            <input type="text" name="name"
                   value="{{ $user->name }}"
                   class="form-control"
                   placeholder="Enter name">
        </div>

        <div class="col-md-5 mb-3">
            <label>Email</label>
            <input type="email" name="email"
                   value="{{ $user->email }}"
                   class="form-control"
                   placeholder="Enter email">
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('users.index') }}" class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>

@endsection