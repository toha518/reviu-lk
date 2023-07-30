 {{-- Sidebar --}}
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-60 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 overflow-y-auto" aria-label="Sidebar">
  <div class=" px-3 pb-4 overflow-y-auto bg-white border-r border-gray-200 h-full dark:bg-gray-800">
     <ul class="space-y-2">
      {{-- Menu Home --}}
        <li>
           <a href="/" class=" {{ ($title==="Home") ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
           'flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' }}
           ">
              <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ ($title==="Home") ? 'text-gray-900 dark:text-white' :'text-gray-500' }}"
              fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">    <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
              <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" /></svg>
              <span class="ml-3">Home</span>
           </a>
        </li>
        
        {{-- Menu Kelola Pengguna --}}
        <li>
         @php
             $kelola = array('Kelola Pengguna Satker', 'Kelola Pengguna Pereviu');
         @endphp
         <button type="button" class=" {{ (in_array($title, $kelola)) ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
         'flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' }}
         "
         aria-controls="dropdown0" data-collapse-toggle="dropdown0">
               <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ (in_array($title, $kelola)) ? 'text-gray-900 dark:text-white' :'text-gray-500' }}"
               fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
               </svg>
               <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
                  Kelola Pengguna
               </span>
               <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         </button>
         <ul id="dropdown0" class="py-2 space-y-2
         {{ (in_array($title, $kelola)) ? '' :'hidden' }}
         ">
               <li>
                  <a href="/kelola-pengguna-satker" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 group text-gray-900 dark:text-white {{ ($title==="Kelola Pengguna Satker") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Kelola Pengguna Satker</a>
               </li>
               <li>
                  <a href="/kelola-pengguna-pereviu" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 text-gray-900 group dark:text-white {{ ($title==="Kelola Pengguna Pereviu") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Kelola Pengguna Pereviu</a>
               </li>
         </ul>
        </li>
        
        {{-- Menu Kelola Dokumen Sumber --}}
        <li>
         <a href="/kelola-dokumen-sumber" class=" {{ ($title==="Kelola Dokumen Sumber") ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
         'flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' }}
         ">
           <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ ($title==="Kelola Dokumen Sumber") ? 'text-gray-900 dark:text-white' :'text-gray-500' }}"
            fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">    
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
           </svg>
            <span class="ml-3">Kelola Dokumen Sumber</span>
         </a>
        </li>

        {{-- Menu Prosedur Analitis --}}
        <li> 
         @php
             $satker = array('Prosedur Analitis', 'Unggah LK');
         @endphp
         <button type="button" class=" {{ (in_array($title, $satker)) ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
         'flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' }}
         "
         aria-controls="dropdown1" data-collapse-toggle="dropdown1">
               <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ (in_array($title, $satker)) ? 'text-gray-900 dark:text-white' :'text-gray-500' }}"
               fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z" clip-rule="evenodd" />
                  <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" /></svg>
               <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
                  Kertas Kerja Satker
               </span>
               <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         </button>
         <ul id="dropdown1" class="py-2 space-y-2
         {{ (in_array($title, $satker)) ? '' :'hidden' }}
         ">
               <li>
                  <a href="/prosedur-analitis" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 group text-gray-900 dark:text-white {{ ($title==="Prosedur Analitis") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Isi Kertas Kerja Satker</a>
               </li>
               <li>
                  <a href="/unggah-lk" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 text-gray-900 group dark:text-white {{ ($title==="Unggah LK") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Unggah Dokumen Sumber</a>
               </li>
         </ul>
        </li>

        {{-- Menu Tim Pereviu --}}
        <li>
         @php
             $reviu = array('Kertas Kerja Reviu', 'Catatan Hasil Reviu', 'Laporan Hasil Reviu','Unggah LHR');
         @endphp 
         <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown2" data-collapse-toggle="dropdown2">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path d="M11.625 16.5a1.875 1.875 0 100-3.75 1.875 1.875 0 000 3.75z" />
                  <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 013.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 013.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 01-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875zm6 16.5c.66 0 1.277-.19 1.797-.518l1.048 1.048a.75.75 0 001.06-1.06l-1.047-1.048A3.375 3.375 0 1011.625 18z" clip-rule="evenodd" />
                  <path d="M14.25 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0016.5 7.5h-1.875a.375.375 0 01-.375-.375V5.25z" /></svg>
               <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Tim Pereviu</span>
               <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         </button>
         <ul id="dropdown2" class="py-2 space-y-2
         {{ (in_array($title, $reviu)) ? '' :'hidden' }}
         ">
               <li>
                  <a href="/kertas-kerja-reviu" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 group text-gray-900 dark:text-white {{ ($title==="Kertas Kerja Reviu") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Isi Kertas Kerja Reviu</a>
               </li>
               <li>
                  <a href="/catatan-hasil-reviu" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 text-gray-900 group dark:text-white {{ ($title==="Catatan Hasil Reviu") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Catatan Hasil Reviu</a>
               </li>
               <li>
                  <a href="/laporan-hasil-reviu" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 text-gray-900 group dark:text-white {{ ($title==="Laporan Hasil Reviu") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Laporan Hasil Reviu</a>
               </li>
               <li>
                  <a href="/unggah-lhr" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 text-gray-900 group dark:text-white {{ ($title==="Unggah LHR") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Unggah LHR & CHR</a>
               </li>
         </ul>
        </li>

        {{-- Menu Tindak Lanjut --}}
        <li>
         @php
             $tindak_lanjut = array('Kertas Kerja Tindak Lanjut', 'Catatan Hasil Tindak Lanjut', 'Laporan Hasil Tindak Lanjut','Unggah LHTL');
         @endphp 
         <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown3" data-collapse-toggle="dropdown3">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <<path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5zm6.61 10.936a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                  <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" /></svg>
               <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Tindak Lanjut</span>
               <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         </button>
         <ul id="dropdown3" class="py-2 space-y-2
         {{ (in_array($title, $tindak_lanjut)) ? '' :'hidden' }}
         ">
               <li>
                  <a href="/kertas-kerja-tindak-lanjut" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 group text-gray-900 dark:text-white {{ ($title==="Kertas Kerja Tindak Lanjut") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Isi Kertas Kerja Tindak Lanjut</a>
               </li>
               <li>
                  <a href="/catatan-hasil-tindak-lanjut" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 text-gray-900 group dark:text-white {{ ($title==="Catatan Hasil Tindak Lanjut") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Catatan Hasil Tindak Lanjut</a>
               </li>
               <li>
                  <a href="/laporan-hasil-tindak-lanjut" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 text-gray-900 group dark:text-white {{ ($title==="Laporan Hasil Tindak Lanjut") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Laporan Hasil Tindak Lanjut</a>
               </li>
               <li>
                  <a href="/unggah-lhtl" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 text-gray-900 group dark:text-white {{ ($title==="Unggah LHTL") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Unggah LHTL & CHTL</a>
               </li>
         </ul>
        </li>

        {{-- Menu Monitoring --}}
        <li>
         <a href="/monitoring" class=" {{ ($title==="Monitoring") ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
         'flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' }}
         ">
            <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ ($title==="Monitoring") ? 'text-gray-900 dark:text-white' :'text-gray-500' }}"
            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">    <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
            <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.54 15h6.42l.5 1.5H8.29l.5-1.5zm8.085-8.995a.75.75 0 10-.75-1.299 12.81 12.81 0 00-3.558 3.05L11.03 8.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l2.47-2.47 1.617 1.618a.75.75 0 001.146-.102 11.312 11.312 0 013.612-3.321z" clip-rule="evenodd" /></svg>
            <span class="ml-3">Monitoring</span>
         </a>       
        </li>

        {{-- Menu File --}}
        <li>
         <a href="/dokumen" class=" {{ ($title==="File") ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
         'flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' }}
         ">
            <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ ($title==="File") ? 'text-gray-900 dark:text-white' :'text-gray-500' }}"
            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" /></svg>
            <span class="ml-3">File</span>
         </a>  
        </li>
       

     </ul>
  </div>
</aside>
{{-- Sidebar end --}}