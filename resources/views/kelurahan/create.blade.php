<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah data</h1>
    <form action="{{ route('kelurahan.store') }}" method="post">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama"> <br>
        <label for="kecamatan">Kecamatan</label>
        <input type="text" name="kecamatan" id="kecamatan"> <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>