@extends('layouts.app')

@section('content')

<section class="hero-section">
    <div class="container">
        <h1>Jak Kid Connect</h1>
        <p class="hero-text-secondary">Platform utama untuk informasi, partisipasi, dan pengembangan hak-hak anak di Jakarta.</p>
        <a href="{{ route('rptra.index') }}" class="btn btn-hero">Cari RPTRA Terdekat Sekarang</a>
    </div>
</section>

<section class="fitur-utama py-5">
    <div class="container">
        <h2 style="font-weight: 800; color: var(--dark);">Fitur Kami</h2>

        <div class="card-container">

            <div class="card card-kluster">
                <img src="/images/kluster-icon.png" alt="Ikon Kluster" style="height: 50px;">
                <h3>Kluster Hak Anak</h3>
                <p>Pelajari 5 kluster utama yang menjamin hak-hak dasar anak Jakarta.</p>
                <a href="{{ route('kluster') }}">Lihat Detail Kluster &raquo;</a>
            </div>

            <div class="card card-konvensi">
                <img src="/images/konvensi-icon.png" alt="Ikon Konvensi" style="height: 50px;">
                <h3>Konvensi Hak Anak</h3>
                <p>Pahami perjanjian internasional dan pasal-pasal hak anak dari PBB.</p>
                <a href="{{ route('konvensi') }}">Mulai Belajar &raquo;</a>
            </div>

            <div class="card card-kegiatan">
                <img src="/images/kegiatan-icon.png" alt="Ikon Kegiatan" style="height: 50px;">
                <h3>Kegiatan Ramah Anak</h3>
                <p>Temukan ide permainan dan kegiatan edukatif yang seru untuk anak-anak.</p>
                <a href="{{ route('kegiatan.index') }}">Lihat Kegiatan &raquo;</a>
            </div>

            <div class="card card-rptra">
                <img src="/images/rptra-icon.png" alt="Ikon RPTRA" style="height: 50px;">
                <h3>Cari RPTRA</h3>
                <p>Temukan Ruang Publik Terpadu Ramah Anak (RPTRA) terdekat di wilayah Jakarta.</p>
                <a href="{{ route('rptra.index') }}">Cari Lokasi &raquo;</a>
            </div>

        </div>
    </div>
</section>

@endsection