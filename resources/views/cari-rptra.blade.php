@extends('layouts.app')

@section('title', 'Cari RPTRA')

@section('content')
<div class="container">
    <h1>Temukan RPTRA di Jakarta</h1>

    <div class="filter-controls">
        <input type="text" id="searchInput" placeholder="Cari berdasarkan nama RPTRA..." class="form-control">

        <select id="regionFilter" class="form-control">
            <option value="">-- Filter Wilayah --</option>
            <option value="Jakarta Pusat">Jakarta Pusat</option>
            <option value="Jakarta Utara">Jakarta Utara</option>
            <option value="Jakarta Barat">Jakarta Barat</option>
            <option value="Jakarta Selatan">Jakarta Selatan</option>
            <option value="Jakarta Timur">Jakarta Timur</option>
            <option value="Kepulauan Seribu">Kepulauan Seribu</option>
        </select>
    </div>

    <div id="rptraList" class="grid-rptra">
        {{-- Hasil Pencarian akan ditampilkan di sini oleh cari-rptra.js --}}
        <p id="loadingMessage">Memuat data RPTRA...</p>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const RPTRA_DATA = {!! $rptraDataJson ?? '[]' !!};
</script>

<script src="{{ asset('assets/js/cari-rptra-script.js') }}"></script>
@endsection