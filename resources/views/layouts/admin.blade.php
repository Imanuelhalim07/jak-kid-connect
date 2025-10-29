<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | @yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield('styles')
</head>

<body class="admin-layout">
    <div id="admin-wrapper">

        {{-- SIDEBAR/NAVIGASI ADMIN --}}
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Panel</h2>
                <p>Jak-Kid-Connect</p>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.rptras.index') }}" class="{{ request()->routeIs('admin.rptras.*') ? 'active' : '' }}">Manajemen RPTRA</a></li>
                    <li><a href="{{ route('admin.kegiatans.index') }}" class="{{ request()->routeIs('admin.kegiatans.*') ? 'active' : '' }}">Manajemen Kegiatan</a></li>
                    <li><a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">Manajemen Users</a></li>
                    <li><a href="{{ route('home') }}">Kembali ke Website</a></li>
                </ul>
            </nav>
        </aside>

        {{-- MAIN CONTENT --}}
        <div class="main-content-area">
            <header class="topbar">
                <div class="user-info">
                    Selamat datang, {{ auth()->user()->name }}
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout-admin">Logout</button>
                </form>
            </header>

            <main class="admin-content">
                @yield('content')
            </main>

            <footer class="admin-footer">
                <p>&copy; {{ date('Y') }} Admin Jak-Kid-Connect</p>
            </footer>
        </div>
    </div>

    @yield('scripts')
</body>

</html>