@extends('reviu.main')

@section('content')

<h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Laporan Hasil Reviu</h1>

<a href="https://docs.google.com/document/d/1pjuV9J9574aJxK87qWAqvT_9_6fOXYWT/export?format=doc">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Unduh</button>
</a>

<a href="https://docs.google.com/document/d/1pjuV9J9574aJxK87qWAqvT_9_6fOXYWT/preview" target="_blank" rel="noopener noreferrer">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat</button>
</a>

<iframe src="https://docs.google.com/document/d/e/2PACX-1vRhNULap447-KKpnG1IMR3cGL8y21MHwXjYNrvS5Ao7DvZ9cFcYWTI8R0506_xeLQ/pub?embedded=true" class="aspect-square w-full"></iframe>


@endsection