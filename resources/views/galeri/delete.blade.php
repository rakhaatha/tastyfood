<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2>Are you sure you want to delete this gallery item?</h2>
                <p>This action cannot be undone.</p>
                
                <!-- Show image preview -->
                <div class="mb-3">
                    <img src="{{ asset('images/'.$gallery->image) }}" class="img-thumbnail" alt="Gallery Image" width="200">
                </div>

                <!-- Confirmation buttons -->
                <form action="{{ route('galeri.destroy', $gallery->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
