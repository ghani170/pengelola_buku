@extends('layout.app')

@section('title', 'Edit Buku')

@section('content')

<form action="{{ route('bukus.update', $buku->id) }}" method="POST" class="formcreate">
    @csrf
    @method('PUT')

    <h2>Edit Buku</h2><br><br>
    <label>Judul:</label><br>
    <input type="text" autocomplete="off" name="judul" class="input" placeholder="Masukkan Judul Buku" id="judul" value="{{ $buku->judul }}"><br><br>

    <label>Penulis:</label><br>
    <input type="text" autocomplete="off" name="penulis" class="input" placeholder="Masukkan Penulis Buku" id="penulis" value="{{ $buku->penulis }}"><br><br>

    <label>Penerbit:</label><br>
    <input type="text" autocomplete="off" name="penerbit" class="input" placeholder="Masukkan Penerbit Buku" id="judul" value="{{ $buku->penerbit }}"><br><br>

    <label>Tahun Terbit:</label><br>
    <!-- <input type="text" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"> -->
    <input type="text" autocomplete="off" name="tahun_terbit" class="input" placeholder="Masukkan Tahun Terbit Buku" id="judul" value="{{ $buku->tahun_terbit }}"><br><br>


    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('bukus.index') }}" style="text-decoration: none; font-size:18px; margin-left:10px;">Kembali</a>
</form>

@endsection