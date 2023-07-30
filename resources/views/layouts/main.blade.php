<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reviu Laporan Keuangan | {{ $title }}</title>
  <link rel="icon" type="image/x-icon" href="/img/bps.png">
  @vite(['resources/css/app.css','resources/js/app.js'])

  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

{{-- <script>
  $(document).ready(function() {
    $('#myTable').DataTable( {
        columnDefs: [
            {
                targets: [-1,0,1],
                className: 'dt-head-center'
            }
        ]
        } );
    $('#myTable1').DataTable( {
        columnDefs: [
            {
                targets: [-1,0,1],
                className: 'dt-head-center'
            }
        ]
        } );
    $('#myTable2').DataTable( {
        columnDefs: [
            {
                targets: [-1,0,1],
                className: 'dt-head-center'
            }
        ]
        } );
    $('#myTable3').DataTable( {
        columnDefs: [
            {
                targets: [-1,0,1],
                className: 'dt-head-center'
            }
        ]
        } );
        $('#myTable4').DataTable( {
        columnDefs: [
            {
                targets: [-1,0,1],
                className: 'dt-head-center'
            }
        ]
        } );
        $('#myTable5').DataTable( {
        columnDefs: [
            {
                targets: [-1,0,1],
                className: 'dt-head-center'
            }
        ]
        } );

});
</script> --}}

</head>
<body class="bg-white dark:bg-slate-500">

@include('partials.navbar')
@include('partials.sidebar')
  
  <div class="pt-3 sm:ml-60 overflow-x-auto">
     <div class="p-4 mt-14">
        
      @yield('content')
      
      @include('partials.footer')
     
     </div>
  </div>
  
</body>
    {{-- Tailwind Elements --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</html>