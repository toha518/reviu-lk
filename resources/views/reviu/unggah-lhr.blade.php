@extends('reviu.main')

@section('content')


<h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Unggah Laporan Hasil Reviu</h1>

{{-- Laporan Hasil Reviu --}}
<div class="inline-block max-w-sm p-6 bg-slate-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <h2 class="block text-xl font-semibold text-black dark:text-white">
        Unggah File Laporan Hasil Reviu
    </h2>
    <h2 class="block mb-2 text-xl font-semibold text-black dark:text-white">
        (dalam bentuk pdf dan sudah ditandatangani)
    </h2>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
    <input class="block w-auto text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
    <p class="mt-1 text-sm text-gray-700 dark:text-gray-300" id="file_input_help">Laporan Hasil Reviu</p>
</div>

{{-- Catatan Hasil Reviu --}}
<div class="inline-block xl:ml-20 max-w-sm p-6 bg-slate-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <h2 class="block text-xl font-semibold text-black dark:text-white">
        Unggah File Catatan Hasil Reviu
    </h2>
    <h2 class="block mb-2 text-xl font-semibold text-black dark:text-white">
        (dalam bentuk pdf dan sudah ditandatangani)
    </h2>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
    <input class="block w-auto text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
    <p class="mt-1 text-sm text-gray-700 dark:text-gray-300" id="file_input_help">Catatan Hasil Reviu</p>
</div>

    
@endsection