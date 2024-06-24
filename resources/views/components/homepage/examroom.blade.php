 <div class="app-content content ">
     <div class="content-overlay"></div>
     <div class="header-navbar-shadow"></div>
     <div class="content-wrapper container-xxl p-0">
         <div class="content-header row">
             <div class="content-header-left col-md-9 col-12 mb-2">
                 <div class="row breadcrumbs-top">
                     <div class="col-12">
                         <h2 class="content-header-title float-start mb-0">Exam Room</h2>
                         <div class="breadcrumb-wrapper">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.html">Home</a>
                                 </li>
                                 <li class="breadcrumb-item active">Exam Room </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         {{-- Exam room --}}
         <section class="app-user-list">
             <div class="row">
                 <div class="col-lg-3 col-sm-6">
                     <div class="card">
                         <div class="card-body d-flex align-items-center justify-content-between">
                             <div>
                                 <h3 class="fw-bolder mb-75">21,459</h3>
                                 <span>Total Users</span>
                             </div>
                             <div class="avatar bg-light-primary p-50">
                                 <span class="avatar-content">
                                     <i data-feather="user" class="font-medium-4"></i>
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                     <div class="card">
                         <div class="card-body d-flex align-items-center justify-content-between">
                             <div>
                                 <h3 class="fw-bolder mb-75">4,567</h3>
                                 <span>Paid Users</span>
                             </div>
                             <div class="avatar bg-light-danger p-50">
                                 <span class="avatar-content">
                                     <i data-feather="user-plus" class="font-medium-4"></i>
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                     <div class="card">
                         <div class="card-body d-flex align-items-center justify-content-between">
                             <div>
                                 <h3 class="fw-bolder mb-75">19,860</h3>
                                 <span>Active Users</span>
                             </div>
                             <div class="avatar bg-light-success p-50">
                                 <span class="avatar-content">
                                     <i data-feather="user-check" class="font-medium-4"></i>
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                     <div class="card">
                         <div class="card-body d-flex align-items-center justify-content-between">
                             <div>
                                 <h3 class="fw-bolder mb-75">237</h3>
                                 <span>Pending Users</span>
                             </div>
                             <div class="avatar bg-light-warning p-50">
                                 <span class="avatar-content">
                                     <i data-feather="user-x" class="font-medium-4"></i>
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </section>
         {{-- End Exam room --}}

         <div class="content-body">

             <!-- Hoverable rows start -->
             <div class="row" id="table-responsive">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Responsive tables</h4>
                         </div>
                         <div class="card-body">
                             <p class="card-text">
                                 Responsive tables allow tables to be scrolled horizontally with ease. Make any table
                                 responsive across all
                                 viewports by adding <code class="highlighter-rouge">.table-responsive</code> class on
                                 <code class="highlighter-rouge">.table</code>. Or, pick a maximum breakpoint with
                                 which
                                 to have a responsive
                                 table up to by adding <code class="highlighter-rouge">
                                     .table-responsive{-sm|-md|-lg|-xl}</code>. Read full
                                 documentation
                                 <a href="https://getbootstrap.com/docs/4.3/content/tables/#responsive-tables"
                                     target="_blank">here.</a>
                             </p>
                             <div class="alert alert-info">
                                 <div class="alert-body">
                                     <h4 class="text-warning">Vertical clipping/truncation</h4>
                                     <p>
                                         Responsive tables make use of <code class="highlighter-rouge">overflow-y:
                                             hidden</code>, which clips off
                                         any content that goes beyond the bottom or top edges of the table. In
                                         particular, this can clip off
                                         dropdown menus and other third-party widgets.
                                     </p>
                                 </div>
                             </div>
                         </div>
                         <div class="table-responsive">
                             <table class="table mb-0">
                                 <thead>
                                     <tr>
                                         <th scope="col" class="text-nowrap">#</th>
                                         <th scope="col" class="text-nowrap">Heading 1</th>
                                         <th scope="col" class="text-nowrap">Heading 2</th>
                                         <th scope="col" class="text-nowrap">Heading 3</th>
                                         <th scope="col" class="text-nowrap">Heading 4</th>
                                         <th scope="col" class="text-nowrap">Heading 5</th>
                                         <th scope="col" class="text-nowrap">Heading 6</th>
                                         <th scope="col" class="text-nowrap">Heading 7</th>
                                         <th scope="col" class="text-nowrap">Heading 8</th>
                                         <th scope="col" class="text-nowrap">Heading 9</th>
                                         <th scope="col" class="text-nowrap">Heading 10</th>
                                         <th scope="col" class="text-nowrap">Heading 11</th>
                                         <th scope="col" class="text-nowrap">Heading 12</th>
                                         <th scope="col" class="text-nowrap">Heading 13</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="text-nowrap">1</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                         <td class="text-nowrap">Table cell</td>
                                     </tr>
                                     <tr>
                                         <td>2</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                     </tr>
                                     <tr>
                                         <td>3</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                     </tr>
                                     <tr>
                                         <td>4</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                         <td>Table cell</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Hoverable rows end -->

         </div>
     </div>
 </div>
