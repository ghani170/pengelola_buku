@extends('layout.logapp')
@section('title', 'Register')

@section('content')
<h2>Register</h2>
@if($errors->any())
    <p style="color: green; text-align:center;">Password min 8 character</p>
@endif
<form method="POST" action="{{ route('register') }} ">
    @csrf
    <div style="text-align: center;">
    <input placeholder="Masukan Nama" type="text" name="name" class="input" id="name" value="{{ old('name') }}" style="margin-bottom: 15px;" required><br>

    <input placeholder="Masukan Email" type="email" name="email" class="input" id="email" value="{{ old('email') }}" style="margin-bottom: 15px;" required><br>

    <input placeholder="Masukan password" type="password" name="password" class="input" id="password" style="margin-bottom: 15px;" required><br>

    <input placeholder="Masukan password" type="password" name="password_confirmation" class="input" id="password_confirmation" style="margin-bottom: 15px;" required><br>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 26px;">Submit</button>
</form>
<p style="margin-left: 26px;">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
@endsection