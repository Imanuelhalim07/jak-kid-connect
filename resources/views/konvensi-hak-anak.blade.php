@extends('layouts.app')

@section('content')

<div class="konvensi-header">
    <div class="container">
        <h1>Konvensi Hak Anak</h1>
        <p>Konvensi Hak Anak adalah perjanjian hak asasi manusia internasional yang disahkan oleh PBB pada tahun 1989. Konvensi ini menguraikan hak-hak dasar yang harus dimiliki oleh setiap anak di seluruh dunia.</p>
    </div>
</div>

<section class="py-5 text-center">
    <div class="container">

        <h2 style="color: var(--color-secondary); margin-bottom: 20px;">Uji Pengetahuan Awal Anda!</h2>
        <a href="{{ route('pretest') }}" class="btn btn-pre-test">Mulai Pre-Test (Awal Materi)</a>

        <hr style="border-top: 2px solid #ddd; margin: 50px 0;">

        <h2 style="color: var(--color-secondary); margin-bottom: 30px;">41 Pasal Utama Hak Anak (UNICEF)</h2>

        <div class="pasal-list">

            <div class="pasal-item">
                <h3>Pasal 1: Definisi Anak</h3>
                <p>Setiap manusia di bawah usia 18 tahun, kecuali berdasarkan undang-undang yang berlaku bagi anak, kedewasaan dicapai lebih awal.</p>
            </div>
            <div class="pasal-item">
                <h3>Pasal 2: Non-Diskriminasi</h3>
                <p>Semua hak berlaku untuk semua anak tanpa diskriminasi dalam bentuk apa pun, terlepas dari ras, agama, atau kemampuan.</p>
            </div>
            <div class="pasal-item">
                <h3>Pasal 3: Kepentingan Terbaik Anak</h3>
                <p>Kepentingan terbaik anak harus menjadi pertimbangan utama dalam semua tindakan yang berkaitan dengan anak.</p>
            </div>

        </div>

        <hr style="border-top: 2px solid #ddd; margin: 50px 0;">

        <h2 style="color: var(--color-success); margin-bottom: 20px;">Uji Pemahaman Anda!</h2>
        <a href="{{ route('posttest') }}" class="btn btn-post-test">Mulai Post-Test (Akhir Materi)</a>

    </div>
</section>

@endsection