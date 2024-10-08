<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Visi dan Misi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Visi dan Misi</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

         <form action="{{ route('admin.about.update') }}" method="POST">
            @csrf
            @method('PUT') <!-- Menambahkan metode PUT di form -->
            <div class="mb-3">
                <label for="visi" class="form-label">Visi</label>
                <textarea class="form-control" id="visi" name="visi" rows="5">{{ $about->visi ?? '' }}</textarea>
            </div>
            <div class="mb-3">
                <label for="misi" class="form-label">Misi</label>
                <textarea class="form-control" id="misi" name="misi" rows="5">{{ $about->misi ?? '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
