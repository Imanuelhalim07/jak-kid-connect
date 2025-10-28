@extends('layouts.app')

@section('title', 'Kluster Hak Anak')

@section('content')
<section class="kluster-kha">
    <h1>5 Kluster Utama Konvensi Hak Anak</h1>
    <p class="intro">Hak-hak anak dikelompokkan menjadi lima kluster utama untuk memudahkan pemahaman dan implementasi:</p>

    <div class="kluster-list">
        <article class="kluster-item">
            <h2>1. Hak Sipil dan Kebebasan</h2>
            <p>Meliputi hak nama, kewarganegaraan, berpendapat, dan kebebasan berekspresi.</p>
        </article>
        <article class="kluster-item">
            <h2>2. Lingkungan Keluarga dan Pengasuhan Alternatif</h2>
            <p>Meliputi hak untuk hidup bersama orang tua, perlindungan dari kekerasan, dan pengasuhan yang layak.</p>
        </article>
        <article class="kluster-item">
            <h2>3. Kesehatan Dasar dan Kesejahteraan</h2>
            <p>Meliputi hak atas pelayanan kesehatan, gizi, dan lingkungan hidup yang sehat.</p>
        </article>
        <article class="kluster-item">
            <h2>4. Pendidikan, Pemanfaatan Waktu Luang dan Kegiatan Budaya</h2>
            <p>Meliputi hak pendidikan gratis, hak berkreasi, dan hak bermain.</p>
        </article>
        <article class="kluster-item">
            <h2>5. Perlindungan Khusus</h2>
            <p>Meliputi hak perlindungan bagi anak dalam situasi khusus (pengungsi, konflik, eksploitasi, dll).</p>
        </article>
    </div>

    <div class="link-detail">
        <a href="{{ route('hak-anak') }}">Lihat Konvensi Lengkap &raquo;</a>
    </div>
</section>
@endsection