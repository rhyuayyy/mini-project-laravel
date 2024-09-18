<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Restoran</title>
</head>
<body>
    <h1>Edit Restoran</h1>

    <form action="{{ route('restaurants.update', $restaurant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nama Restoran</label>
            <input type="text" name="name" id="name" value="{{ $restaurant->name }}" required>
        </div>
        <div>
            <label for="location">Lokasi</label>
            <input type="text" name="location" id="location" value="{{ $restaurant->location }}" required>
        </div>
        <div>
            <label for="cuisine">Jenis Masakan</label>
            <input type="text" name="cuisine" id="cuisine" value="{{ $restaurant->cuisine }}" required>
        </div>
        <div>
            <label for="capacity">Kapasitas</label>
            <input type="number" name="capacity" id="capacity" value="{{ $restaurant->capacity }}" required min="0">
        </div>
        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('restaurants.index') }}">Kembali ke Daftar Restoran</a>
</body>
</html>
