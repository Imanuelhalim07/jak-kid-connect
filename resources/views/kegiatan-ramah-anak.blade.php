@extends('layouts.app')

@section('title', 'Daftar Kegiatan')

@section('content')
<section class="kegiatan-list">
    <h1>Kegiatan Ramah Anak Terbaru</h1>
    <p class="intro">Temukan berbagai kegiatan edukatif dan menyenangkan yang diselenggarakan di RPTRA Jakarta.</p>

    <div class="kegiatan-grid">
        @forelse ($kegiatans as $kegiatan)
        <article class="kegiatan-card">
            <img src="{{ asset($kegiatan->image) }}" alt="{{ $kegiatan->title }}">
            <div class="card-body">
                <h2>{{ $kegiatan->title }}</h2>
                <p class="meta">
                    <span>Tanggal: {{ $kegiatan->date->format('d F Y') }}</span>
                    <span>Lokasi: {{ $kegiatan->location }}</span>
                </p>
                <p>{{ Str::limit($kegiatan->description, 100) }}</p>
                {{-- Anda bisa membuat rute show/detail kegiatan jika diperlukan --}}
                <a href="/kegiatan/{{ $kegiatan->id }}" class="btn-detail">Lihat Detail &raquo;</a>
            </div>
        </article>
        @empty
        <p>Saat ini belum ada kegiatan yang terjadwal. Silakan cek kembali nanti!</p>
        @endforelse
    </div>
</section>
@endsection