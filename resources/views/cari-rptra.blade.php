@extends('layouts.app')

@section('content')

<section class="rptra-section py-5">
    <div class="container">
        <h1 class="text-center" style="color: var(--color-success); margin-bottom: 20px; font-weight: 800;">Cari RPTRA</h1>
        <p style="text-align: center; margin-bottom: 40px; color: var(--medium-grey);">
            Temukan lokasi, fasilitas, jam operasional, dan kontak pengelola Ruang Publik Terpadu Ramah Anak (RPTRA) di Jakarta.
        </p>

        <div class="filter-search-container" style="display: flex; flex-direction: column; align-items: center; gap: 20px; margin-bottom: 40px;">
            <input type="text" id="searchRptra" class="search-input" placeholder="Cari RPTRA berdasarkan nama atau alamat...">

            <div class="filter-controls">
                <button class="btn filter-btn active" data-filter="semua">Semua Wilayah</button>
                <button class="btn filter-btn" data-filter="jakpus">Jakarta Pusat</button>
                <button class="btn filter-btn" data-filter="jakut">Jakarta Utara</button>
                <button class="btn filter-btn" data-filter="jakbar">Jakarta Barat</button>
                <button class="btn filter-btn" data-filter="jaksel">Jakarta Selatan</button>
                <button class="btn filter-btn" data-filter="jaktim">Jakarta Timur</button>
                <button class="btn filter-btn" data-filter="kepulauan-seribu">Kepulauan Seribu</button>
            </div>
        </div>

        <div id="rptraList" class="grid-rptra">
        </div>
    </div>
</section>

<div id="rptraModal" class="modal-overlay">
    <div class="modal-content">
        <header class="modal-header">
            <h2 id="modalRptraName">Nama RPTRA</h2>
            <button class="modal-close" aria-label="Tutup Detail RPTRA">&times;</button>
        </header>
        <div class="modal-body">
            <img id="modalRptraImage" src="" alt="Foto RPTRA" class="modal-image" loading="lazy">

            <div class="modal-detail-item">
                <strong><i class="fas fa-map-marker-alt"></i> Alamat Lengkap</strong>
                <span id="modalRptraAddress"></span>
            </div>

            <div class="modal-detail-item">
                <strong><i class="fas fa-tools"></i> Fasilitas Utama</strong>
                <span id="modalRptraFacilities"></span>
            </div>

            <div class="modal-detail-item">
                <strong><i class="far fa-clock"></i> Jam Operasional</strong>
                <span id="modalRptraOperationalHours"></span>
            </div>

            <div class="modal-detail-item">
                <strong><i class="fas fa-phone"></i> Kontak Pengelola</strong>
                <span id="modalRptraContact"></span>
            </div>

            <a id="modalRptraMapLink" href="#" target="_blank" class="btn btn-hero map-link" style="width:100%; margin-top: 20px;">
                <i class="fas fa-external-link-alt"></i> Lihat Lokasi di Peta
            </a>
        </div>
    </div>
</div>

<script>
    // Contoh data RPTRA (window.rptraData) yang akan diakses oleh app.js
    window.rptraData = [{
            id: 1,
            name: "RPTRA Tanjung Elang",
            image: "/images/rptra-tanjung-elang.jpg",
            address: "Jl. Bandara Kemayoran, Jakarta Pusat",
            fasilitas: "Lapangan multifungsi, perpustakaan, ruang laktasi, taman bermain.",
            jam: "08:00 - 18:00 WIB",
            kontak: "021-12345678"
        },
        // ... RPTRA lainnya di sini
    ];
</script>

@endsection