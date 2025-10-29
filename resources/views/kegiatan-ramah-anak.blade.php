@extends('layouts.app')

@section('content')

<section class="kegiatan-section py-5">
    <div class="container">
        <h1 class="text-center" style="color: var(--color-accent); margin-bottom: 50px; font-weight: 800;">Kegiatan Ramah Anak</h1>

        <p style="text-align: center; margin-bottom: 40px; color: var(--medium-grey);">
            Jelajahi berbagai permainan tradisional dan kegiatan seru yang dapat dilakukan anak-anak untuk mengisi waktu luang dan meningkatkan interaksi sosial mereka.
        </p>

        <div class="kegiatan-grid">

            <div class="kegiatan-card">
                <img src="/images/baktiak.jpg" alt="Foto Bakda'an/Ketapel" loading="lazy">
                <div class="card-body">
                    <h2>Bakda'an (Ketapel)</h2>
                    <p class="meta"><i class="fas fa-users"></i> 1 - 2 Pemain | <i class="fas fa-map-marker-alt"></i> Luar Ruangan</p>
                    <p class="desc">Permainan ketangkasan menggunakan alat berbentuk Y untuk melontarkan biji-bijian atau peluru kecil. Mengasah fokus dan koordinasi mata-tangan.</p>
                </div>
            </div>

            <div class="kegiatan-card">
                <img src="/images/enggrang.jpg" alt="Foto Enggrang" loading="lazy">
                <div class="card-body">
                    <h2>Enggrang</h2>
                    <p class="meta"><i class="fas fa-users"></i> 1+ Pemain | <i class="fas fa-map-marker-alt"></i> Luar Ruangan</p>
                    <p class="desc">Berjalan menggunakan dua tongkat panjang dengan pijakan kaki. Melatih keseimbangan tubuh dan meningkatkan rasa percaya diri.</p>
                </div>
            </div>

            <div class="kegiatan-card">
                <img src="/images/congklak.jpg" alt="Foto Congklak" loading="lazy">
                <div class="card-body">
                    <h2>Congklak (Dakon)</h2>
                    <p class="meta"><i class="fas fa-users"></i> 2 Pemain | <i class="fas fa-map-marker-alt"></i> Dalam Ruangan</p>
                    <p class="desc">Permainan strategi dengan papan berlubang dan biji-bijian. Melatih kemampuan berhitung dan berpikir strategis.</p>
                </div>
            </div>

            <div class="kegiatan-card">
                <img src="/images/ular-naga.jpg" alt="Foto Ular Naga Panjang" loading="lazy">
                <div class="card-body">
                    <h2>Ular Naga Panjang</h2>
                    <p class="meta"><i class="fas fa-users"></i> 5+ Pemain | <i class="fas fa-map-marker-alt"></i> Luar Ruangan</p>
                    <p class="desc">Permainan kelompok di mana pemain melewati terowongan yang dibentuk dua pemain. Melatih kerjasama tim dan kecepatan.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection