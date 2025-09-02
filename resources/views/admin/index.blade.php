<x-app-layout>
    <!-- Start Content -->
            <div class="content pb-0">

                <!-- Page Header -->
                <div class="d-flex align-items-sm-center justify-content-between flex-wrap gap-2 mb-4">
                    <div>
                        <h4 class="fw-bold mb-0">Admin Dashboard </h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                       <a href="new-appointment.html" class="btn btn-primary d-inline-flex align-items-center"><i class="ti ti-plus me-1"></i>New Blog</a>
                    </div>
				</div>
				<!-- End Page Header -->

                <!-- start row -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="/admin_asset/assets/img/bg/bg-01.svg" alt="img" class="position-absolute start-0 top-0">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-2 justify-content-between">
                                  <span class="avatar bg-primary rounded-circle"><i class="ti ti-book fs-24"></i></span>
                                  <div class="text-end">
                                    <span class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-success">+95%</span>
                                    <p class="fs-13 mb-0">in last 7 Days </p>
                                  </div>
                               </div>
                               <div class="d-flex align-items-center justify-content-between">
                                   <div>
                                     <p class="mb-1">Posts</p>
                                     <h3 class="fw-bold mb-0">247</h3>
                                   </div>
                                   <div>
                                     <div id="s-col" class="chart-set"></div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="/admin_asset/assets/img/bg/bg-02.svg" alt="img" class="position-absolute start-0 top-0">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-2 justify-content-between">
                                  <span class="avatar bg-danger rounded-circle"><i class="ti ti-book fs-24"></i></span>
                                  <div class="text-end">
                                    <span class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-success">+25%</span>
                                    <p class="fs-13 mb-0">in last 7 Days </p>
                                  </div>
                               </div>
                               <div class="d-flex align-items-center justify-content-between">
                                   <div>
                                     <p class="mb-1">Views</p>
                                     <h3 class="fw-bold mb-0">4178</h3>
                                   </div>
                                   <div>
                                     <div id="s-col-2" class="chart-set"></div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="/admin_asset/assets/img/bg/bg-03.svg" alt="img" class="position-absolute start-0 top-0">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-2 justify-content-between">
                                  <span class="avatar bg-info rounded-circle"><i class="ti ti-book fs-24"></i></span>
                                  <div class="text-end">
                                    <span class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-danger">-15%</span>
                                    <p class="fs-13 mb-0">in last 7 Days </p>
                                  </div>
                               </div>
                               <div class="d-flex align-items-center justify-content-between">
                                   <div>
                                     <p class="mb-1">Visits</p>
                                     <h3 class="fw-bold mb-0">12178</h3>
                                   </div>
                                   <div>
                                     <div id="s-col-3" class="chart-set"></div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="/admin_asset/assets/img/bg/bg-04.svg" alt="img" class="position-absolute start-0 top-0">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-2 justify-content-between">
                                  <span class="avatar bg-success rounded-circle"><i class="ti ti-book fs-24"></i></span>
                                  <div class="text-end">
                                    <span class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-success">+25%</span>
                                    <p class="fs-13 mb-0">in last 7 Days </p>
                                  </div>
                               </div>
                               <div class="d-flex align-items-center justify-content-between overflow-hidden">
                                   <div>
                                     <p class="mb-1">Revenue</p>
                                     <h3 class="fw-bold mb-0 text-truncate">$55,1240</h3>
                                   </div>
                                   <div>
                                     <div id="s-col-4" class="chart-set"></div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-xl-8">

                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Blog Statistics</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Monthly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row row-gap-3 mb-2">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body text-truncate"><i class="ti ti-point-filled me-1 text-primary"></i>All Appointments</p>
                                            <h5 class="fw-bold mb-0">6314</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body"><i class="ti ti-point-filled me-1 text-danger"></i>Cancelled</p>
                                            <h5 class="fw-bold mb-0">456</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body"><i class="ti ti-point-filled me-1 text-warning"></i>Reschedule</p>
                                            <h5 class="fw-bold mb-0">745</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body"><i class="ti ti-point-filled me-1 text-success"></i>Completed</p>
                                            <h5 class="fw-bold mb-0">4578</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart-set" id="s-col-19"></div>
                            </div>
                        </div>
                        <!-- card end -->

                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Popular Blogs</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-gap-3">
                                    <div class="col-md-4">
                                        <div class="border shadow-sm p-3 rounded-2">
                                            <div class="d-flex align-items-center mb-3">
                                                <a href="doctor-details.html" class="avatar me-2 flex-shrink-0 position-relative">
                                                    <span class="online text-success position-absolute end-0 bottom-0 pe-1"><i class="ti ti-circle-filled d-flex bg-white fs-6 rounded-circle border border-1 border-white"></i></span>
                                                    <img src="/admin_asset/assets/img/doctors/doctor-01.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html" class="fw-semibold">Health is wealth</a></h6>
                                                  <p class="mb-0 fs-13">Cardiologist</p>
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="text-dark fw-semibold">258</span> Bookings</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border shadow-sm p-3 rounded-2">
                                            <div class="d-flex align-items-center mb-3">
                                                <a href="doctor-details.html" class="avatar me-2 flex-shrink-0 position-relative">
                                                    <span class="online text-success position-absolute end-0 bottom-0 pe-1"><i class="ti ti-circle-filled d-flex bg-white fs-6 rounded-circle border border-1 border-white"></i></span>
                                                    <img src="/admin_asset/assets/img/doctors/doctor-03.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html" class="fw-semibold">Benefits of eating healthy</a></h6>
                                                  <p class="mb-0 fs-13">Pediatrician</p>
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="text-dark fw-semibold">125</span> Bookings</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border shadow-sm p-3 rounded-2">
                                            <div class="d-flex align-items-center mb-3">
                                                <a href="doctor-details.html" class="avatar me-2 flex-shrink-0 position-relative">
                                                    <img src="/admin_asset/assets/img/doctors/doctor-04.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html" class="fw-semibold">The power of habit</a></h6>
                                                  <p class="mb-0 fs-13">Gynecologist</p>
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="text-dark fw-semibold">115</span> views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->

                    </div>
                     <!-- col end -->

                     <!-- col start -->
                    <div class="col-xl-4">
                        <div class="card shadow-sm">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 text-truncate">Calendar</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        All Type <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">In Person</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Online</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="datepic mb-1"></div>

                                <a href="appointments.html" class="btn btn-light w-100">View All blogs</a>
                            </div>
                        </div>
                    </div>
                     <!-- col end -->
                </div>
                <!-- end row -->



                <!-- row start -->
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Latest Blogs</h5>
                                <a href="appointments.html" class="btn fw-normal btn-outline-white">View All</a>
                            </div>
                            <div class="card-body">
                                <!-- Table start -->
                                <div class="table-responsive table-nowrap">
                                    <table class="table border">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Doctor</th>
                                                <th>Patient</th>
                                                <th>Date & Time</th>
                                                <th>Mode</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/doctors/doctor-06.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. John Smith</a></h6>
                                                          <p class="mb-0 fs-13">Neurosurgeon</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/profiles/avatar-02.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">Jesus Adams</a></h6>
                                                          <p class="mb-0 fs-13">+1 41254 45214</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>28 May 2025 - 11:15 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Confirmed</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/doctors/doctor-07.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Lisa White</a></h6>
                                                          <p class="mb-0 fs-13">Oncologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/profiles/avatar-27.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">Ezra Belcher</a></h6>
                                                          <p class="mb-0 fs-13">+1 65895 41247</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>29 May 2025 - 11:30 AM</td>
                                                <td>In-Person</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-danger border border-danger rounded fw-medium">Cancelled</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/doctors/doctor-10.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Patricia Brown</a></h6>
                                                          <p class="mb-0 fs-13">Pulmonologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/profiles/avatar-20.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">Glen Lentz</a></h6>
                                                          <p class="mb-0 fs-13">+1 62458 45845</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>30 May 2025 - 09:30 AM </td>
                                                <td>Online</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Confirmed</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/doctors/doctor-11.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Rachel Green</a></h6>
                                                          <p class="mb-0 fs-13">Urologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/profiles/avatar-06.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">Bernard Griffith</a></h6>
                                                          <p class="mb-0 fs-13">+1 61422 45214</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>30 May 2025 - 10:00 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-secondary border border-secondary rounded fw-medium">Checked Out</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/doctors/doctor-14.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Michael Smith</a></h6>
                                                          <p class="mb-0 fs-13">Cardiologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="/admin_asset/assets/img/profiles/avatar-25.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">John Elsass</a></h6>
                                                          <p class="mb-0 fs-13">+1 47851 26371</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>30 May 2025 - 11:00 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-info border border-info rounded fw-medium">Schedule</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->



            </div>
            <!-- End Content -->
</x-app-layout>
