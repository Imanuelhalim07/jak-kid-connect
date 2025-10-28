@extends('layouts.app')

@section('title', 'Teks Konvensi Hak Anak')

@section('content')
<section class="konvensi-full">
    <h1>Teks Lengkap Konvensi Hak Anak (KHA)</h1>
    <p class="date">Disahkan oleh PBB pada 20 November 1989.</p>

    <article class="pasal">
        <h2>Prinsip Utama (Pasal 1-4)</h2>
        <p>Konvensi ini didasari pada 4 prinsip utama: Non-diskriminasi, Kepentingan Terbaik Anak, Hak Hidup & Tumbuh Kembang, dan Partisipasi Anak.</p>
    </article>

    <article class="pasal">
        <h2>Pasal 7: Nama dan Kewarganegaraan</h2>
        <p>Anak harus didaftar segera setelah lahir dan berhak atas sebuah nama dan untuk memperoleh kewarganegaraan.</p>
    </article>

    <article class="pasal">
        <h2>Pasal 12: Pendapat Anak</h2>
        <p>Anak berhak menyatakan pendapatnya secara bebas dalam semua hal yang memengaruhi dirinya, dan pendapat tersebut harus dipertimbangkan secara serius.</p>
    </article>

    <article class="pasal">
        <h2>Pasal 28: Pendidikan</h2>
        <p>Setiap anak berhak atas pendidikan. Pendidikan dasar harus wajib dan tersedia gratis bagi semua.</p>
    </article>

    {{-- Lanjutkan dengan pasal-pasal utama lainnya --}}

    <div class="link-test">
        <p>Sudah membaca? Uji pengetahuan Anda:</p>
        <a href="{{ route('post-test.show') }}" class="btn-primary">Ikuti Post-Test</a>
    </div>
</section>
@endsection