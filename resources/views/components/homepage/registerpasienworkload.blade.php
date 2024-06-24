 <div class="app-content content ">
     <div class="content-overlay"></div>
     <div class="header-navbar-shadow"></div>
     <div class="content-wrapper container-xxl p-0">
         <div class="content-header row">
             <div class="content-header-left col-md-9 col-12 mb-2">
                 <div class="row breadcrumbs-top">
                     <div class="col-12">
                         <h2 class="content-header-title float-start mb-0">Registration Workload Pasien</h2>
                         <div class="breadcrumb-wrapper">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.html">Home</a>
                                 </li>
                                 <li class="breadcrumb-item"><a href="#">Forms</a>
                                 </li>
                                 <li class="breadcrumb-item active">Form Validation
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
         <div class="content-body">
             <!-- Validation -->
             <section class="bs-validation">
                 <div class="row">
                     <!-- Bootstrap Validation -->
                     <div class="col-md-6 col-12">
                         <div class="card">
                             <div class="card-header">
                                 <h4 class="card-title">Form Registrastion</h4>
                             </div>
                             <div class="card-body">
                                 <form class="needs-validation" novalidate>
                                     <div class="mb-1">
                                         <label class="form-label" for="basic-addon-name">Name</label>

                                         <input type="text" id="basic-addon-name" class="form-control"
                                             placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name"
                                             required />
                                         <div class="valid-feedback">Looks good!</div>
                                         <div class="invalid-feedback">Please enter your name.</div>
                                     </div>
                                     <div class="mb-1">
                                         <label class="form-label" for="basic-default-email1">Email</label>
                                         <input type="email" id="basic-default-email1" class="form-control"
                                             placeholder="john.doe@email.com" aria-label="john.doe@email.com"
                                             required />
                                         <div class="valid-feedback">Looks good!</div>
                                         <div class="invalid-feedback">Please enter a valid email</div>
                                     </div>
                                     <div class="mb-1">
                                         <label class="form-label" for="basic-default-password1">Password</label>
                                         <input type="password" id="basic-default-password1" class="form-control"
                                             placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                             required />
                                         <div class="valid-feedback">Looks good!</div>
                                         <div class="invalid-feedback">Please enter your password.</div>
                                     </div>
                                     <div class="mb-1">
                                         <label class="form-label" for="bsDob">DOB</label>
                                         <input type="text" class="form-control picker" name="dob" id="bsDob"
                                             required />
                                         <div class="valid-feedback">Looks good!</div>
                                         <div class="invalid-feedback">Please enter your date of birth.</div>
                                     </div>
                                     <div class="mb-1">
                                         <label class="form-label" for="select-country1">Country</label>
                                         <select class="form-select" id="select-country1" required>
                                             <option value="">Select Country</option>
                                             <option value="usa">USA</option>
                                             <option value="uk">UK</option>
                                             <option value="france">France</option>
                                             <option value="australia">Australia</option>
                                             <option value="spain">Spain</option>
                                         </select>
                                         <div class="valid-feedback">Looks good!</div>
                                         <div class="invalid-feedback">Please select your country</div>
                                     </div>
                                     <div class="mb-1">
                                         <label for="customFile1" class="form-label">Profile pic</label>
                                         <input class="form-control" type="file" id="customFile1" required />
                                     </div>
                                     <div class="mb-1">
                                         <label class="form-label" class="d-block">Gender</label>
                                         <div class="form-check my-50">
                                             <input type="radio" id="validationRadio3" name="validationRadioBootstrap"
                                                 class="form-check-input" required />
                                             <label class="form-check-label" for="validationRadio3">Male</label>
                                         </div>
                                         <div class="form-check">
                                             <input type="radio" id="validationRadio4" name="validationRadioBootstrap"
                                                 class="form-check-input" required />
                                             <label class="form-check-label" for="validationRadio4">Female</label>
                                         </div>
                                     </div>
                                     <div class="mb-1">
                                         <label for="validationCustomUsername" class="form-label">Username</label>
                                         <div class="input-group has-validation">
                                             <span class="input-group-text" id="inputGroupPrepend">@</span>
                                             <input type="text" class="form-control" id="validationCustomUsername"
                                                 aria-describedby="inputGroupPrepend" required />
                                             <div class="invalid-feedback">Please choose a username.</div>
                                         </div>
                                     </div>
                                     <div class="mb-1">
                                         <label class="d-block form-label" for="validationBioBootstrap">Bio</label>
                                         <textarea class="form-control" id="validationBioBootstrap" name="validationBioBootstrap" rows="3" required></textarea>
                                     </div>
                                     <div class="mb-1">
                                         <div class="form-check">
                                             <input type="checkbox" class="form-check-input"
                                                 id="validationCheckBootstrap" required />
                                             <label class="form-check-label" for="validationCheckBootstrap">Agree to
                                                 our terms and conditions</label>
                                             <div class="invalid-feedback">You must agree before submitting.</div>
                                         </div>
                                     </div>
                                     <button type="submit" class="btn btn-primary">Submit</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <!-- /Bootstrap Validation -->

                     <!-- jQuery Validation -->
                     <div class="col-lg-6">
                         <div class="card">
                             <div class="card-header">
                                 <h4 class="card-title">History Registarion Workload</h4>
                             </div>
                             <div class="card-body">
                                 <ul class="timeline">
                                     <li class="timeline-item">
                                         <span
                                             class="timeline-point timeline-point-secondary timeline-point-indicator"></span>
                                         <div class="timeline-event">
                                             <div
                                                 class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                 <h6>Client Meeting</h6>
                                                 <span class="timeline-event-time">45 min ago</span>
                                             </div>
                                             <p>Project meeting with john @10:15am.</p>
                                             <div class="d-flex flex-row align-items-center">
                                                 <div class="avatar">
                                                     <img src="../../../app-assets/images/avatars/12-small.png"
                                                         alt="avatar" height="38" width="38" />
                                                 </div>
                                                 <div class="ms-50">
                                                     <h6 class="mb-0">John Doe (Client)</h6>
                                                     <span>CEO of Infibeam</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                     <li class="timeline-item">
                                         <span
                                             class="timeline-point timeline-point-success timeline-point-indicator"></span>
                                         <div class="timeline-event">
                                             <div
                                                 class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                 <h6>Financial Report</h6>
                                                 <span class="timeline-event-time">2 hours ago</span>
                                             </div>
                                             <p class="mb-50">Click the button below to read financial reports</p>
                                             <button class="btn btn-outline-primary btn-sm" type="button"
                                                 data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                                 aria-expanded="true" aria-controls="collapseExample">
                                                 Show Report
                                             </button>
                                             <div class="collapse" id="collapseExample">
                                                 <ul class="list-group list-group-flush mt-1">
                                                     <li
                                                         class="list-group-item d-flex justify-content-between flex-wrap">
                                                         <span>Last Year's Profit : <span
                                                                 class="fw-bold">$20000</span></span>
                                                         <i data-feather="share-2"
                                                             class="cursor-pointer font-medium-2"></i>
                                                     </li>
                                                     <li
                                                         class="list-group-item d-flex justify-content-between flex-wrap">
                                                         <span> This Year's Profit : <span
                                                                 class="fw-bold">$25000</span></span>
                                                         <i data-feather="share-2"
                                                             class="cursor-pointer font-medium-2"></i>
                                                     </li>
                                                     <li
                                                         class="list-group-item d-flex justify-content-between flex-wrap">
                                                         <span> Last Year's Commission : <span
                                                                 class="fw-bold">$5000</span></span>
                                                         <i data-feather="share-2"
                                                             class="cursor-pointer font-medium-2"></i>
                                                     </li>
                                                     <li
                                                         class="list-group-item d-flex justify-content-between flex-wrap">
                                                         <span> This Year's Commission : <span
                                                                 class="fw-bold">$7000</span></span>
                                                         <i data-feather="share-2"
                                                             class="cursor-pointer font-medium-2"></i>
                                                     </li>
                                                     <li
                                                         class="list-group-item d-flex justify-content-between flex-wrap">
                                                         <span> This Year's Total Balance : <span
                                                                 class="fw-bold">$70000</span></span>
                                                         <i data-feather="share-2"
                                                             class="cursor-pointer font-medium-2"></i>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!-- /jQuery Validation -->
                 </div>
             </section>
             <!-- /Validation -->

         </div>
     </div>
 </div>
