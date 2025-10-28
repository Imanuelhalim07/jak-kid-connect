@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <section class="jumbotron">
        <h1>Temukan Ruang Ramah Anak Terbaik di Jakarta</h1>
        <p>Jak-Kid-Connect adalah portal informasi yang menghubungkan Anda dengan RPTRA (Ruang Publik Terpadu Ramah Anak) dan kegiatan anak di seluruh ibukota.</p>
        <a href="{{ route('rptra.index') }}" class="btn-primary-large">Mulai Cari RPTRA</a>
    </section>

    <section class="highlight-info">
        <h2>Pilar Perlindungan Anak</h2>
        <div class="pilar-grid">
            <div class="pilar-card">
                <h3>4 Prinsip KHA</h3>
                <p>Pelajari fondasi hak anak yang menjadi acuan setiap RPTRA.</p>
                <a href="{{ route('hak-anak') }}" class="btn-secondary">Lihat Selengkapnya</a>
            </div>
            <div class="pilar-card">
                <h3>Post-Test</h3>
                <p>Uji pemahaman Anda tentang Konvensi Hak Anak.</p>
                <a href="{{ route('post-test.show') }}" class="btn-secondary">Ikuti Tes</a>
            </div>
        </div>
    </section>
@endsection