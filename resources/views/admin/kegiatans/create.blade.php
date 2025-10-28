@extends('layouts.admin')

@section('title', 'Tambah Kegiatan Baru')

@section('content')
<header class="admin-header">
    <h1>Tambah Kegiatan Baru</h1>
</header>

<form action="{{ route('admin.kegiatans.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">Ada kesalahan input. Silakan periksa formulir.</div>
    @endif

    <div class="form-group">
        <label for="title">Judul Kegiatan:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required>
    </div>

    <div class="form-group">
        <label for="date">Tanggal Kegiatan:</label>
        <input type="date" name="date" id="date" value="{{ old('date') }}" required>
    </div>

    <div class="form-group">
        <label for="location">Lokasi Kegiatan:</label>
        <input type="text" name="location" id="location" value="{{ old('location') }}">
    </div>

    <div class="form-group">
        <label for="description">Deskripsi Lengkap:</label>
        <textarea name="description" id="description" rows="5" required>{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Foto Kegiatan (Max 2MB):</label>
        <input type="file" name="image" id="image">
    </div>

    <button type="submit" class="btn btn-success">Simpan Kegiatan</button>
    <a href="{{ route('admin.kegiatans.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection