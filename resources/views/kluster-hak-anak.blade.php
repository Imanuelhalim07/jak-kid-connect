@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="text-center" style="color: var(--color-primary); margin-bottom: 50px; font-weight: 800;">Kluster Hak Anak</h1>

        <p style="font-size: 1.1em; text-align: center; max-width: 800px; margin: 0 auto 50px;">
            Hak anak dikelompokkan menjadi 5 kluster utama, ditambah dengan 4 Prinsip Dasar Hak Anak yang harus selalu dipertimbangkan dalam setiap pengambilan keputusan.
        </p>

        <div style="background-color: var(--light-grey-soft); padding: 30px; border-radius: 12px; margin-bottom: 50px;">
            <h2 style="color: var(--dark); border-bottom: 2px solid var(--color-primary); padding-bottom: 10px; margin-bottom: 20px;">4 Prinsip Dasar Hak Anak</h2>
            <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <li style="color: var(--medium-grey);"><i class="fas fa-circle" style="color: var(--color-primary); font-size: 0.7em; margin-right: 8px;"></i> Non-Diskriminasi</li>
                <li style="color: var(--medium-grey);"><i class="fas fa-circle" style="color: var(--color-primary); font-size: 0.7em; margin-right: 8px;"></i> Kepentingan Terbaik Anak</li>
                <li style="color: var(--medium-grey);"><i class="fas fa-circle" style="color: var(--color-primary); font-size: 0.7em; margin-right: 8px;"></i> Hak untuk Hidup, Bertahan, dan Berkembang</li>
                <li style="color: var(--medium-grey);"><i class="fas fa-circle" style="color: var(--color-primary); font-size: 0.7em; margin-right: 8px;"></i> Penghargaan terhadap Pandangan Anak</li>
            </ul>
        </div>

        <div id="accordion-container">
            <div class="unicef-accordion active">
                <button class="unicef-accordion-button" aria-expanded="true">
                    Kluster I: Lingkungan Keluarga dan Pengasuhan Alternatif
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </button>
                <div class="unicef-accordion-content">
                    <p>Mencakup hak mendapatkan nama, kewarganegaraan, keluarga yang utuh, dan perlindungan dari kekerasan/penelantaran.</p>
                </div>
            </div>

            <div class="unicef-accordion">
                <button class="unicef-accordion-button" aria-expanded="false">
                    Kluster II: Kesehatan Dasar dan Kesejahteraan
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </button>
                <div class="unicef-accordion-content">
                    <p>Hak atas kesehatan, gizi, jaminan sosial, dan standar hidup yang layak untuk perkembangan fisik dan mental.</p>
                </div>
            </div>

            <div class="unicef-accordion">
                <button class="unicef-accordion-button" aria-expanded="false">
                    Kluster III: Pendidikan, Pemanfaatan Waktu Luang, dan Kegiatan Budaya
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </button>
                <div class="unicef-accordion-content">
                    <p>Hak mendapatkan pendidikan yang berkualitas, beristirahat, bermain, dan terlibat dalam kegiatan seni/budaya.</p>
                </div>
            </div>

            <div class="unicef-accordion">
                <button class="unicef-accordion-button" aria-expanded="false">
                    Kluster IV: Perlindungan Khusus
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </button>
                <div class="unicef-accordion-content">
                    <p>Perlindungan bagi anak-anak yang rentan, seperti anak korban kekerasan, anak jalanan, atau anak yang berhadapan dengan hukum.</p>
                </div>
            </div>

            <div class="unicef-accordion">
                <button class="unicef-accordion-button" aria-expanded="false">
                    Kluster V: Partisipasi Anak
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </button>
                <div class="unicef-accordion-content">
                    <p>Hak anak untuk menyatakan pandangan mereka secara bebas dalam semua hal yang memengaruhi mereka.</p>
                </div>
            </div>

        </div>

        <div style="text-align: center; margin-top: 60px;">
            <h2 style="color: var(--color-secondary); margin-bottom: 20px;">Poster Hak Anak Berdasarkan Kota Layak Anak (KLA)</h2>
            <img src="/images/poster-kla.jpg" alt="Poster Kota Layak Anak" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 15px var(--shadow-base);">
        </div>
    </div>
</section>
@endsection