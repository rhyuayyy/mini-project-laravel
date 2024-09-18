<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Restoran</title>
</head>
<body>

    <h1>Daftar Restoran</h1>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <a href="{{ route('restaurants.create') }}">Data Restoran</a>

    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; border-collapse:collapse;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Lokasi</th>
                <th>Jenis Masakan</th>
                <th>Kapasitas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($restaurants as $restaurant)
            <tr>
                <td>{{ $restaurant->name }}</td>
                <td>{{ $restaurant->location }}</td>
                <td>{{ $restaurant->cuisine }}</td>
                <td>{{ $restaurant->capacity }}</td>
                <td>
                    <a href="{{ route('restaurants.edit', $restaurant->id) }}">Edit</a> | 
                    <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Tidak ada data restoran.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
