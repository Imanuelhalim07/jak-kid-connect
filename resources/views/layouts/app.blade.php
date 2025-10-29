<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jak Kid Connect</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <header>
        <div class="navbar container">
            <a href="{{ route('home') }}" class="logo">
                <img src="/images/logo.png" alt="Jak Kid Connect Logo">
            </a>

            <ul class="nav-links">
                {{-- Urutan: Beranda (Hitam), Tentang Kami (Hitam), Kluster (Biru), Konvensi (Merah) --}}
                <li class="nav-home"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="nav-about"><a href="{{ route('about') }}">Tentang Kami</a></li>
                <li class="nav-kluster"><a href="{{ route('kluster') }}">Kluster Hak Anak</a></li>

                {{-- Dropdown Konvensi (Merah) --}}
                <li class="dropdown nav-konvensi">
                    <a href="{{ route('konvensi') }}">Konvensi Hak Anak <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="{{ route('pretest') }}">Pre-Test (Awal Materi)</a>
                        <a href="{{ route('posttest') }}">Post-Test (Akhir Materi)</a>
                    </div>
                </li>

                {{-- Kegiatan (Kuning), RPTRA (Hijau), Login (Hitam) --}}
                <li class="nav-kegiatan"><a href="{{ route('kegiatan.index') }}">Kegiatan Ramah Anak</a></li>
                <li class="nav-rptra"><a href="{{ route('rptra.index') }}">Cari RPTRA</a></li>

                @guest
                <li class="nav-login"><a href="{{ route('login') }}" class="btn-plain">Login</a></li>
                {{-- Register bisa diletakkan di bawah tombol Login jika diperlukan, atau dihilangkan/dijadikan tombol sekunder --}}
                @else
                {{-- Tampilan setelah Login (Logout) --}}
                <li class="dropdown nav-user">
                    <a href="#">{{ Auth::user()->name }} <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        @if(Auth::user()->role == 'admin')
                        <a href="{{ url('/admin') }}">Dashboard Admin</a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container footer-content">
            <div class="footer-col footer-logo-col">
                <img src="/images/logo.png" alt="Jak Kid Connect Logo">
                <p>Pusat informasi dan partisipasi untuk mewujudkan Jakarta sebagai Kota Layak Anak.</p>
            </div>

            <div class="footer-col footer-contact">
                <h3>Hubungi Kami</h3>
                <p><i class="fas fa-phone-alt"></i> +62 812-3456-7890</p>
                <p><i class="fas fa-envelope"></i> info@jakkidconnect.com</p>
                <p><i class="fas fa-map-marker-alt"></i> DKI Jakarta, Indonesia</p>
            </div>

            <div class="footer-col footer-social">
                <h3>Ikuti Kami</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/jakkidconnect" target="_blank" aria-label="Instagram Jak Kid Connect"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" aria-label="Twitter Jak Kid Connect"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" aria-label="Facebook Jak Kid Connect"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-copyright container">
            <p>&copy; Copyright 2025 Jak Kid Connect. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>

</html>