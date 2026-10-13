@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>

    {{-- Cek apakah ada mahasiswa dengan IPK di bawah 2.0 --}}
    @php
        $adaIPKRendah = collect($mahasiswa)->contains(function ($mhs) {
            return $mhs['ipk'] < 2.0;
        });
    @endphp

    @if ($adaIPKRendah)
        <x-alert tipe="bahaya">
            Perhatian: Terdapat mahasiswa dengan IPK di bawah 2.0 yang memerlukan bimbingan khusus!
        </x-alert>
    @endif

    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        @forelse ($mahasiswa as $mhs)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['ipk'] }}</td>
            <td>
                @if ($mhs['ipk'] >= 3.5) Cum Laude
                @elseif ($mhs['ipk'] >= 3.0) Baik
                @else Perlu ditingkatkan
                @endif
            </td>
            <td>
                <a href="{{ route('mahasiswa.detail', $mhs['nim']) }}">Detail</a>
            </td>
        </tr>
        @empty
        <tr><td colspan="6" style="text-align: center;">Belum ada data.</td></tr>
        @endforelse
    </table>
@endsection