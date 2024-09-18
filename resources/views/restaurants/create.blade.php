<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Restoran</title>
</head>
<body>

    <h1>Data Restoran</h1>

    <form action="{{ route('restaurants.store') }}" method="POST">
        @csrf

        <table>
            <tr>
                <td><label for="name">Nama Restoran:</label></td>
                <td><input type="text" name="name" id="name" value="{{ old('name') }}" required></td>
            </tr>
            <tr>
                <td><label for="location">Lokasi:</label></td>
                <td><input type="text" name="location" id="location" value="{{ old('location') }}" required></td>
            </tr>
            <tr>
                <td><label for="cuisine">Jenis Masakan:</label></td>
                <td><input type="text" name="cuisine" id="cuisine" value="{{ old('cuisine') }}" required></td>
            </tr>
            <tr>
                <td><label for="capacity">Kapasitas:</label></td>
                <td><input type="number" name="capacity" id="capacity" value="{{ old('capacity') }}" required min="0"></td>
            </tr>
        </table>

        <br>
        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('restaurants.index') }}">Kembali ke Daftar Restoran</a>

</body>
</html>
