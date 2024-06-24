 <!-- BEGIN: Content-->
 <div class="app-content content ">
     <div class="content-overlay"></div>
     <div class="header-navbar-shadow"></div>
     <div class="content-wrapper container-xxl p-0">
         <div class="content-header row">
         </div>
         <div class="content-body">
             <!-- Dashboard Analytics Start -->
             <section id="dashboard-analytics">
                 @include('components.homepage.greeting-card')

                 {{-- Jumlah total pasien --}}
                 <div class="col-lg-12 col-12">
                     <div class="card card-statistics">
                         <div class="card-header">
                             <h4 class="card-title">Total Pasien</h4>
                             <div class="d-flex align-items-center">
                                 <p class="card-text me-25 mb-0">Data terupdate 1 Bulan</p>
                             </div>
                         </div>
                         <div class="card-body statistics-body">
                             <div class="row">
                                 <div class="col-md-3 col-sm-6 col-12 mb-2 mb-md-0">
                                     <div class="d-flex flex-row">
                                         <div class="avatar bg-light-primary me-2">
                                             <div class="avatar-content">
                                                 <i data-feather="trending-up" class="avatar-icon"></i>
                                             </div>
                                         </div>
                                         <div class="my-auto">
                                             <h4 class="fw-bolder mb-0">230k</h4>
                                             <p class="card-text font-small-3 mb-0">Sales</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-6 col-12 mb-2 mb-md-0">
                                     <div class="d-flex flex-row">
                                         <div class="avatar bg-light-info me-2">
                                             <div class="avatar-content">
                                                 <i data-feather="user" class="avatar-icon"></i>
                                             </div>
                                         </div>
                                         <div class="my-auto">
                                             <h4 class="fw-bolder mb-0">8.549k</h4>
                                             <p class="card-text font-small-3 mb-0">Customers</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                     <div class="d-flex flex-row">
                                         <div class="avatar bg-light-danger me-2">
                                             <div class="avatar-content">
                                                 <i data-feather="box" class="avatar-icon"></i>
                                             </div>
                                         </div>
                                         <div class="my-auto">
                                             <h4 class="fw-bolder mb-0">1.423k</h4>
                                             <p class="card-text font-small-3 mb-0">Products</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-6 col-12">
                                     <div class="d-flex flex-row">
                                         <div class="avatar bg-light-success me-2">
                                             <div class="avatar-content">
                                                 <i data-feather="dollar-sign" class="avatar-icon"></i>
                                             </div>
                                         </div>
                                         <div class="my-auto">
                                             <h4 class="fw-bolder mb-0">$9745</h4>
                                             <p class="card-text font-small-3 mb-0">Revenue</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>


                 <div class="row match-height">
                     <!-- Employee Task Card -->
                     @include('components.homepage.listdoctor-homepage')
                     <!--/ Employee Task Card -->

                     <!-- Doctor Meetup Card -->
                     @include('components.homepage.doctor-meetup-homepage')
                     <!--/ Doctor Meetup Card -->

                     <!-- Profile Doctor -->
                     @include('components.homepage.profile-doctor-homepage')
                     <!--/ Profile Doctor -->

                     <!-- User timeline -->
                     @include('components.homepage.timeline-homepage')
                     <!-- End: User timeline -->
                 </div>


                 <!-- table chart -->
                 @include('components.homepage.chart-homepage')
                 <!--/ List DataTable -->
             </section>

         </div>
     </div>
 </div>
 <!-- END: Content-->
