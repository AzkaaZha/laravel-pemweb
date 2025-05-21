<x-layout.admin title="kelurahan">
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
</x-layout.admin>