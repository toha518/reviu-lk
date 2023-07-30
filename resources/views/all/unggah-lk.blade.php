@extends('layouts.main')

@section('content')

<h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Halaman Unggah Dokumen Sumber</h1>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis Dokumen
                </th>
                <th scope="col" class="px-6 py-3">
                    Rincian Dokumen
                </th>
                <th scope="col" class="px-6 py-3">
                    File Dokumen
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    1
                </td>
                <td class="px-6 py-4">
                    Laporan Keuangan
                </td>
                <td class="px-6 py-4">
                    Dokumen Laporan Keuangan
                </td>
                <td class="px-6 py-4">
                    LK Semester 1 TA 2022.pdf
                </td>
                <td class="px-6 py-4 text-center">
                 <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                 <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                 <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    2
                </td>
                <td class="px-6 py-4">
                    Laporan Keuangan
                </td>
                <td class="px-6 py-4">
                    Dokumen Laporan Keuangan
                </td>
                <td class="px-6 py-4">
                    LK Audited TA 2021.pdf
                </td>
                <td class="px-6 py-4 text-center">
                 <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                 <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                 <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    3
                </td>
                <td class="px-6 py-4">
                    Belanja dibayar dimuka
                </td>
                <td class="px-6 py-4">
                    PKS/Kontrak Sewa bangunan/tempat
                </td>
                <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4 text-center">
                 <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    4
                </td>
                <td class="px-6 py-4">
                    Belanja dibayar dimuka
                </td>
                <td class="px-6 py-4">
                    Kertas kerja perhitungan belanja dibayar dimuka
                </td>
                <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4 text-center">
                 <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    5
                </td>
                <td class="px-6 py-4">
                    Bendahara
                </td>
                <td class="px-6 py-4">
                    BAP Kas
                </td>
                <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4 text-center">
                 <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    6
                </td>
                <td class="px-6 py-4">
                    Bendahara
                </td>
                <td class="px-6 py-4">
                    LPJ Bendahara Pengeluaran
                </td>
                <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4 text-center">
                 <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    7
                </td>
                <td class="px-6 py-4">
                    Bendahara
                </td>
                <td class="px-6 py-4">
                    ADK GPP Gaji
                </td>
                <td class="px-6 py-4">
                    februari22.xls
                </td>
                <td class="px-6 py-4 text-center">
                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    8
                </td>
                <td class="px-6 py-4">
                    Bendahara
                </td>
                <td class="px-6 py-4">
                    ADK GPP Gaji
                </td>
                <td class="px-6 py-4">
                    maret22.xls
                </td>
                <td class="px-6 py-4 text-center">
                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    9
                </td>
                <td class="px-6 py-4">
                    Bendahara
                </td>
                <td class="px-6 py-4">
                    ADK GPP Gaji
                </td>
                <td class="px-6 py-4">
                    april22.xls
                </td>
                <td class="px-6 py-4 text-center">
                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    10
                </td>
                <td class="px-6 py-4">
                    Bendahara
                </td>
                <td class="px-6 py-4">
                    ADK GPP Gaji
                </td>
                <td class="px-6 py-4">
                    mei22.xls
                </td>
                <td class="px-6 py-4 text-center">
                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    11
                </td>
                <td class="px-6 py-4">
                    Bendahara
                </td>
                <td class="px-6 py-4">
                    ADK GPP Gaji
                </td>
                <td class="px-6 py-4">
                    juni22.xls
                </td>
                <td class="px-6 py-4 text-center">
                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                    <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                <td class="px-6 py-4">
                    12
                </td>
                <td class="px-6 py-4">
                    Bendahara
                </td>
                <td class="px-6 py-4">
                    DIPA BA-054 revisi terakhir
                </td>
                <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4 text-center">
                 <a class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unggah</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection