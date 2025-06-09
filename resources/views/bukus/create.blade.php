@extends('layout.app')

@section('title', 'Create Buku')

@section('content')

<form action="{{ route('bukus.store') }}" method="POST" class="formcreate">
    @csrf
    <h2>Buat buku baru</h2><br><br>
    
    <label for="judul">Judul:</label>
    <input type="text" autocomplete="off" name="judul" class="input" placeholder="Masukkan Judul Buku"><br><br>

    <label for="penulis">Penulis:</label>
    <input type="text" autocomplete="off" name="penulis" class="input" placeholder="Masukkan Penulis Buku"><br><br>

    <label for="penerbit">Penerbit:</label>
    <input type="text" autocomplete="off" name="penerbit" class="input" placeholder="Masukkan Penerbit Buku"><br><br>

    <label for="tahun_terbit">Tahun Terbit:</label>
    <input type="text" autocomplete="off" name="tahun_terbit" class="input" placeholder="Masukkan Tahun Terbit Buku"><br><br>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('bukus.index') }}" style="text-decoration: none; font-size:18px; margin-left:10px;">kembali</a>
</form>
@endsection
