@extends('satker.main')

@section('content')

<h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Monitoring Progres Pengisian Kertas Kerja</h1>

<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
    {{-- Tombol Navigasi --}}
    <ul class="text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
        <li class="w-full">
            <button id="prosedur-analitis-tab" data-tabs-target="#prosedur-analitis" type="button" role="tab" aria-controls="prosedur-analitis" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 h-full">Prosedur Analitis</button>
        </li>
        <li class="w-full">
            <button id="kkr-tab" data-tabs-target="#kkr" type="button" role="tab" aria-controls="kkr" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 h-full">Kertas Kerja Reviu</button>
        </li>
        </li>
        <li class="w-full">
            <button id="kktl-tab" data-tabs-target="#kktl" type="button" role="tab" aria-controls="kktl" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
            Kertas Kerja Tindak Lanjut</button>
        </li>
    </ul>
    {{-- Tombol Navigasi end--}}

    {{-- Monitoring --}}
    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">

        {{-- Prosedur Analitis --}}
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="prosedur-analitis" role="tabpanel" aria-labelledby="prosedur-analitis-tab">
            <script>
                // Initialization for ES Users
                import {
                Chart,
                initTE,
                } from "tw-elements";

                initTE({ Chart });
            </script>
            
            <div class="mx-auto w-3/5 overflow-hidden">
                <canvas
                  data-te-chart="bar"
                  data-te-dataset-label="Rata - rata progres pengisian"
                  data-te-labels="['Gelombang I', 'Gelombang II' , 'Gelombang III' , 'Gelombang IV' ]"
                  data-te-dataset-data="[95, 84, 83, 49]">
                </canvas>
            </div>
               
        </div>

        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="kkr" role="tabpanel" aria-labelledby="kkr-tab">
            <script>
                // Initialization for ES Users
                import {
                Chart,
                initTE,
                } from "tw-elements";

                initTE({ Chart });
            </script>
            
            <div class="mx-auto w-3/5 overflow-hidden">
                <canvas
                data-te-chart="bar"
                data-te-dataset-label="Rata - rata progres pengisian"
                data-te-labels="['Gelombang I', 'Gelombang II' , 'Gelombang III' , 'Gelombang IV' ]"
                data-te-dataset-data="[93, 82, 80, 46]">
              </canvas>
            </div>
               
        </div>

        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="kktl" role="tabpanel" aria-labelledby="kktl-tab">
            <script>
                // Initialization for ES Users
                import {
                Chart,
                initTE,
                } from "tw-elements";

                initTE({ Chart });
            </script>
            
            <div class="mx-auto w-3/5 overflow-hidden">
                <canvas
                data-te-chart="bar"
                data-te-dataset-label="Rata - rata progres pengisian"
                data-te-labels="['Gelombang I', 'Gelombang II' , 'Gelombang III' , 'Gelombang IV' ]"
                data-te-dataset-data="[90, 79, 76, 39]">
              </canvas>
            </div>
        </div>

        

    </div>
    {{-- Tabel File end --}}
</div>

    
@endsection