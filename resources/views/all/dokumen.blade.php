@extends('layouts.main')

@section('content')

<h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">File</h1>

<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
    {{-- Tombol Navigasi --}}
    <ul class="text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
        <li class="w-full">
            <button id="pedoman-reviu-tab" data-tabs-target="#pedoman-reviu" type="button" role="tab" aria-controls="pedoman-reviu" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 h-full">Pedoman Reviu LK</button>
        </li>
        <li class="w-full">
            <button id="format-laporan-tab" data-tabs-target="#format-laporan" type="button" role="tab" aria-controls="format-laporan" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 h-full">Format Laporan Pereviu</button>
        </li>
        <li class="w-full">
            <button id="surat-surat-tab" data-tabs-target="#surat-surat" type="button" role="tab" aria-controls="surat-surat" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 h-full">Surat - Surat</button>
        </li>
        {{-- <li class="w-full">
            <button id="kertas-kerja-tab" data-tabs-target="#kertas-kerja" type="button" role="tab" aria-controls="kertas-kerja" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Kertas Kerja Sem I TA 2022</button>
        </li> --}}
        <li class="w-full">
            <button id="daftar-permindok-tab" data-tabs-target="#daftar-permindok" type="button" role="tab" aria-controls="daftar-permindok" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 h-full">Daftar Permindok Persiapan</button>
        </li>
        <li class="w-full">
            <button id="rekaman-tab" data-tabs-target="#rekaman" type="button" role="tab" aria-controls="rekaman" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
            Rekaman & Materi Refreshing</button>
        </li>
    </ul>
    {{-- Tombol Navigasi end--}}

    {{-- Tabel File--}}
    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">

        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 m-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Unggah Dokumen</button>

        {{-- Pedoman Reviu LK --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="pedoman-reviu" role="tabpanel" aria-labelledby="pedoman-reviu-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table id="myTable6" class="w-full text-sm text-left">
                    <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <h1 class="m-2">Pedoman Reviu LK</h1>
                    </caption>
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 border text-center">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Nama File
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                1
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Perka Pedoman Reviu LK.pdf
                            </td>
                            <td class="px-6 py-2 border text-center">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>

        {{-- Format Laporan Pereviu --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="format-laporan" role="tabpanel" aria-labelledby="format-laporan-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table id="myTable1" class="w-full text-sm text-left">
                    <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <h1 class="m-2">Format Laporan Pereviu</h1>
                    </caption>
                   
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 border text-center">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Nama File
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                1
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Satker - LHR Field LK.docx
                            </td>
                            <td class="px-6 py-2 border text-center whitespace-nowrap">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                2
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Satker - LHR Desk LK.docx
                            </td>
                            <td class="px-6 py-2 border text-center">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                3
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Laporan Tindak Lanjut Reviu LK.docx
                            </td>
                            <td class="px-6 py-2 border text-center">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                4
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Instansi - PERNYATAAN TELAH DIREVIU_2021.docx
                            </td>
                            <td class="px-6 py-2 border text-center">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                5
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Instansi - Laporan Hasil Reviu Instansi 2021_140322.docx
                            </td>
                            <td class="px-6 py-2 border text-center">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>

        {{-- Surat - Surat --}}
         <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="surat-surat" role="tabpanel" aria-labelledby="surat-surat-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table id="myTable2" class="w-full text-sm text-left">
                    <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <h1 class="m-2">Surat - Surat</h1>
                    </caption>
                   
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 border text-center">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Nama File
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                1
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                S-54_PB_PB6_2022 - Jadwal Rekonsiliasi Penyusunan dan Penyampaian LKKL TA 2022 Unaudited.pdf
                            </td>
                            <td class="px-6 py-2 border text-center whitespace-nowrap">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                2
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                B.006.02000 Petunjuk Penyusunan Laporan BMN BPS TA 2022 (Unaudited).pdf
                            </td>
                            <td class="px-6 py-2 border text-center whitespace-nowrap">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                3
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                B-1120.02000 Surat Penyusunan dan Penyampaian LK BPS TA 2022 Unaudited + lampiran.pdf
                            </td>
                            <td class="px-6 py-2 border text-center whitespace-nowrap">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                4
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                20230125 08000 B-029 PW.100 Pemberitahuan Reviu LK TA 2022.pdf
                            </td>
                            <td class="px-6 py-2 border text-center whitespace-nowrap">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>

        {{-- Kertas Kerja Sem I TA 2022 --}}
          {{-- <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="kertas-kerja" role="tabpanel" aria-labelledby="kertas-kerja-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table id="myTable3" class="w-full text-sm text-left">
                    <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <h1 class="m-2">Kertas Kerja Sem I TA 2022</h1>
                    </caption>
                   
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 border text-center">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Nama File
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                1
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Perka Pedoman Reviu LK.pdf
                            </td>
                            <td class="px-6 py-2 border text-center">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div> --}}

        {{-- Daftar Permindok Persiapan --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="daftar-permindok" role="tabpanel" aria-labelledby="daftar-permindok-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table id="myTable4" class="w-full text-sm text-left">
                    <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <h1 class="m-2">Daftar Permindok Persiapan</h1>
                    </caption>
                   
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 border text-center">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Nama File
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                1
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Daftar Permindok Persiapan.xlsx
                            </td>
                            <td class="px-6 py-2 border text-center whitespace-nowrap">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>

         {{-- Rekaman & Materi Refreshing --}}
         <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="rekaman" role="tabpanel" aria-labelledby="rekaman-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table id="myTable5" class="w-full text-sm text-left">
                    <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <h1 class="m-2">Rekaman & Materi Refreshing</h1>
                    </caption>
                   
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 border text-center">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Nama File
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                1
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Reviu LK Semester Tahun 2022.pptx
                            </td>
                            <td class="px-6 py-2 border text-center whitespace-nowrap">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                2
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Refreshing Reviu LK TA 2022.mp4
                            </td>
                            <td class="px-6 py-2 border text-center whitespace-nowrap">
                                <a class="mr-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Unduh</a>
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>

                    <!-- Main modal -->
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Unggah Dokumen</h3>
                                        <div class="inline-block max-w-sm p-6 bg-slate-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                                            <input class="block w-auto text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div> 
    </div>
    {{-- Tabel File end --}}
</div>

    
@endsection