@extends('layout.app')

@section('title', 'Daftar Buku')

@section('content')
    <div style="margin-top: 30px; display: flex; align-items: center;">
        <form action="{{ route('bukus.index') }}" method="GET">
            <input placeholder="Cari..." class="input2" name="search" type="text" value="{{ request('search') }}">
            <button type="submit" class="tomboll"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></button>
        </form>
        <a href="{{ route('bukus.create') }}" class="tambah">
            <!-- Icon tambah -->
            Tambah Buku
        </a>
        
    </div>

    <div class="responsive-container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>
                        <a href="{{ route('bukus.edit', $buku->id) }}" class="btn btn-primary mb-1">Edit</a>
                        <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin mau hapus?')" class="btn btn-danger mb-1">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
