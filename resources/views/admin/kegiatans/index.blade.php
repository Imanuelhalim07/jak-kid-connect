@extends('layouts.admin')

@section('title', 'Manajemen Kegiatan')

@section('content')
<header class="admin-header">
    <h1>Manajemen Kegiatan</h1>
    <a href="{{ route('admin.kegiatans.create') }}" class="btn btn-primary">Tambah Kegiatan Baru</a>
</header>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul Kegiatan</th>
            <th>Tanggal</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($kegiatans as $kegiatan)
        <tr>
            <td>{{ $kegiatan->id }}</td>
            <td>{{ $kegiatan->title }}</td>
            <td>{{ $kegiatan->date->format('d M Y') }}</td> {{-- Membutuhkan kolom 'date' di-cast sebagai 'date' di Model --}}
            <td>{{ $kegiatan->location }}</td>
            <td>
                <a href="{{ route('admin.kegiatans.edit', $kegiatan) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.kegiatans.destroy', $kegiatan) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus kegiatan ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada data kegiatan yang terdaftar.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection