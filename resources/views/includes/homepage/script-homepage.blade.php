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
 <script src="{{ asset('/app-assets/js/scripts/cards/card-advance.js') }}"></script>
 <script src="{{ asset('/app-assets/js/scripts/cards/card-analytics.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
 <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <script src="{{ asset('/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
 <script src="{{ asset('/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>

 {{-- JQuery untuk form validasi --}}
 <script src="{{ asset('/app-assets/js/scripts/forms/form-validation.js') }}"></script>
 <!-- END: Page JS-->

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
