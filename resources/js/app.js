import './bootstrap';
import 'flowbite';

var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});

$(document).ready(function() {
    $('#myTable').DataTable( {
        columnDefs: [
            {
                targets: [-3,-2,-1,0,1,2,3],
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
        $('#myTable6').DataTable( {
            columnDefs: [
                {
                    targets: [-1,0,1],
                    className: 'dt-head-center'
                }
            ]
        } );
        $('#myTable7').DataTable( {
            columnDefs: [
                {
                    targets: [-1,0,1],
                    className: 'dt-head-center'
                }
            ]
        } );
        $('#myTable8').DataTable( {
            columnDefs: [
                {
                    targets: [-1,0,1],
                    className: 'dt-head-center'
                }
            ]
        } );
        $('#myTable9').DataTable( {
            columnDefs: [
                {
                    targets: [-1,0,1],
                    className: 'dt-head-center'
                }
            ]
        } );
        $('#myTable10').DataTable( {
            columnDefs: [
                {
                    targets: [-1,0,1],
                    className: 'dt-head-center'
                }
            ]
        } );

});
