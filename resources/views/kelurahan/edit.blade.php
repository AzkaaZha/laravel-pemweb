<x-layout.admin title="kelurahan">
    <h1>Edit data</h1>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="post">
                    @csrf
                    @method('put')
                    <label for="nama">Nama</label>
                    <input class="form-control" type="text" name="nama" id="nama" value="{{ $kelurahan->nama }}"> <br>
                    <label for="kecamatan">Kecamatan</label>
                    <input class="form-control" type="text" name="kecamatan" id="kecamatan" value="{{ $kelurahan->kecamatan }}"> <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</x-layout.admin>
