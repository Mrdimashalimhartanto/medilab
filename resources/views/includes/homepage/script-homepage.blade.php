 <!-- BEGIN: Vendor JS-->
 <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="{{ asset('/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/extensions/moment.min.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
 <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <script src="{{ asset('/app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
 <script src="{{ asset('/app-assets/js/scripts/pages/app-invoice-list.js') }}"></script>
 <!-- END: Page JS-->

 {{-- JS card advance filter --}}
 <script src="{{ asset('/app-assets/js/scripts/cards/card-advance.js') }}"></script>

 {{-- JS Card analytics --}}
 <script src="{{ asset('/app-assets/js/scripts/cards/card-analytics.js') }}"></script>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         // Dapatkan semua elemen <li> di dalam .nav-item
         var navItems = document.querySelectorAll('.nav-item .menu-content li');

         navItems.forEach(function(item) {
             // Tambahkan event listener untuk klik
             item.addEventListener('click', function() {
                 // Hapus kelas 'active' dari semua tab
                 navItems.forEach(function(nav) {
                     nav.classList.remove('active');
                 });

                 // Tambahkan kelas 'active' ke tab yang diklik
                 item.classList.add('active');
             });
         });
     });
 </script>


 <script>
     $(window).on('load', function() {
         if (feather) {
             feather.replace({
                 width: 14,
                 height: 14
             });
         }
     })
 </script>
