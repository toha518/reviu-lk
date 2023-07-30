@extends('satker.main')

@section('content')

<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
    {{-- Tombol Navigasi --}}
    <ul class="text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
        <li class="w-full">
            <button id="id_satker-tab" data-tabs-target="#id_satker" type="button" role="tab" aria-controls="id_satker" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 h-full">ID_Satker</button>
        </li>
        <li class="w-full">
            <button id="rekomendasi-tab" data-tabs-target="#rekomendasi" type="button" role="tab" aria-controls="rekomendasi" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 h-full">Tindak Lanjut Rekomendasi</button>
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
                    </tbody>
                </table>
              </div>
        </div>

        {{-- Tindak Lanjut Rekomendasi --}}
        <div class="hidden bg-white rounded-lg dark:bg-slate-500" id="rekomendasi" role="tabpanel" aria-labelledby="rekomendasi-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll block" style="max-height: 30rem">
                <table id="myTable1" class="w-full text-sm text-left">
                    <caption class="text-lg font-semibold text-center  text-gray-900 bg-slate-200 dark:text-white dark:bg-gray-800">
                        <h1 class="mt-2">Kertas Kerja Tindak Lanjut</h1>
                        <p class="mb-2">Politeknik Statistika STIS</p>
                    </caption>
                    
                    <thead class="text-sm text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
                        <tr>
                            <th rowspan="2" scope="col" class="px-6 py-3 border text-center">
                                No
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 border text-center">
                                Index KKR
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 border text-center whitespace-nowrap">
                                Catatan Hasil Reviu
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 border text-center">
                                Rekomendasi Hasil Reviu
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 border text-center">
                                Tanggapan Satker
                            </th>
                            <th rowspan="2" scope="col" class="px-6 py-3 border text-center">
                                Tanggapan PIC Akuntansi
                            </th>
                            <th colspan="2" scope="col" class="px-6 py-3 border text-center">
                                Pemantauan Tindak Lanjut Anggota Tim
                            </th>
                            <th colspan="2" scope="col" class="px-6 py-3 border text-center">
                                Pemantauan Tindak Lanjut Ketua Tim
                            </th>
                            <th colspan="2" scope="col" class="px-6 py-3 border text-center">
                                Pemantauan Tindak Lanjut Pengendali Teknis
                            </th>   
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3 border text-center whitespace-nowrap">
                                Tindak Lanjut
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Selesai Reviu
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center whitespace-nowrap">
                                Tindak Lanjut
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center">
                                Selesai Reviu
                            </th>
                            <th scope="col" class="px-6 py-3 border text-center whitespace-nowrap">
                                Tindak Lanjut
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
                            <td class="px-3 py-2 border text-left">
                                Sakti.7
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Satker belum melalukan tutup GLP bulan Juni 2022.
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Operator SAKTI agar melakukan tutup GLP bulan Juni 2022.
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Operator SAKTI sudah melakukan tutup GLP bulan Juni 2022 yang dilaksanakan pada tanggal 1 Agustus 2022. Bukti dapat diunduh pada link sbb: https://drive.google.com/drive/u/1/folders/1plPV6n7lgh0yNSFy62sNzPeZXUNQh2uF
                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">
                                Tanggapan telah sesuai
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Tanggapan telah sesuai
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Tanggapan telah sesuai
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>     
                        </tr> 
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                2
                            </td>
                            <td class="px-3 py-2 border text-left">
                                LRA.7
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Selisih dikarenakan adanya transfer keluar sebesar Rp211.604.488 dan pembelian sebesar Rp49.500.000, di samping itu terdapat realisasi pembelian sebesar Rp4.500.000,- namun belum menambah aset tetap
                            </td>
                            <td class="px-3 py-2 border text-left">
                                BPS Provinsi Sumatera Utara melalui tim penyusun LK agar menambahkan penjelasan terjadinya selisih tersebut ke dalam CaLK atas LK Semester I 2022
                            </td>
                            <td class="px-3 py-2 border text-left">
                                
                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>     
                        </tr> 
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                3
                            </td>
                            <td class="px-3 py-2 border text-left">
                                LO.1
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Satker salah dalam melakukan penginputan PNBP. Satker menginput Pendapatan dari Pemindahtanganan BMN Lainnya sebesar Rp24.882.222,-, sedangkan pada bukti SSBP adalah Pendapatan dari Penjualan Peralatan dan Mesin
                            </td>
                            <td class="px-3 py-2 border text-left">
                                BPS Provinsi Sumatera Utara melalui operator laporan agar melakukan koreksi akun pendapatan sesuai dengan dokumen sumber yaitu SSBP.
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Bukti setor tersebut sebenarnya berasal dari KPKNL, sehingga yang menginput kode pendapatan adalah pihak KPKNL. Tindak lanjut sudah dilakukan oleh BPS Provinsi Sumatera Utara dengan melakukan koreksi akun yang dilaksanakan pada bulan April 2022. Sehingga untuk LK Triwulan III sudah diperbaiki dengan Pendapatan penjualan peralatan dan mesin. Bukti dapat diunduh pada link berikut https://drive.google.com/drive/u/1/folders/1oLtky2hojg4G1ZwB6Un06WRUbQ86pZW8.   Pada LK Semester I, tidak ditemukan lagi akun atau redaksi Pendapatan dari pemindahtanganan BMN lainnya, karena pada bulan April 2022 telah dilakukan koreksi akun tersebut. Bukti dapat diunduh pada link sbb:
                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">
                                Tanggapan telah sesuai
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Tanggapan telah sesuai
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Tanggapan telah sesuai
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>     
                        </tr> 
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                4
                            </td>
                            <td class="px-3 py-2 border text-left">
                                LO.4
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Selisih senilai Rp. 2.137.500 karena adanya pembelian barang persediaan yang SP2Dnya baru terbit pada bulan Juli 2022
                            </td>
                            <td class="px-3 py-2 border text-left">
                                BPS Provinsi Sumatera Utara melalui operator persediaan agar melengkapi bukti opname fisik persediaan untuk menyakini angka koreksi tambah persedian per tanggal periode LK dan menjelaskan hal tersebut kedalam CaLK atas LK Semester I TA 2022
                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
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
                                CALK.8u
                            </td>
                            <td class="px-3 py-2 border text-left">
                                CaLK belum dilengkapi tabel rincian atas saldo uang muka KPPN 
                            </td>
                            <td class="px-3 py-2 border text-left">
                                BPS Provinsi Sumatera Utara melalui operator persediaan agar melengkapi bukti opname fisik persediaan untuk menyakini angka koreksi tambah persedian per tanggal periode LK dan menjelaskan hal tersebut kedalam CaLK atas LK Semester I TA 2022
                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>     
                        </tr> 
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                6
                            </td>
                            <td class="px-3 py-2 border text-left">
                                CALK.8x
                            </td>
                            <td class="px-3 py-2 border text-left">
                                CaLK belum dilengkapi tabel rincian atas saldo Ekuitas
                            </td>
                            <td class="px-3 py-2 border text-left">
                                BPS Provinsi Sumatera Utara melalui tim penyusun LK agar menambahkan tabel rincian atas saldo Ekuitas pada LK Semester I TA 2022
                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>     
                        </tr> 
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-3 py-2 border text-center">
                                7
                            </td>
                            <td class="px-3 py-2 border text-left">
                                CALK.9b.8
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Kegiatan non operasional telah membandingkan antara tanggal laporan dibandingkan dengan periode sebelumnya, namun belum dilengkapi besaran saldonya
                            </td>
                            <td class="px-3 py-2 border text-left">
                                BPS Provinsi Sumatera Utara melalui tim penyusun LK agar menambahkan nilai besaran saldo atas kegiatan non operasional yang diperbandingkan pada CaLK atas LK Semester I TA 2022
                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">

                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-3 py-2 border text-left">
                                Belum di tindak lanjuti
                            </td>
                            <td class="px-3 py-2 border">
                                <input type="checkbox" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>     
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    {{-- Tabel Prosedur Analitis end --}}
</div>

    
@endsection