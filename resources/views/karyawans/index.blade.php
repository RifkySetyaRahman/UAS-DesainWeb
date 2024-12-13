@extends('layouts.app')

@section('title', 'Daftar Karyawan')

@section('content')
<div class="d-flex justify-content-between">
    <h1>Daftar Karyawan</h1>
    <a href="{{ route('karyawans.create') }}" class="btn btn-primary">Tambah Karyawan</a>
</div>
<table class="table mt-3">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Departemen</th>
            <th>Posisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawans as $karyawan)
        <tr>
            <td>{{ $karyawan->name }}</td>
            <td>{{ $karyawan->email }}</td>
            <td>{{ $karyawan->departemen->name ?? '-' }}</td>
            <td>{{ $karyawan->posisi->title ?? '-' }}</td>
            <td>
                <a href="{{ route('karyawans.edit', $karyawan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('karyawans.destroy', $karyawan->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
