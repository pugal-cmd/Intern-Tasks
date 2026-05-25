@extends('layouts.app')

@section('main')

<div class="row">
    <div class="d-flex justify-content-between">
        <h5><i class="bi bi-people-fill"></i> User Details</h5>
    </div>
 <nav aria-label="breadcrumb" class="mt-2 mb-3">
<ol class="breadcrumb bg-light p-2 rounded">
        <li class="breadcrumb-item">
            <a href="{{ url('/') }}">Home</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">
            User List
        </li>

    </ol>
</nav>
    <div class="col-md-12 table-responsive mt-3">

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Product Id</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->product_id }}</td>
                    <td>

    <!-- Edit Icon -->
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>
    </a>

<form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $user->id }})">
        <i class="bi bi-trash"></i>
    </button>
</form>
</form>

</td>
                </tr>
                @endforeach
            </tbody>

        </table>

        {{ $users->links() }}

    </div>
</div>
<script>
function confirmDelete(userId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This user will be deleted permanently!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + userId).submit();
        }
    });
}
</script>
@endsection