<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    {{-- FontAwesome 6.3.0 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>News List</title>
    <style>
        body {
            display: flex;
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }

        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            height: 100vh;
            position: fixed;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
            transition: background 0.3s ease;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            font-size: 24px;
            font-weight: bold;
            color: #343a40;
        }

        .btn {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-primary, .btn-success {
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        table {
            margin-top: 20px;
            background-color: #f9f9f9;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        table thead {
            background-color: #343a40;
            color: white;
        }

        table th, table td {
            padding: 12px 20px;
            text-align: left;
            vertical-align: middle;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .img-thumbnail {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .alert {
            transition: opacity 0.3s ease;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .content {
                margin-left: 0;
                width: 100%;
                padding: 10px;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                padding: 10px;
            }

            table th, table td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    @include('layouts.sidebar')

    <div class="content">
        <div class="alert alert-info"></div>

        <div class="d-flex flex-column p-4">
            <div class="d-flex justify-content-between mb-4">
                <div>
                    <h2>Galeri</h2>
                </div>
                <div>
                    <a href="{{ route('galeri.create') }}" class="btn btn-primary">
                        <i class="fa-solid fa-plus"></i> Tambah Gambar
                    </a>
                    <a href="{{ url('/image') }}" class="btn btn-success">
                        <i class="fa-solid fa-eye"></i> Lihat di Galeri
                    </a>
                </div>
            </div>

            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <b>{{ Session::get('success') }}</b>
            </div>
            @elseif (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                <b>{{ Session::get('error') }}</b>
            </div>
            @endif

            <hr>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Preview</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galeris as $galeri)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('images/'.$galeri->image) }}" class="img-thumbnail" alt="galeri Image">
                        </td>
                        <td>
                            <button class="btn btn-danger" onclick="handleDelete({{ $galeri->id }})">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                            <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" id ="form-delete-{{ $galeri->id }}">
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

    <script>
        const handleDelete = (id) => {
            if (confirm('Hapus data ini?')) {
                document.getElementById(`form-delete-${id}`).submit();
            }
        }
    </script>
</body>

</html>
