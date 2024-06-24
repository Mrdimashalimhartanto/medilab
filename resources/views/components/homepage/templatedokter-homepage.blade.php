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
