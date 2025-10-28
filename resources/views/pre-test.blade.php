@extends('layouts.app')

@section('title', 'Pre-Test Hak Anak')

@section('content')
<section class="quiz-section">
    <h1>Pre-Test: Uji Pengetahuan Awal Anda</h1>
    <p class="intro">Jawablah pertanyaan-pertanyaan berikut sebelum Anda mempelajari Konvensi Hak Anak. Ini hanya untuk mengukur pemahaman awal Anda.</p>

    {{-- Asumsi Anda akan menggunakan logika QuizController untuk Pre-Test juga, mungkin dengan method berbeda --}}
    {{-- Atau, ini hanya halaman statis yang mengarahkan ke halaman belajar --}}

    <div class="action-area">
        <p>Pre-Test sudah selesai. Waktunya belajar:</p>
        <a href="{{ route('hak-anak') }}" class="btn-primary">Pelajari Konvensi</a>
    </div>
</section>
@endsection