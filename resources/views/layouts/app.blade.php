<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Library Management System') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> <!-- Bootstrap -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8c471; /* Background warna oranye */
            color: #2c3e50; /* Warna teks */
        }

        #header {
            background-color: #e67e22; /* Warna oranye lebih gelap */
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .logo img {
            max-width: 100%;
            border-radius: 10px;
        }

        .dropdown-menu {
            border-radius: 10px;
        }

        #menubar {
            background-color: #d35400; /* Oranye untuk menubar */
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        #menubar .menu li {
            display: inline-block;
            margin-right: 10px;
        }

        #menubar .menu li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #e67e22;
        }

        #footer {
            background-color: #e67e22;
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }

        #footer span a {
            color: white;
            text-decoration: none;
        }

        .container {
            border-radius: 10px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn {
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div id="header">
        <!-- HEADER -->
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('images/library.png') }}"></a>
                    </div>
                </div>
                <div class="offset-md-2 col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi {{ auth()->user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('change_password') }}">Change Password</a>
                            <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">Log Out</a>
                        </div>
                        <form method="post" id="logoutForm" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /HEADER -->
    <div id="menubar">
        <!-- Menu Bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu">
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('authors') }}">Penulis</a></li>
                        <li><a href="{{ route('publishers') }}">Publishers</a></li>
                        <li><a href="{{ route('categories') }}">Kategori</a></li>
                        <li><a href="{{ route('books') }}">Buku</a></li>
                        <li><a href="{{ route('students') }}">Siswa</a></li>
                        <li><a href="{{ route('book_issued') }}">Peminjaman Buku</a></li>
                        <li><a href="{{ route('reports') }}">Laporan</a></li>
                        <li><a href="{{ route('settings') }}">Pengaturan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /Menu Bar -->

    @yield('content')

    <!-- FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>© Copyright {{ now()->format("Y") }} <a href="https://shootfellowship.com/">Shoot Fellowship</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /FOOTER -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
