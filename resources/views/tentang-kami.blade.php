@extends('layouts.app')

@section('content')

<section class="about-us py-5">
    <div class="container">
        <h1>Tentang Kami</h1>

        <div class="vmt-grid">

            <div class="vmt-item vmt-visi">
                <h2>Visi</h2>
                <p>Menjadi platform digital terdepan dalam mempromosikan dan mewujudkan hak-hak anak di seluruh wilayah Jakarta.</p>
            </div>

            <div class="vmt-item vmt-misi">
                <h2>Misi</h2>
                <p>Menyediakan informasi edukatif, memfasilitasi partisipasi anak, dan menghubungkan komunitas dengan RPTRA.</p>
            </div>

            <div class="vmt-item vmt-tujuan">
                <h2>Tujuan</h2>
                <p>Menciptakan lingkungan Jakarta yang kondusif dan memastikan setiap anak mendapatkan haknya sesuai Konvensi PBB.</p>
            </div>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <h2>Tim Kami</h2>

        <div class="team-grid">

            <div class="team-member">
                <img src="/images/aisha.jpg" alt="Foto Aisyah Istirahayu">
                <h3>Aisyah Istirahayu</h3>
                <span class="role">Founder</span>
                <p>Pendiri Jak Kid Connect, berdedikasi tinggi pada isu perlindungan dan pemenuhan hak anak di perkotaan.</p>
            </div>

            <div class="team-member">
                <img src="/images/immanuel.jpg" alt="Foto Immanuel S.">
                <h3>Immanuel S.</h3>
                <span class="role">Co-Founder</span>
                <p>Spesialis pengembangan digital dan inisiator program interaktif di platform Jak Kid Connect.</p>
            </div>

        </div>
    </div>
</section>

@endsection