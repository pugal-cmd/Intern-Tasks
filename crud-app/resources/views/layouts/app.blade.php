<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C R U D</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/616/616499.png">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <style>
body {
    margin: 0;
    min-height: 100vh;
    background: white;
    overflow-x: hidden;
    overflow-y: auto;
    position: relative;
}

/* Moving background blobs */
.bg-animation {
    position: fixed;
    inset: 0;
    z-index: -1;
    overflow: hidden;
}

.blob {
    position: absolute;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    filter: blur(120px);
    opacity: 0.4;
    animation: move 15s infinite alternate ease-in-out;
}

.blob1 {
    background: #ff6b6b;
    top: 10%;
    left: 5%;
}

.blob2 {
    background: #4d96ff;
    top: 50%;
    right: 10%;
    animation-duration: 18s;
}

.blob3 {
    background: #6bff95;
    bottom: 5%;
    left: 35%;
    animation-duration: 20s;
}

.blob4 {
    background: #ffd93d;
    top: 20%;
    right: 35%;
    animation-duration: 22s;
}

@keyframes move {
    0% {
        transform: translate(0, 0) scale(1);
    }
    50% {
        transform: translate(100px, -80px) scale(1.2);
    }
    100% {
        transform: translate(-80px, 100px) scale(0.9);
    }
}
</style>

<div class="bg-animation">
    <div class="blob blob1"></div>
    <div class="blob blob2"></div>
    <div class="blob blob3"></div>
    <div class="blob blob4"></div>
</div>
    <nav class="navbar navbar-expand bg-black">
        <div class="container-fluid">
<a href="/" class="navbar-brand text-light text-decoration-none text-center fw-bold">
    CRUD Operations
</a>
        </div>
    </nav>
    <div class="container mt-5" >
       <div class="row">
        @yield('main')
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    @if(session('success'))
    Swal.fire({
      icon: 'success',
      title: 'Success',
      text: "{{ session('success') }}",
      timer: 2000,
      showConfirmButton: false
});
@endif
</script>
<script>
function confirmDelete(id) {
    Swal.fire({
        title: "Are you sure?",
        text: "This action cannot be undone!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    });
}
</script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
