@extends('layouts.main')

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
            <button id="neraca_percobaan-tab" data-tabs-target="#neraca_percobaan" type="button" role="tab" aria-controls="neraca_percobaan" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-yellow-400 dark:border-b-yellow-400 h-full">Neraca Percobaan</button>
        </li>
        <li class="w-full">
            <button id="lo-tab" data-tabs-target="#lo" type="button" role="tab" aria-controls="lo" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-red-700 dark:border-b-red-700 h-full">LO</button>
        </li>
        <li class="w-full">
            <button id="lra-tab" data-tabs-target="#lra" type="button" role="tab" aria-controls="lra" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-red-700 dark:border-b-red-700 h-full">LRA</button>
        </li>
        <li class="w-full">
            <button id="lpe-tab" data-tabs-target="#lpe" type="button" role="tab" aria-controls="lpe" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-red-700 dark:border-b-red-700 h-full">LPE</button>
        </li>
        <li class="w-full">
            <button id="neraca-tab" data-tabs-target="#neraca" type="button" role="tab" aria-controls="neraca" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-red-700 dark:border-b-red-700 h-full">Neraca</button>
        </li>
        <li class="w-full">
            <button id="ihr-tab" data-tabs-target="#ihr" type="button" role="tab" aria-controls="ihr" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">IHR</button>
        </li>
        <li class="w-full">
            <button id="ujk-tab" data-tabs-target="#ujk" type="button" role="tab" aria-controls="ujk" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">Usulan Jurnal Koreksi</button>
        </li>
        <li class="w-full">
            <button id="tad-tab" data-tabs-target="#tad" type="button" role="tab" aria-controls="tad" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">PA_Teknik Analisis Data</button>
        </li>
        <li class="w-full">
            <button id="uat-tab" data-tabs-target="#uat" type="button" role="tab" aria-controls="uat" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">Uji Aset Tetap</button>
        </li>
        <li class="w-full">
            <button id="kkpp-tab" data-tabs-target="#kkpp" type="button" role="tab" aria-controls="kkpp" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">KKP Pendapatan</button>
        </li>
        <li class="w-full">
            <button id="unp-tab" data-tabs-target="#unp" type="button" role="tab" aria-controls="unp" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">Uji Nilai Persediaan</button>
        </li>
        <li class="w-full">
            <button id="pie-tab" data-tabs-target="#pie" type="button" role="tab" aria-controls="pie" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg  bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 border-b-4 border-b-blue-900 dark:border-b-blue-900 h-full">Perbandingan Intra dan Ekstra</button>
        </li>
    </ul>
    {{-- Tombol Navigasi end--}}

    {{-- Tabel Prosedur Analitis --}}
    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">

        {{-- ID Satker --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="id_satker" role="tabpanel" aria-labelledby="id_satker-tab">
            <div class="relative overflow-x-auto shadow-md rounded-b-lg w-full">
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
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white bg-yellow-400">
                                
                            </th>
                            <td class="px-6 py-4">
                                Diisi Oleh Satker
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white bg-red-700">
                                
                            </th>
                            <td class="px-6 py-4">
                                Terisi Otomatis
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white bg-blue-900">
                                
                            </th>
                            <td class="px-6 py-4">
                                Diisi Oleh Tim Pereviu
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>

        {{-- Neraca Percobaan --}}
        <div class="hidden bg-white rounded-lg dark:bg-slate-500" id="neraca_percobaan" role="tabpanel" aria-labelledby="neraca_percobaan-tab">
            <div class="table-cell max-w-sm p-6 mb-6 bg-blue-100 border border-gray-200 shadow dark:bg-blue-900 dark:border-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Unggah File Excel Output MonSakti
                </h5>
                <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file">    
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mt-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Upload
                    </button>
                </form>
            </div>
            <div class="table-cell max-w-sm p-6 mb-6 bg-blue-100 border border-gray-200 shadow dark:bg-blue-900 dark:border-gray-700">
                <div class="mb-4 flex p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                      <p class="text-justify text-base">File Excel yang diunggah harus sesuai template agar data bisa masuk dengan benar ke dalam database, silahkan lihat contoh di bawah!</p>
                    </div>
                  </div>
                  <a target="_blank" href="https://docs.google.com/spreadsheets/d/15xXFPingHJDZOG84gT_O4t6KE5v0IkQE/edit?usp=sharing&ouid=103642753152574401475&rtpof=true&sd=true">
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mt-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Contoh
                    </button>
                  </a>
            </div>


          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="myTable" class="w-full text-sm text-left">
                <caption class="text-lg font-semibold text-center  text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                    <p class="mt-2">Politeknik Statistika STIS</p>
                    <h1>Kertas Kerja Reviu Laporan Keuangan</h1>
                    Neraca Percobaan
                    <h1 class="mb-2">Untuk Periode Sampai dengan 30 Juni 2022 dan 31 Desember 2021</h1>
                    <div class="text-left text-sm pl-2 pt-6 pb-2 font-normal">
                    <p>Petunjuk pengisian:</p>
                    <p>- Untuk akun saldo normal di Debit (Dr.) diisi dengan nilai positif</p>
                    <p>- Untuk akun saldo normal di Kredit (Cr.) diisi dengan nilai negatif</p>
                    </div>
                </caption>
               
                <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                    <tr>
                        <td colspan="3" scope="col" class="px-6 py-3 text-center">
                            
                        </td>
                        <td colspan="2" scope="col" class="px-6 py-3 text-center border">
                            Sebelum direviu
                        </td>
                        <td colspan="2" scope="col" class="px-6 py-3 text-center">
                            
                        </td>
                        <td scope="col" class="px-6 py-3 text-center bg-black">
                            
                        </td>
                        <td colspan="2" scope="col" class="px-6 py-3 text-center border">
                            Setelah direviu
                        </td>
                        <td colspan="3" scope="col" class="px-6 py-3 text-center">
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="col" class="border text-center">
                            No
                        </th>
                        <th scope="col" class="border text-center">
                            Kode Akun
                        </th>
                        <th scope="col" class="border text-center">
                            Nama Akun
                        </th>
                        <th scope="col" class="border text-center">
                            Semester I 2022 Berbasis Akrual
                        </th>
                        <th scope="col" class="border text-center">
                            Semester I 2022 Berbasis Kas
                        </th>
                        <th scope="col" class="border text-center">
                            Tahun 2021 Berbasis Akrual
                        </th>
                        <th scope="col" class="border text-center">
                            Tahun 2021 Berbasis Kas
                        </th>
                        <th scope="col" class="text-center bg-black">
                            
                        </th>
                        <th scope="col" class="border text-center">
                            Semester I 2022 Berbasis Akrual
                        </th>
                        <th scope="col" class="border text-center">
                            Semester I 2022 Berbasis Kas
                        </th>
                        <th scope="col" class="border text-center">
                            Usulan Jurnal Koreksi (Debet)
                        </th>
                        <th scope="col" class="border text-center">
                            Usulan Jurnal Koreksi (Kredit)
                        </th>
                        <th scope="col" class="border text-center">
                            Neraca Percobaan Setelah Koreksi
                        </th>   
                    </tr>
                </thead>
                
                <tbody class="text-gray-900 dark:text-gray-100">
                    @foreach ($neraca_percobaans as $n)
                    <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 border text-center">
                            {{ $n->id }}
                        </td>
                        <td class="px-6 py-4 border text-center">
                            {{ $n->kode_akun }}
                        </td>
                        {{-- <td class="hover:bg-blue-100 px-6 py-4 border text-left whitespace-nowrap update_record" data-name="nama_akun" data-type="text" data-pk="{{ $n->id }}">
                            {{ $n->nama_akun }}
                        </td> --}}
                        <td class="px-6 py-4 border text-left whitespace-nowrap">
                            {{ $n->nama_akun }}
                        </td>
                        <td class="px-6 py-4 border text-right ">
                            {{ $n->s1_ba_sb }}
                        </td>
                        <td class="px-6 py-4 border text-right">
                            {{ $n->s1_bk_sb }}
                        </td>
                        <td class="px-6 py-4 border text-right">
                            {{ $n->ta_ba_sb }}
                        </td>
                        <td class="px-6 py-4 border text-right">
                            {{ $n->ta_bk_sb }}
                        </td>
                        <td class="px-6 py-4 text-right bg-black">
                            
                        </td>
                        <td class="px-6 py-4 border text-right">
                            {{ $n->s1_ba_st}}
                        </td>
                        <td class="px-6 py-4 border text-right">
                            {{ $n->s1_bk_st }}
                        </td>
                        <td class="px-6 py-4 border text-right">
                            {{ $n->ujkd}}
                        </td>
                        <td class="px-6 py-4 border text-right">
                            {{ $n->ujkk }}
                        </td>
                        <td class="px-6 py-4 border text-right">
                            {{ $n->npsk }}
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
          </div>
        </div>

        {{-- Laporan Operasional --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="lo" role="tabpanel" aria-labelledby="lo-tab">
            <div class="relative overflow-x-auto shadow-mds overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                       Laporan Operasional
                      <h1 class="mb-2">Per 30 Juni 2022 dan 31 Desember 2021</h1>
                  </caption>
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                      <tr>
                          <td colspan="5" scope="col" class="px-6 py-3 text-center border">
                              Sebelum direviu
                          </td>
                          <td scope="col" class="px-6 py-3 text-center bg-black">
                              
                          </td>
                          <td scope="col" class="px-6 py-3 text-center border">
                              Setelah direviu
                          </td>
                      </tr>
                      
                      <tr>
                            <th scope="col" class="px-6 py-3 text-center border">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Link
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Uraian
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Semester I 2022
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Tahun 2021
                            </th>
                            <th scope="col" class="px-6 py-3 text-center bg-black">
                              
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Semester I 2022
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                1
                            </td>
                            <td class="px-6 py-4 border">
                                LO_1
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Pendapatan Negara Bukan Pajak Lainnya
                            </td>
                            <td class="px-6 py-4 border text-right">
                                7.000.000
                            </td>
                            <td class="px-6 py-4 border text-right">
                                5.000.000
                            </td>
                            <td class="px-6 py-4 bg-black">
                                
                            </td>
                            <td class="px-6 py-4 border text-right">
                                7.000.000
                            </td>
                        </tr>            
                    </tbody>
                </table>
              </div>
        </div>

        {{-- Laporan Realisasi Anggaran --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="lra" role="tabpanel" aria-labelledby="lra-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Laporan Realisasi Anggaran Pendapatan dan Belanja
                      <h1 class="mb-2">Untuk Tahun Berakhir Sampai dengan 30 Juni 2022 </h1>
                      <div class="text-left text-sm pl-2 pt-6 pb-2 font-normal">
                          <p>Petunjuk pengisian:</p>
                          <p>- Kolom anggaran diinput dari Laporan Realisasi Anggaran per rincian akun </p>
                          </div>
                  </caption>
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                      <tr>
                          <td colspan="5" scope="col" class="px-6 py-3 text-center border">
                              Sebelum direviu
                          </td>
                          <td scope="col" class="px-6 py-3 text-center bg-black">
                              
                          </td>
                          <td colspan="2" scope="col" class="px-6 py-3 text-center border">
                              Setelah direviu
                          </td>
                      </tr>
                      
                      <tr>
                            <th scope="col" class="px-6 py-3 text-center border">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Link
                            </th>                  
                            <th scope="col" class="px-6 py-3 text-center border">
                                Uraian
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Anggaran 2022
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Realisasi 2022
                            </th>
                            <th scope="col" class="px-6 py-3 text-center bg-black">
                              
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Anggaran 2022
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Realisasi 2022
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                1
                            </td>
                            <td class="px-6 py-4 border">
                                LRA_1
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Pendapatan dari penjualan tanah, gedung, dan bangunan
                            </td>
                            <td class="px-6 py-4 border text-right">
                                7.000.000
                            </td>
                            <td class="px-6 py-4 border text-right">
                                5.000.000
                            </td>
                            <td class="px-6 py-4 bg-black">
                                
                            </td>
                            <td class="px-6 py-4 border text-right">
                                7.000.000
                            </td>
                        </tr>            
                    </tbody>
                </table>
              </div>
        </div>

        {{-- Laporan Perubahan Ekuitas --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="lpe" role="tabpanel" aria-labelledby="lpe-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Laporan Perubahan Equitas
                      <h1 class="mb-2">Per 30 Juni 2022 dan 31 Desember 2021</h1>
                  </caption>
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                      <tr>
                          <td colspan="3" scope="col" class="px-6 py-3">
                              
                          </td>
                          <td scope="col" class="px-6 py-3 text-center border">
                              Sebelum reviu
                          </td>
                          <td scope="col" class="px-6 py-3 text-center border">
                              
                          </td>
                          <td scope="col" class="px-6 py-3 text-center bg-black">
                              
                          </td>
                          <td scope="col" class="px-6 py-3 text-center border">
                              Setelah reviu
                          </td>
                      </tr>
                      
                      <tr>
                            <th scope="col" class="px-6 py-3 text-center border">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Link
                            </th>                  
                            <th scope="col" class="px-6 py-3 text-center border">
                                Uraian
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Semester I 2022
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Tahun 2021
                            </th>
                            <th scope="col" class="px-6 py-3 text-center bg-black">
                              
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Semester I 2022
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                1
                            </td>
                            <td class="px-6 py-4 border">
                                LPE_1
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Ekuitas Awal (Periode Semester I)
                            </td>
                            <td class="px-6 py-4 border text-right">
                                182,175,324,646 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                182,618,921,996 
                            </td>
                            <td class="px-6 py-4 bg-black">
                                
                            </td>
                            <td class="px-6 py-4 border text-right">
                                182,175,324,646 
                            </td>
                        </tr>            
                    </tbody>
                    <tfoot>
                      <tr class="font-semibold text-gray-900 dark:text-white">
                          <td colspan="7" class="px-6 py-3"></td>
                      </tr>
                      <tr class="font-semibold text-gray-900 dark:text-white">
                          <td colspan="2" class="px-6 py-3 text-center border">Kontrol</td>
                          <td class="px-6 py-3 whitespace-nowrap border">Ekuitas Awal Semester I Tahun 2022 = Ekuitas Akhir Tahun 2021</td>
                          <td colspan="4" class="px-6 py-3"></td>
                      </tr>
                  </tfoot>
                </table>
              </div>
        </div>

        {{-- Neraca --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="neraca" role="tabpanel" aria-labelledby="neraca-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                        Neraca
                      <h1 class="mb-2">Per 30 Juni 2022 dan 31 Desember 2021</h1>
                  </caption>
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                      <tr>
                          <td colspan="3" scope="col" class="px-6 py-3">
                              
                          </td>
                          <td scope="col" class="px-6 py-3 text-center border">
                              Sebelum reviu
                          </td>
                          <td scope="col" class="px-6 py-3 text-center border">
                              
                          </td>
                          <td scope="col" class="px-6 py-3 text-center bg-black">
                              
                          </td>
                          <td scope="col" class="px-6 py-3 text-center border">
                              Setelah reviu
                          </td>
                      </tr>
                      
                      <tr>
                            <th scope="col" class="px-6 py-3 text-center border">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Link
                            </th>                  
                            <th scope="col" class="px-6 py-3 text-center border">
                                Uraian
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Semester I 2022
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Tahun 2021
                            </th>
                            <th scope="col" class="px-6 py-3 text-center bg-black">
                              
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Semester I 2022
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                1
                            </td>
                            <td class="px-6 py-4 border">
                                Neraca_1
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Kas di Bendahara Pengeluaran
                            </td>
                            <td class="px-6 py-4 border text-right">
                                470,000,000  
                            </td>
                            <td class="px-6 py-4 border text-right">
                                -
                            </td>
                            <td class="px-6 py-4 bg-black">
                                
                            </td>
                            <td class="px-6 py-4 border text-right">
                                470,000,000  
                            </td>
                        </tr>            
                    </tbody>
                    <tfoot>
                      <tr class="font-semibold text-gray-900 dark:text-white">
                          <td colspan="7" class="px-6 py-3"></td>
                      </tr>
                      <tr class="font-semibold text-gray-900 dark:text-white">
                          <td colspan="2" class="px-6 py-3 text-center border">Kontrol</td>
                          <td class="px-6 py-3 whitespace-nowrap border">(Aset = Kewajiban + Ekuitas)</td>
                          <td class="px-6 py-3 border text-right">29,321,700</td>
                          <td class="px-6 py-3 border text-right">-</td>
                          <td class="px-6 py-3"></td>
                          <td class="px-6 py-3 border text-right">29,321,700</td>
                      </tr>
                      <tr class="font-semibold text-gray-900 dark:text-white">
                          <td colspan="3" class="px-6 py-3"></td>
                          <td class="px-6 py-3 border text-center">FALSE</td>
                          <td class="px-6 py-3 border text-center">TRUE</td>
                          <td class="px-6 py-3"></td>
                          <td class="px-6 py-3 border text-center">FALSE</td>
                      </tr>
                  </tfoot>
                </table>
              </div>
        </div>

        {{-- IHR --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="ihr" role="tabpanel" aria-labelledby="ihr-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                {{-- IHR LRA --}}
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      IKHTISAR HASIL REVIU (IHR)
                      <p>Ikhtisar Hasil Reviu Laporan Realisasi Anggaran (LRA)</p>
                  </caption>
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                      <tr>
                          <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                              No
                          </th>
                          <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                              Nama Akun
                          </th>
                          <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                               Sebelum Reviu(Rp)
                          </th>
                          <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                               Usulan Koreksi(Rp)
                          </th>
                          <th colspan="2" scope="col" class="px-6 py-3 text-center border">
                               Status Koreksi
                          </th>
                          <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                               Setelah Usulan Koreksi Hasil Reviu (Rp)
                          </th>
                      </tr>
                      <tr>
                        <th scope="col" class="px-6 py-3 text-center border">
                            Sudah Dikoreksi (Rp)
                        </th>
                        <th scope="col" class="px-6 py-3 text-center border">
                            Belum Dikoreksi (Rp)
                        </th>
                      </tr>
                      
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                A
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Penerimaan Negara dan Hibah
                            </td>
                            <td class="px-6 py-4 border text-right">
                                5,513,544,673 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                5,513,544,673 
                            </td>
                        </tr>  
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                1
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Pendapatan Dari Penjualan Tanah, Gedung, Dan Bangunan
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                        </tr>           
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                2
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Pendapatan Dari Penjualan Peralatan Dan Mesin
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                        </tr>   
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                3
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Pendapatan Dari Pemindahtanganan BMN Lainnya
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                        </tr>   
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                4
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Pendapatan Sewa Tanah, Gedung, Dan Bangunan
                            </td>
                            <td class="px-6 py-4 border text-right">
                                30,138,231 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                30,138,231 
                            </td>
                        </tr>  
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                5
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Pendapatan Ujian/Seleksi Masuk Pendidikan
                            </td>
                            <td class="px-6 py-4 border text-right">
                                5,481,000,000 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                5,481,000,000 
                            </td>
                        </tr>  
                    </tbody>
                </table>

                {{-- IHR LO --}}
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <p class="mt-2">Politeknik Statistika STIS</p>
                        Ikhtisar Hasil Reviu (IHR)
                        <p>Ikhtisar Hasil Reviu Laporan Operasional (LO)</p>
                    </caption>
                      <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                No
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                Nama Akun
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Sebelum Reviu(Rp)
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Usulan Koreksi(Rp)
                            </th>
                            <th colspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Status Koreksi
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Setelah Usulan Koreksi Hasil Reviu (Rp)
                            </th>
                        </tr>
                        <tr>
                          <th scope="col" class="px-6 py-3 text-center border">
                              Sudah Dikoreksi (Rp)
                          </th>
                          <th scope="col" class="px-6 py-3 text-center border">
                              Belum Dikoreksi (Rp)
                          </th>
                        </tr>
                        
                      </thead>
                      
                      <tbody class="text-gray-900 dark:text-gray-100">
                          <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  A
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                  Pendapatan Operasional
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  5,523,836,126  
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  5,523,836,126 
                              </td>
                          </tr>  
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  1
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Pendapatan Negara Bukan Pajak
                              </td>
                              <td class="px-6 py-4 border text-right">
                                5,523,836,126 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                5,523,836,126 
                              </td>
                          </tr>           
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  2
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                  Lain-Lain Pendapatan Yang Sah
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                          </tr>   
                          <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                B
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Beban Operasional
                            </td>
                            <td class="px-6 py-4 border text-right">
                                20,992,814,290 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                20,992,814,290 
                            </td>
                          </tr> 
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  1
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Beban Pegawai
                              </td>
                              <td class="px-6 py-4 border text-right">
                                9,895,950,615 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                9,895,950,615 
                              </td>
                          </tr>   
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  2
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                 Beban Persediaan
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    3,257,914  
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    3,257,914  
                              </td>
                          </tr>  
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  3
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                  Beban Barang dan Jasa
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    6,182,506,249 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    6,182,506,249 
                              </td>
                          </tr>  
                      </tbody>
                  </table>

                 {{-- IHR LPE --}}
                 <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <p class="mt-2">Politeknik Statistika STIS</p>
                        IKHTISAR HASIL REVIU (IHR)
                        <p>Ikhtisar Hasil Reviu Laporan Perubahan Ekuitas (LPE)</p>
                    </caption>
                      <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                No
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                Nama Akun
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Sebelum Reviu(Rp)
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Usulan Koreksi(Rp)
                            </th>
                            <th colspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Status Koreksi
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Setelah Usulan Koreksi Hasil Reviu (Rp)
                            </th>
                        </tr>
                        <tr>
                          <th scope="col" class="px-6 py-3 text-center border">
                              Sudah Dikoreksi (Rp)
                          </th>
                          <th scope="col" class="px-6 py-3 text-center border">
                              Belum Dikoreksi (Rp)
                          </th>
                        </tr>
                        
                      </thead>
                      
                      <tbody class="text-gray-900 dark:text-gray-100">
                          <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  1
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Ekuitas Awal (Periode Semester I)
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    182,175,324,646 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    182,175,324,646 
                              </td>
                          </tr>  
                          <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                2
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Surplus/Defisit - LO
                            </td>
                            <td class="px-6 py-4 border text-right">
                                (15,466,571,722) 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                (15,466,571,722)
                            </td>
                          </tr>
                          <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                3
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Dampak Kumulatif Perubahan Kebijakan/Kesalahan Mendasar
                            </td>
                            <td class="px-6 py-4 border text-right">
                               -
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                -
                            </td>
                          </tr>
                          <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                4
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Koreksi yang menambah/mengurangi ekuitas (5 s.d. 9)
                            </td>
                            <td class="px-6 py-4 border text-right">
                               -
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                -
                            </td>
                          </tr>
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Penyesuaian nilai aset
                            </td>
                            <td class="px-6 py-4 border text-right">
                               -
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                -
                            </td>
                          </tr>
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Koreksi nilai persediaan
                            </td>
                            <td class="px-6 py-4 border text-right">
                               -
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                -
                            </td>
                          </tr>
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Koreksi atas reklasifikasi
                            </td>
                            <td class="px-6 py-4 border text-right">
                               -
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                -
                            </td>
                          </tr>
                       </tbody>
                  </table>

                  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <p class="mt-2">Politeknik Statistika STIS</p>
                        IKHTISAR HASIL REVIU (IHR)
                        <p>Ikhtisar Hasil Reviu Neraca</p>
                    </caption>
                      <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                No
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                Nama Akun
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Sebelum Reviu(Rp)
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Usulan Koreksi(Rp)
                            </th>
                            <th colspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Status Koreksi
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 text-center border">
                                 Setelah Usulan Koreksi Hasil Reviu (Rp)
                            </th>
                        </tr>
                        <tr>
                          <th scope="col" class="px-6 py-3 text-center border">
                              Sudah Dikoreksi (Rp)
                          </th>
                          <th scope="col" class="px-6 py-3 text-center border">
                              Belum Dikoreksi (Rp)
                          </th>
                        </tr>
                        
                      </thead>
                      
                      <tbody class="text-gray-900 dark:text-gray-100">
                          <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  A
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                  Aset
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    181,340,208,811  
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    181,340,208,811 
                              </td>
                          </tr>  
                          <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  1
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Aset Lancar
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  599,047,725 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  599,047,725 
                              </td>
                          </tr>           
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  2
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                  Lain-Lain Pendapatan Yang Sah
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                          </tr>   
                          <tr class="font-bold bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border">
                                B
                            </td>
                            <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Beban Operasional
                            </td>
                            <td class="px-6 py-4 border text-right">
                                20,992,814,290 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                - 
                            </td>
                            <td class="px-6 py-4 border text-right">
                                20,992,814,290 
                            </td>
                          </tr> 
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  1
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                Beban Pegawai
                              </td>
                              <td class="px-6 py-4 border text-right">
                                9,895,950,615 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                9,895,950,615 
                              </td>
                          </tr>   
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  2
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                 Beban Persediaan
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    3,257,914  
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    3,257,914  
                              </td>
                          </tr>  
                          <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4 border">
                                  3
                              </td>
                              <td class="px-6 py-4 border whitespace-nowrap text-left">
                                  Beban Barang dan Jasa
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    6,182,506,249 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                  - 
                              </td>
                              <td class="px-6 py-4 border text-right">
                                    6,182,506,249 
                              </td>
                          </tr>  
                      </tbody>
                  </table>
              </div>
        </div>

        {{-- Usulan Jurnal Koreksi --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="ujk" role="tabpanel" aria-labelledby="ujk-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Usulan Jurnal Koreksi
                  </caption>
                      <tr>
                            <th scope="col" class="px-6 py-3 text-center border">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Kode Akun
                            </th>                  
                            <th scope="col" class="px-6 py-3 text-center border whitespace-nowrap">
                                Nama Akun
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                Usulan Jurnal Koreksi(Debet)
                            </th>
                            <th scope="col" class="px-6 py-3 text-center border">
                                "Usulan Jurnal Koreksi(Kredit)
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-gray-900 dark:text-gray-100">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border text-center">
                                1
                            </td>
                            <td class="px-6 py-4 border">
                                
                            </td>
                            <td class="px-6 py-4 border">
                                
                            </td>
                            <td class="px-6 py-4 border">
                                
                            </td>
                            <td class="px-6 py-4 border">
                                
                            </td>
                            
                        </tr>            
                    </tbody>
                </table>
              </div>
        </div>

        {{-- PA_Teknik Analisis Data --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="tad" role="tabpanel" aria-labelledby="tad-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      <p>Semester I Tahun Anggaran 2022</p>
                      Prosedur Analitis		
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

        {{-- Uji Aset Tetap --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="uat" role="tabpanel" aria-labelledby="uat-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Kertas Kerja Aset Tetap					
                      <p>Semester I Tahun Anggaran 2022</p>
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

        {{-- KKP Pendapatan --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="kkpp" role="tabpanel" aria-labelledby="kkpp-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Kertas Kerja PNBP				
                      <p>Semester I Tahun Anggaran 2022</p>
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

        {{-- Uji Nilai Persediaan --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="unp" role="tabpanel" aria-labelledby="unp-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Kertas Kerja Persediaan			
                      <p>Semester I Tahun Anggaran 2022</p>
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

        {{-- Perbandingan Intra dan Ekstra --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="pie" role="tabpanel" aria-labelledby="pie-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <caption class="text-lg font-semibold text-center text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                      <p class="mt-2">Politeknik Statistika STIS</p>
                      Kertas Kerja Kondisi Barang		
                      <p>Semester I Tahun Anggaran 2022</p>
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