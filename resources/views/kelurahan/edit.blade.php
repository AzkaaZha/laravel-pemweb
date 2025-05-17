<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit data</h1>
    <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="post">
        @csrf
        @method("put")
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $kelurahan->nama}}"> <br>
        <label for="kecamatan">Kecamatan</label>
        <input type="text" name="kecamatan" id="kecamatan" value="{{ $kelurahan->kecamatan}}"> <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>