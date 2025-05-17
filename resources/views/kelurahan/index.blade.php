<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelurahan</title>
</head>
<body>
    <h1>Kelurahan</h1>
    <a href="{{ route('kelurahan.create') }}">Tambah</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($kelurahan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kecamatan }}</td>
                <td>
                    <a href="{{ route('kelurahan.edit', $item->id)}}">edit</a>
                    <form action="{{ route('kelurahan.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>