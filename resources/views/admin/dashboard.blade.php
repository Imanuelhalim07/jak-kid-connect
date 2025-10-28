@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<header class="admin-header">
    <h1>Overview Dashboard</h1>
</header>

<div class="stats-grid">
    <div class="card stat-card">
        <h2>Total RPTRA Terdaftar</h2>
        <p class="count">{{ $totalRptra ?? 0 }}</p>
        <a href="{{ route('admin.rptras.index') }}">Kelola RPTRA</a>
    </div>

    <div class="card stat-card">
        <h2>Total Kegiatan</h2>
        <p class="count">{{ $totalKegiatan ?? 0 }}</p>
        <a href="{{ route('admin.kegiatans.index') }}">Kelola Kegiatan</a>
    </div>

    <div class="card stat-card">
        <h2>Total Pengguna</h2>
        <p class="count">{{ $totalUsers ?? 0 }}</p>
        <a href="{{ route('admin.users.index') }}">Kelola User</a>
    </div>
</div>

{{-- Anda bisa menambahkan grafik atau statistik terbaru di sini --}}
@endsection