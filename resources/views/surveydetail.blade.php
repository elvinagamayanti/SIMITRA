@extends('layout.app')

@section('content')
<div class="px-4 py-4 bg-white dark:bg-gray-900">
  <div class="px-4 sm:px-0">
    <h3 class="text-base font-bold leading-8 text-gray-900 dark:text-gray-100">Detail Survei</h3>
  </div>
  <div class="mt-6 border-t border-gray-100 dark:border-gray-700">
    <dl class="divide-y divide-gray-100 dark:divide-gray-700">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Nama Survei</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $survey['name'] }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Kode</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $survey['kode'] }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Ketua Tim</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $survey['ketua_tim'] }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Tanggal Mulai</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $survey['tanggal_mulai'] }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Tanggal Berakhir</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 dark:text-gray-300 sm:col-span-2 sm:mt-0">{{ $survey['tanggal_berakhir'] }}</dd>
      </div>
    </dl>
  </div>
  <div class="px-4 sm:px-0 m-5">
    <h3 class="text-base font-bold leading-8 text-gray-900 dark:text-gray-100">Daftar Mitra</h3>
  </div>
  <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md">
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-300">
        <thead class="text-xs text-gray-700 dark:text-gray-400 uppercase bg-gray-50 dark:bg-gray-800">
          <tr>
            <th scope="col" class="px-6 py-3">No</th>
            <th scope="col" class="px-6 py-3">ID</th>
            <th scope="col" class="px-6 py-3">Nama</th>
            <th scope="col" class="px-6 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-600">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">212111957</td>
            <td class="px-6 py-4">Bintana Tajmala</td>
            <td class="px-6 py-4">
              <button class="ml-2 px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-500">Nilai</button>
            </td>
          </tr>
          <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-600">
            <td class="px-6 py-4">2</td>
            <td class="px-6 py-4">212111941</td>
            <td class="px-6 py-4">Azmira Candra</td>
            <td class="px-6 py-4">
              <button class="ml-2 px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-500">Nilai</button>
            </td>
          </tr>
          <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-600">
            <td class="px-6 py-4">3</td>
            <td class="px-6 py-4">212112287</td>
            <td class="px-6 py-4">Pretty Melati Pardede</td>
            <td class="px-6 py-4">
              <button class="ml-2 px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-500">Nilai</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


@endsection
