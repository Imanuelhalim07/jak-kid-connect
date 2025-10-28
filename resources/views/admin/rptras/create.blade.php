@extends('layouts.admin')

@section('title', 'Tambah RPTRA Baru')

@section('content')
<header class="admin-header">
    <h1>Tambah RPTRA Baru</h1>
</header>

<form action="{{ route('admin.rptras.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="form-group">
        <label for="name">Nama RPTRA:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>

    <div class="form-group">
        <label for="address">Alamat Lengkap:</label>
        <textarea name="address" id="address" rows="3" required>{{ old('address') }}</textarea>
    </div>

    <div class="form-group">
        <label for="city_region">Wilayah/Kota:</label>
        <select name="city_region" id="city_region" required>
            <option value="">Pilih Wilayah</option>
            <option value="Jakarta Pusat" {{ old('city_region') == 'Jakarta Pusat' ? 'selected' : '' }}>Jakarta Pusat</option>
            <option value="Jakarta Utara" {{ old('city_region') == 'Jakarta Utara' ? 'selected' : '' }}>Jakarta Utara</option>
            {{-- Tambahkan wilayah lain --}}
        </select>
    </div>

    <div class="form-group">
        <label for="fasilitas">Fasilitas:</label>
        <textarea name="fasilitas" id="fasilitas" rows="3">{{ old('fasilitas') }}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Foto RPTRA (Max 2MB):</label>
        <input type="file" name="image" id="image">
    </div>

    <button type="submit" class="btn btn-success">Simpan Data RPTRA</button>
    <a href="{{ route('admin.rptras.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection