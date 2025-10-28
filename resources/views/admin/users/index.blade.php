@extends('layouts.admin')

@section('title', 'Manajemen User')

@section('content')
<header class="admin-header">
    <h1>Manajemen User</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Tambah User Baru</a>
</header>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <span class="badge {{ $user->role == 'admin' ? 'badge-admin' : 'badge-user' }}">
                    {{ ucfirst($user->role) }}
                </span>
            </td>
            <td>
                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                @if (auth()->user()->id !== $user->id)
                {{-- Mencegah admin menghapus dirinya sendiri --}}
                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus user {{ $user->name }}?')">Hapus</button>
                </form>
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada user yang terdaftar.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection