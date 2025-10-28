@extends('layouts.admin')

@section('title', 'Tambah User Baru')

@section('content')
<header class="admin-header">
    <h1>Tambah User Baru</h1>
</header>

<form action="{{ route('admin.users.store') }}" method="POST" class="form-container">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">Ada kesalahan input. Silakan periksa formulir.</div>
    @endif

    <div class="form-group">
        <label for="name">Nama Lengkap:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div class="form-group">
        <label for="password_confirmation">Konfirmasi Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>

    <div class="form-group">
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User Biasa</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Buat User</button>
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection