@extends('layout.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Daftar Mitra</h1>

    <div class="mt-6">
        <div class="flex justify-between mb-4">

            <div class="relative w-1/3">
                <input type="text" id="search" class="block w-full p-2 pl-10 text-sm border rounded-lg border-gray-300 bg-white shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Search..." />
                <svg class="absolute top-1/2 left-3 transform -translate-y-1/2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
            
            <div class="flex space-x-4">

                <select id="filter" name="filter" class="p-2 border rounded-lg">
                    <option value="all">Semua</option>
                    <option value="ongoing">Terbaru</option>
                    <option value="ended">Nilai Tertinggi</option>
                </select>

                <button onclick="window.location='{{ route('addmitra') }}'" class="inline-flex items-center px-4 py-2 text-white bg-orange-500 border border-transparent rounded-lg shadow-sm hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                    Tambah Mitra
                </button>
            </div>
        </div>

        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
 
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Mitra</th>
                            <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                            <th scope="col" class="px-6 py-3">Pendidikan</th>
                            <th scope="col" class="px-6 py-3">Tanggal Lahir</th>
                            <th scope="col" class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">Person</td>
                            <td class="px-6 py-4">Perempuan</td>
                            <td class="px-6 py-4">SMA</td>
                            <td class="px-6 py-4">01-01-2004</td>
                            <td class="px-6 py-4">
                                <button class="px-3 py-1 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Lihat</button>
                                <button onclick="window.location='{{ route('editmitra') }}'" class="ml-2 px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">Person</td>
                            <td class="px-6 py-4">Perempuan</td>
                            <td class="px-6 py-4">SMA</td>
                            <td class="px-6 py-4">01-01-2004</td>
                            <td class="px-6 py-4">
                                <button class="px-3 py-1 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Lihat</button>
                                <button class="ml-2 px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">Person</td>
                            <td class="px-6 py-4">Perempuan</td>
                            <td class="px-6 py-4">SMA</td>
                            <td class="px-6 py-4">01-01-2004</td>
                            <td class="px-6 py-4">
                                <button class="px-3 py-1 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Lihat</button>
                                <button class="ml-2 px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">Person</td>
                            <td class="px-6 py-4">Perempuan</td>
                            <td class="px-6 py-4">SMA</td>
                            <td class="px-6 py-4">01-01-2004</td>
                            <td class="px-6 py-4">
                                <button class="px-3 py-1 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Lihat</button>
                                <button class="ml-2 px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">Person</td>
                            <td class="px-6 py-4">Perempuan</td>
                            <td class="px-6 py-4">SMA</td>
                            <td class="px-6 py-4">01-01-2004</td>
                            <td class="px-6 py-4">
                                <button class="px-3 py-1 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Lihat</button>
                                <button class="ml-2 px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </div>

        <div class="flex justify-between mt-4 items-center">
            <div>
                <label for="per_page" class="text-sm text-gray-700">Records per halaman:</label>
                <select id="per_page" name="per_page" class="p-2 border rounded-lg">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                </select>
            </div>

            <div>
                <nav class="flex justify-end">
                    <ul class="inline-flex items-center -space-x-px">
                        <li><a href="#" class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a></li>
                        <li><a href="#" class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a></li>
                        <li><a href="#" class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a></li>
                        <li><a href="#" class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
