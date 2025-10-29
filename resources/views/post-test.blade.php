@extends('layouts.app')

@section('title', 'Post-Test KHA')

@section('content')
<section class="quiz-section">
    <h1>Post-Test: Uji Pemahaman Anda</h1>
    <p class="intro">Jawab semua pertanyaan untuk melihat skor akhir Anda mengenai pemahaman Konvensi Hak Anak.</p>

    @if (isset($result))
    <div class="result-box">
        <h2>Hasil Tes Anda</h2>
        <p>Anda berhasil menjawab **{{ $result['score'] }}** dari **{{ $result['total'] }}** pertanyaan dengan benar.</p>
        <p class="score-percentage">Skor Anda: **{{ round(($result['score'] / $result['total']) * 100, 0) }}%**</p>
        <button onclick="window.location.href='{{ route('post-test.show') }}'" class="btn-primary">Ulangi Tes</button>
    </div>
    @endif

    {{-- HAPUS SEMUA COMMENT PHP/FILE PATH YANG TIDAK PERLU DI SINI --}}

    @if (!isset($result))
    <form action="{{ route('post-test.submit') }}" method="POST" class="quiz-form">
        @csrf

        {{-- Pastikan variabel $questions dikirim dari controller --}}
        @foreach ($questions as $key => $q)
        <div class="question-block">
            <p class="question-number">{{ $key + 1 }}. {{ $q['question'] }}</p>
            <div class="options">
                @foreach ($q['options'] as $option)
                <label>
                    <input type="radio" name="q{{ $key }}" value="{{ $option }}" required>
                    {{ $option }}
                </label><br>
                @endforeach
            </div>
        </div>
        @endforeach

        <button type="submit" class="btn-primary">Submit Jawaban</button>
    </form>
    @endif

</section>
@endsection