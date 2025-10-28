@extends('layouts.admin')

@section('title', 'Manajemen RPTRA')

@section('content')
<header class="admin-header">
    <h1>Manajemen RPTRA</h1>
    <a href="{{ route('admin.rptras.create') }}" class="btn btn-primary">Tambah RPTRA Baru</a>
</header>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama RPTRA</th>
            <th>Wilayah</th>
            <th>Alamat Singkat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($rptras as $rptra)
        <tr>
            <td>{{ $rptra->id }}</td>
            <td>{{ $rptra->name }}</td>
            <td>{{ $rptra->city_region }}</td>
            <td>{{ Str::limit($rptra->address, 50) }}</td>
            <td>
                <a href="{{ route('admin.rptras.edit', $rptra) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.rptras.destroy', $rptra) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus RPTRA {{ $rptra->name }}?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada data RPTRA yang terdaftar.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection