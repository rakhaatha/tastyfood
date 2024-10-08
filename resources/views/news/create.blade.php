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

    <title>Add News</title>

    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #495057;
            font-weight: bold;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-success:hover {
            background-color: #218838;
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 2px solid #ced4da;
            margin-bottom: 15px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="file"]:focus {
            border-color: #28a745;
            outline: none;
        }

        input[type="file"] {
            border: 2px dashed #6c757d;
            padding: 20px;
            background-color: #f8f9fa;
            text-align: center;
        }

        input[type="file"]::file-selector-button {
            display: none;
        }

        input[type="file"]::before {
            content: "Choose Image";
            display: inline-block;
            background: #6c757d;
            color: white;
            padding: 5px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 10px;
        }

        input[type="file"]:hover::before {
            background-color: #495057;
        }

        hr {
            margin: 20px 0;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            input[type="text"],
            input[type="file"] {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="d-flex flex-column p-4">
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Add News</h2>
                    <button type="submit" class="btn btn-success">
                        <i class="fa-solid fa-save"></i> Save
                    </button>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <hr>

                @csrf
                <h5>Judul</h5>
                <input type="text" name="title" id="image_name" placeholder="Masukkan Judul Berita" class="mb-3">

                <h5>Isi</h5>
                <input type="text" name="content" id="image_name" placeholder="Masukkan Isi Berita" class="mb-3">

                <h5>Gambar</h5>
                <input type="file" name="image" id="image" class="mb-3">
            </form>
        </div>
    </div>
</body>

</html>
