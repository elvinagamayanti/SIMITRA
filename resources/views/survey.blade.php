@extends('layout.app')

@section('content')
<div class="container mx-auto p-4">
    <!-- Judul Halaman -->
    <h1 class="text-3xl font-bold mb-4">Survey</h1>

    <!-- Tabel dan Fitur Pencarian -->
    <div class="mt-6">
        <!-- Fitur Pencarian dan Tombol Tambah -->
        <div class="flex justify-between mb-4">
            <div class="relative w-1/3">
                <input type="text" id="search" class="block w-full p-2 pl-10 text-sm border rounded-lg border-gray-300 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Search..." />
                <svg class="absolute top-1/2 left-3 transform -translate-y-1/2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
            <button onclick="window.location='{{ route('addsurvey') }}'" class="inline-flex items-center px-4 py-2 text-white bg-orange-500 border border-transparent rounded-lg shadow-sm hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                Tambah Survei
            </button>
        </div>

        <!-- Kontainer untuk Tabel Daftar Survey -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <!-- Tabel Daftar Survey -->
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Survei</th>
                            <th scope="col" class="px-6 py-3">Kode</th>
                            <th scope="col" class="px-6 py-3">Ketua Tim</th>
                            <th scope="col" class="px-6 py-3">Tanggal Mulai</th>
                            <th scope="col" class="px-6 py-3">Tanggal Berakhir</th>
                            <th scope="col" class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop untuk Daftar Survey -->
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">Survei1</td>
                            <td class="px-6 py-4">12</td>
                            <td class="px-6 py-4">123</td>
                            <td class="px-6 py-4">01-01-2024</td>
                            <td class="px-6 py-4">31-01-2024</td>
                            <td class="px-6 py-4">
                                <button class="text-blue-600 hover:underline">Lihat</button>
                                <button class="text-green-600 hover:underline ml-2">Nilai</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
