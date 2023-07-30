@extends('admin.main')

@section('content')

<h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Halaman Kelola Pengguna Satker</h1>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambahkan Instansi</button>

    <div id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="add-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Instansi</h3>
                    <form class="space-y-6" action="#">
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Instansi</label>
                            <input type="text" name="password" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Instansi</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                        </div>
                        <button type="submit" class="w-full mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 

    <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Direviu
                </th>
                <th scope="col" class="px-6 py-3">
                    Instansi
                </th>
                <th scope="col" class="px-6 py-3">
                    PJ Satker
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Sekretariat Utama
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Pusdiklat
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    POLSTAT STIS
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Wilayah Aceh
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Kab Aceh Barat Daya
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Prov Aceh
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Wilayah Sumatera Utara   
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Prov Sumatera Utara
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Kota Medan
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Wilayah Sumatera Barat
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Provinsi Sumatera Barat
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Kota Padang
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Wilayah Riau
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Prov Riau
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Kab Bengkalis
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Wilayah Lampung
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Prov Lampung
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center text-center">
                        <input id="checkbox-table-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    BPS Kota Bandar Lampung
                </th>
                <td class="px-6 py-4">
                    Nama PJ
                </td>
                <td class="px-6 py-4 text-center">
                    <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a class="md:ml-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
           
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
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Pengguna Satker</h3>
                            <form class="space-y-6" action="#">
                                <fieldset>
                                    <label class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apakah Instansi Akan Direviu?</label>
                                    <legend class="sr-only">Direviu</legend>
                                    <div class="flex items-center mb-1">
                                    <input id="country-option-1" type="radio" name="direviu" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                                    <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Ya
                                    </label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                    <input id="country-option-2" type="radio" name="direviu" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Tidak
                                    </label>
                                    </div>                      
                                </fieldset>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama PJ Satker</label>
                                    <input type="text" name="password" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Pengguna</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                </div>
                                <button type="submit" class="w-full mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </tbody>
    </table>
</div>


@endsection