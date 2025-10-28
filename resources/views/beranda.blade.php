@extends('layouts.app')

@section('title', 'Beranda Utama')

@section('content')
<section class="hero-section">
    <h1>Selamat Datang di Jak-Kid-Connect</h1>
    <p>Aplikasi monitoring kegiatan dan informasi Ruang Publik Terpadu Ramah Anak (RPTRA) di Jakarta.</p>
    <a href="{{ route('rptra.index') }}" class="btn-primary">Cari RPTRA Sekarang</a>
</section>

<section class="fitur-utama">
    <h2>Fitur Kami</h2>
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('assets/images/yoyo.png') }}" alt="Cari RPTRA" style="width: 100px;">
            <h3>Cari RPTRA</h3>
            <p>Temukan lokasi, fasilitas, dan kontak RPTRA terdekat di seluruh wilayah Jakarta.</p>
            <a href="{{ route('rptra.index') }}">Selengkapnya &raquo;</a>
        </div>
        <div class="card">
            <h3>Kegiatan</h3>
            <p>Informasi jadwal dan jenis-jenis kegiatan ramah anak yang akan datang di berbagai RPTRA.</p>
            {{-- Asumsikan Anda memiliki route untuk daftar kegiatan --}}
            <a href="/kegiatan">Selengkapnya &raquo;</a>
        </div>
        <div class="card">
            <h3>Post-Test KHA</h3>
            <p>Uji pengetahuan Anda mengenai Konvensi Hak Anak (KHA) di sini.</p>
            <a href="{{ route('post-test.show') }}">Mulai Tes &raquo;</a>
        </div>
    </div>
</section>
@endsection