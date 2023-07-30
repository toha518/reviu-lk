@extends('reviu.main')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
<script>$.fn.poshytip={defaults:null}</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>


<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
    {{-- Tombol Navigasi --}}
    <ul class="text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
        <li class="w-full">
            <button id="id_satker-tab" data-tabs-target="#id_satker" type="button" role="tab" aria-controls="id_satker" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 h-full">ID_Satker</button>
        </li>
        <li class="w-full">
            <button id="kelengkapan-tab" data-tabs-target="#kelengkapan" type="button" role="tab" aria-controls="kelengkapan" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">Kelengkapan</button>
        </li>
        <li class="w-full">
            <button id="monsakti-tab" data-tabs-target="#monsakti" type="button" role="tab" aria-controls="monsakti" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">KKR - MonSakti</button>
        </li>
        <li class="w-full">
            <button id="lra-tab" data-tabs-target="#lra" type="button" role="tab" aria-controls="lra" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">KKR - LRA</button>
        </li>
        <li class="w-full">
            <button id="lo-tab" data-tabs-target="#lo" type="button" role="tab" aria-controls="lo" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">KKR - LO</button>
        </li>
        <li class="w-full">
            <button id="lpe-tab" data-tabs-target="#lpe" type="button" role="tab" aria-controls="lpe" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">KKR - LPE</button>
        </li>
        <li class="w-full">
            <button id="neraca-tab" data-tabs-target="#neraca" type="button" role="tab" aria-controls="neraca" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">KKR - Neraca</button>
        </li>
        <li class="w-full">
            <button id="calk-tab" data-tabs-target="#calk" type="button" role="tab" aria-controls="calk" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg  bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">KKR - CaLK</button>
        </li>
    </ul>
    {{-- Tombol Navigasi end--}}

    {{-- Tabel Kertas Kerja Reviu --}}
    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">

        {{-- ID Satker --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="id_satker" role="tabpanel" aria-labelledby="id_satker-tab">
            <div class="relative overflow-x-auto shadow-md rounded-b-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption class="p-1 text-2xl font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800 italic">
                        Badan Pusat Statistik
                        <h1 class="not-italic">
                            Inspektorat Utama
                        </h1>
                        <h1 class="underline not-italic">
                            Reviu Laporan Keuangan BPS Semester I Tahun 2022
                        </h1>
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                            </th>
                            <th scope="col" class="px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Provinsi
                            </th>
                            <td class="px-6 py-4">
                                -
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Kabupaten/Kota
                            </th>
                            <td class="px-6 py-4">
                                -
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama Satker
                            </th>
                            <td class="px-6 py-4">
                                Politeknik Statistika STIS
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white underline" colspan="2">
                                Keterangan Lembar Kerja
                            </th>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white bg-blue-800">
                                
                            </th>
                            <td class="px-6 py-4">
                                Diisi Oleh Pereviu
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>

        {{-- Kelengkapan --}}
        <div class="hidden bg-white rounded-lg dark:bg-slate-500" id="kelengkapan" role="tabpanel" aria-labelledby="kelengkapan-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table id="myTable" class="w-full text-sm text-left">
                    <caption class="text-lg font-semibold text-center  text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <h1 class="mt-2">Cek Kelengkapan Reviu Laporan Keuangan</h1>
                        <p>Politeknik Statistika STIS</p>
                        <h1 class="mb-2">Semester 1 Tahun 2022</h1>
                    </caption>
                   
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 border text-center">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Uraian
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Telah dikerjakan oleh
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center whitespace-nowrap">
                                Catatan Untuk Pengendali Teknis (PT)
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                1
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Program Kerja Desk Reviu LK
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                KT
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                2
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                Prosedur Analitis Reviu LK
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                TM
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                3
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                KKR - MonSakti
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                KT
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                4
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                KKR LRA
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                AT
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                5
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                KKR LO
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                KT
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                6
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                KKR LPE
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                AT
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                7
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                KKR Neraca
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                KT
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                8
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                KKR CALK
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                AT
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                9
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                CHR
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                KT
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                10
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                LHR
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                KT
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border text-center">
                                11
                            </td>
                            <td class="px-6 py-2 border text-left whitespace-nowrap">
                                IHR
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-center update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                TIM
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-6 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>

        {{-- KKR-MonSakti --}}
        <div class="hidden bg-white rounded-lg dark:bg-slate-500" id="monsakti" role="tabpanel" aria-labelledby="monsakti-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table id="myTable1" class="w-full text-sm text-left">
                    <caption class="text-lg font-semibold text-center  text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <h1 class="mt-2">Kertas Kerja Reviu MonSakti</h1>
                        <p class="mb-2">Politeknik Statistika STIS</p>
                    </caption>
                    
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th rowspan="2" scope="col" class="px-6 py-3 border text-center">
                                No
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 border text-center">
                                Langkah - Langkah Reviu
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 border text-center">
                                Index KKR
                            </th>
                            <th colspan="3" scope="col" class="px-6 py-3 border text-center">
                                Reviu Anggota Tim
                            </th>
                            <th colspan="4" scope="col" class="px-6 py-3 border text-center">
                                Reviu Ketua Tim
                            </th>
                            <th colspan="4" scope="col" class="px-6 py-3 border text-center">
                                Reviu Pengendali Teknis
                            </th>   
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Hasil Reviu
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center whitespace-nowrap">
                                Keterangan Penjelasan
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Selesai Reviu
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Hasil Reviu
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center whitespace-nowrap">
                                Keterangan Penjelasan
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Rekomendasi
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Selesai Reviu
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Hasil Reviu
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center whitespace-nowrap">
                                Keterangan Penjelasan
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Rekomendasi
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Selesai Reviu
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">      
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                1
                            </td>
                            <td class="px-3 py-2 border text-left whitespace-nowrap">
                                Periksa apakah terdapat data anomali aset tetap melalui menu "Rollout SAKTI"
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Sakti.1
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option value="Ada">Ada</option>
                                  <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                        </tr> 
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                2
                            </td>
                            <td class="px-3 py-2 border text-left whitespace-nowrap">
                                Periksa apakah terdapat data anomali persediaan melalui menu "Rollout SAKTI"
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Sakti.2
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                Data anomali persediaan belum valid pada Monsakti per 3 Agustus 2022.
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                3
                            </td>
                            <td class="px-3 py-2 border text-left whitespace-normal">
                                Pastikan data anomali sudah ditindaklanjuti oleh satker melalui 
                                menu "progress tindak lanjut data anomali" (Menu Akan disediakan)
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Sakti.3
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Sudah Ditindaklanjuti</option>
                                  <option>Belum Ditindaklanjuti</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                Belum ada menu progress tindak lanjut data anomali pada Monsakti.
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Sudah Ditindaklanjuti</option>
                                  <option>Belum Ditindaklanjuti</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Sudah Ditindaklanjuti</option>
                                  <option>Belum Ditindaklanjuti</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                4
                            </td>
                            <td class="px-3 py-2 border text-left whitespace-nowrap">
                                Pastikan satker tidak memiliki sisa pagu minus melalui menu "To Do List"
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Sakti.4
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                        </tr> 
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                5
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Periksa apakah terdapat persediaan dan aset tetap yang belum didetilkan melalui menu "To Do List"
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Sakti.5
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                                a. Terdapat 19 transaksi persediaan yang belum didetailkan senilai Rp2.374.000,- pada satker yang belum dicatat detail persediaan pada modul persediaan.
                                b. Terdapat ... transaksi aset yang belum didetailkan pada satker yang belum dicatat detail aset tetapnya pada modul aset tetap.
                                Jika Tidak Ada maka catatan agar dihapus.
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-center">
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Ada</option>
                                  <option>Tidak Ada</option>
                                </select>
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="hover:bg-blue-100 dark:hover:bg-blue-100 px-3 py-2 border text-left update_record" data-name="nama_akun" data-type="text" data-pk="1">
                            </td>
                            <td class="px-3 py-2 border">
                                    <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                        </tr>   
                    </tbody>
                </table>
            </div>
        </div>

        {{-- KKR-LRA --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="lra" role="tabpanel" aria-labelledby="lra-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Kertas Kerja Reviu Laporan Realisasi Anggaran
                  </caption>
                  <thead>
                    <tr>
                        <th>
                            <div class="inline-block" role="status">
                                <svg aria-hidden="true" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>Sedang dalam proses pengembangan...
                        </th>
                    </tr>
                  </thead>
                </table>
              </div>
        </div>

        {{-- KKR-LO --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="lo" role="tabpanel" aria-labelledby="lo-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Kertas Kerja Reviu Laporan Operasional
                  </caption>
                  <thead>
                    <tr>
                        <th>
                            <div class="inline-block" role="status">
                                <svg aria-hidden="true" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>Sedang dalam proses pengembangan...
                        </th>
                    </tr>
                  </thead>
                </table>
              </div>
        </div>

        {{-- KKR-LPE --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="lpe" role="tabpanel" aria-labelledby="lpe-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Kertas Kerja Reviu Laporan Perubahan Ekuitas
                  </caption>
                  <thead>
                    <tr>
                        <th>
                            <div class="inline-block" role="status">
                                <svg aria-hidden="true" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>Sedang dalam proses pengembangan...
                        </th>
                    </tr>
                  </thead>
                </table>
              </div>
        </div>

        {{-- KKR-Neraca --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="neraca" role="tabpanel" aria-labelledby="neraca-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Kertas Kerja Reviu Neraca
                  </caption>
                  <thead>
                    <tr>
                        <th>
                            <div class="inline-block" role="status">
                                <svg aria-hidden="true" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>Sedang dalam proses pengembangan...
                        </th>
                    </tr>
                  </thead>
                </table>
              </div>
        </div>

        {{-- KKR-CaLK --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="calk" role="tabpanel" aria-labelledby="calk-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Kertas Kerja Reviu CaLK
                  </caption>
                  <thead>
                    <tr>
                        <th>
                            <div class="inline-block" role="status">
                                <svg aria-hidden="true" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>Sedang dalam proses pengembangan...
                        </th>
                    </tr>
                  </thead>
                </table>
              </div>
        </div>

    </div>
    {{-- Tabel Prosedur Analitis end --}}
</div>

<script type="text/javascript">
    $.fn.editable.defaults.mode = 'inline';

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': '{{csrf_token()}}'
        }   
    });

    $('.update_record').editable({
        url: "{{ route('prosedur-analitis.update') }}",
        type: 'text',
        name: 'nama_akun',
        pk: 1,
        title: 'Enter Field'
    });
</script>
    
@endsection