 {{-- Sidebar --}}
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-60 h-screen pt-20 transition-transform -translate-x-full bg-blue-200 border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 overflow-y-auto" aria-label="Sidebar">
  <div class=" px-3 pb-4 overflow-y-auto bg-blue-200 h-full dark:bg-gray-800">
     <ul class="space-y-2">
      {{-- Menu Home --}}
        <li>
           <a href="/admin" class=" {{ ($title==="Home") ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
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
                  <a href="/admin/kelola-pengguna-satker" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 group text-gray-900 dark:text-white {{ ($title==="Kelola Pengguna Satker") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Kelola Pengguna Satker</a>
               </li>
               <li>
                  <a href="/admin/kelola-pengguna-pereviu" class="flex items-center w-full p-2 text-base font-normal  transition duration-75 rounded-lg pl-11 text-gray-900 group dark:text-white {{ ($title==="Kelola Pengguna Pereviu") ? 'bg-gray-100 dark:bg-gray-700' :' hover:bg-gray-100 dark:hover:bg-gray-700' }} ">Kelola Pengguna Pereviu</a>
               </li>
         </ul>
        </li>
        
        {{-- Menu Kelola Dokumen Sumber --}}
        <li>
         <a href="/admin/kelola-dokumen-sumber" class=" {{ ($title==="Kelola Dokumen Sumber") ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
         'flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' }}
         ">
           <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ ($title==="Kelola Dokumen Sumber") ? 'text-gray-900 dark:text-white' :'text-gray-500' }}"
            fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">    
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
           </svg>
            <span class="ml-3">Kelola Dokumen Sumber</span>
         </a>
        </li>


        {{-- Menu Monitoring --}}
        <li>
         <a href="/admin/monitoring" class=" {{ ($title==="Monitoring") ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
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
         <a href="/admin/dokumen" class=" {{ ($title==="File") ? 'flex items-center w-full p-2 text-base rounded-lg text-blue-800 transition duration-75 bg-gray-100 rounded-t-lg dark:bg-gray-500 dark:text-white font-semibold' :
         'flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' }}
         ">
            <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white {{ ($title==="File") ? 'text-gray-900 dark:text-white' :'text-gray-500' }}"
            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" /></svg>
            <span class="ml-3">Dokumen Pedoman</span>
         </a>  
        </li>
       

     </ul>
  </div>
</aside>
{{-- Sidebar end --}}