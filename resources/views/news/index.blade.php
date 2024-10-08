<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FontAwesome 6.3.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Dashboard - News List</title>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding-left: 250px;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 1.1rem;
            color: #f8f9fa;
            display: block;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #007bff;
        }

        .navbar {
            margin-left: 250px;
            background-color: #007bff;
            padding: 10px;
        }

        .navbar-brand {
            color: white;
        }

        .dropdown-menu {
            background-color: #007bff;
        }

        .dropdown-menu a {
            color: white;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card h5 {
            font-size: 1.2rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: bold;
        }

        .table {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #007bff;
            color: white;
        }

        .img-thumbnail {
            border: none;
            border-radius: 10px;
            max-width: 150px;
        }

        @media (max-width: 768px) {
            .container-fluid {
                padding-left: 0;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .navbar {
                margin-left: 0;
            }

            .table {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
@include('layouts.sidebar')


    <!-- Sidebar -->
   

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <div class="ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="d-flex flex-column p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>AdminDashboard</h2>
                <a href="{{ route('news.create') }}" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i> New
                </a>
                <a href="{{ url('/berita') }}" class="btn btn-success mx-2">
                    <i class="fa-solid fa-eye"></i> view
                </a>
            </div>

            <!-- Dashboard Cards -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa-solid fa-newspaper"></i> Total News</h5>
                            <p class="card-text">{{ $news->count() }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa-solid fa-check"></i> Published News</h5>
                            <p class="card-text">{{ $news->where('status', 'published')->count() }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa-solid fa-pen"></i> Draft News</h5>
                            <p class="card-text">{{ $news->where('status', 'draft')->count() }}</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Flash Messages -->
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <b>{{ Session::get('success') }}</b>
            </div>
            @elseif (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                <b>{{ Session::get('error') }}</b>
            </div>
            @endif

            <!-- News List Table -->
            <hr>
            <h3>List News</h3>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Preview</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $n)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset("news-images/$n->image") }}" class="img-thumbnail" alt="image">
                        </td>
                        <td>{{ $n->title }}</td>
                        <td>{{ Str::limit($n->content, 100) }}</td>
                        <td>
                            <a href="{{ route('news.edit', $n->id) }}" class="btn btn-warning">
                                <i class="fa-solid fa-edit"></i> Edit
                            </a>
                            <button class="btn btn-danger" onclick="handleDelete({{ $n->id }})">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                            <form action="{{ route('news.destroy', $n->id) }}" method="POST" id="form-delete-{{ $n->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script>
        const handleDelete = (id) => {
            if (confirm('Hapus data ini?')) {
                document.getElementById(`form-delete-${id}`).submit();
            }
        }
    </script>
</body>

</html>
