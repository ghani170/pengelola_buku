<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        /* nav {
            width: 100%;
            padding: 10px;
            padding-top: 20px;
            margin-bottom: 30px;
            align-items: center;
        }
        nav a, nav form {
            display: inline-block;
            margin-right: 10px;
            color: white;
        }
        nav a {
            text-decoration: none;
            color: white;
            background-color: #6366F1;
            padding: 6px 15px;
            margin-top: 2px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #4F46E5;
        }
        nav form {
            margin: 0;
        } */

        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: sans-serif;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #111827;
      color: white;
      padding: 0.5rem 1rem;
    }

    .navbar .profile {
      font-weight: bold;
      font-size: 1.2rem;
    }

    .navbar .menu {
      display: flex;
      gap: 1rem;
    }

    .navbar .menu a {
      color: white;
      text-decoration: none;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .navbar .menu a:hover {
      background-color:rgb(26, 36, 58);
    }

    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }

    .hamburger div {
      width: 25px;
      height: 3px;
      background-color: rgb(79, 130, 197);
      margin: 4px 0;
    }

    /* Mobile Styles */
    @media (max-width: 768px) {
      .navbar .menu {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        right: 1rem;
        top: 60px;
        width: 150px;
        padding: 1rem;
        border-radius: 5px;
      }

      .navbar .menu.active {
        display: flex;
      }

      .hamburger {
        display: flex;
      }
    }
        table {
            width: 100%;
            align-items: center;
            justify-content: center;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            background-color: #111827;
            color: white;
        }
        .tambah {
            background-color: rgb(28, 155, 194);
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 30px;
            transition: transform 0.3s ease;
        }
        .tambah:hover {
            background-color: rgb(26, 135, 168);
        }
        .container-fluid h1 {
            color: white;
            margin-left: 10px;
            font-size: 30px;
            margin-top: 10px;
            margin-bottom: 15px;
        }
        .formcreate {
            width: 97%;
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            border-radius: 10px;
            background-color: #E5E7EB;
            box-shadow: 7px 7px 7px black;
        }
        .formcreate input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
            box-shadow: inset 2px 5px 10px rgba(161, 150, 150, 0.3);
        }
        .input {
            border: none;
            outline: none;
            border-radius: 15px;
            padding: 1em;
            background-color: #ccc;
            box-shadow: inset 2px 5px 10px rgba(0,0,0,0.3);
            transition: transform 0.3s ease-in-out;
        }
        .input:hover {
            background-color: white;
            transform: scale(1,1.1);
        }
        label {
            font-weight: bold;
            font-size: 20px;
        }
        .wrap-text {
            max-width: 10px;
            word-break: break-word;
            white-space: normal;
        }
        .responsive-container {
            overflow-x: auto;
            width: 100%;
        }
        .input2 {
        margin-left: 20px;
        padding: 10px;
        width: 60px;
        height: 40px;
        border: none;
        outline: none;
        border-radius: 5px;
        box-shadow: 0 1px  gray;
        font-size: 18px;
        transition: width 0.3s;
        font-family: Consolas,monaco,monospace;
        outline: 1px solid blue;
        }

        .input2:focus {
        outline: 1px solid blue;
        box-shadow: none;
        width: 87px;
        }

        .input2::placeholder {
        color: #111827;
        }
        .tomboll{
            background-color: #111827;
            color: white;
            padding: 9px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-left: -10px;
        }
    </style>
</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg" style="background-color: #111827;">
        <div class="container-fluid" style="margin-bottom: 10px; margin-top: 10px;">
            <h1 style="margin-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 10px;">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>{{ Auth::user()->name }}</h1>
            <button class="navbar-toggler" style="background-color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <ul class="nav justify-content-end" style="margin-right: 65px;">
                        <li class="nav-item">
                            <a href="{{ route('bukus.index') }}">Daftar Buku</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('bukus.create') }}">Create</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Logout?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                                    </svg>
                                </button>
                            </form>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav> -->
    <nav class="navbar">
    <div class="profile"><h1 style="margin-left: 10px; margin-top:8px;"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 10px;">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>{{ Auth::user()->name }}</h1></div>
    <div class="hamburger" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="menu" id="navMenu" style="background-color: #111827;">
      <a href="{{ route('bukus.index') }}">Daftar Buku</a>
      <a href="{{ route('bukus.create') }}">Create</a>
      <form action="{{ route('logout') }}" method="POST" style="margin-left: 15px;">
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Logout?')">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
            </svg>
        </button>
       </form>
    </div>
  </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script>
    function toggleMenu() {
      const menu = document.getElementById('navMenu');
      menu.classList.toggle('active');
    }
  </script>
</body>
</html>