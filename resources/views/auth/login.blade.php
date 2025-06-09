@extends(('layout.logapp'))

@section('title', 'Login')

@section('content')
<h2>Login</h2>
@if(session('success'))
    <p style="color: green;">Login berhasil</p>
@endif
@if(session('errors'))
    <p style="color: red; text-align:center;">Password atau email salah</p>
@endif
<form method="POST" action="{{ route('login') }} ">
    @csrf
    <div style="text-align: center;">
    
    <input placeholder="Masukan Email" type="email" name="email" class="input" id="email" style="margin-bottom: 15px;" required><br>

    <input placeholder="Masukan Password" type="password" name="password" class="input" id="password" style="margin-bottom: 15px;" required><br>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 26px;">Login</button>

</form>
<p style="margin-left: 26px;">Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
@endsection