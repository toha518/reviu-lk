@extends('layouts.main')

@section('content')

<h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Catatan Hasil Tindak Lanjut</h1>

<a href="https://docs.google.com/document/d/1wkTHIJLbLFsvRu8SPUbsqb9iINmzy3_e/export?format=doc">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Unduh</button>
</a>

<a href="https://docs.google.com/document/d/1wkTHIJLbLFsvRu8SPUbsqb9iINmzy3_e/preview" target="_blank" rel="noopener noreferrer">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat</button>
</a>

<iframe src="https://docs.google.com/document/d/e/2PACX-1vSTBqTiFd_cB-R-irT3NikjvW6tiMv9FFlGAQ2vl85hn3BLjGg2eqfg0ygzxogEog/pub?embedded=true"
class="aspect-square w-full"></iframe>

@endsection