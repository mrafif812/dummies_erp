@extends('layouts.master')
@section('title')
    {{ config('app.name') }} | Dashboard
@endsection

@section('inner-styles')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection

@section('breadcrumbs')
    @include('includes.breadcrumbs', ['heading' => 'Dashboard', 'main' => 'Dashboard', 'child' => 'Dashboard'])
@endsection

@section('content')
    <div class="row project-wrapper">
        <div class="col-xxl-8">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Inprogress Projects
                                    </p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                data-target="825">0</span></h4>
                                        <span class="badge badge-soft-danger fs-12"><i
                                                class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>5.02 %</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Projects this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded-2 fs-2">
                                        <i data-feather="award" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted mb-3">Overdue Projects</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                data-target="7522">0</span></h4>
                                        <span class="badge badge-soft-success fs-12"><i
                                                class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>3.58 %</span>
                                    </div>
                                    <p class="text-muted mb-0">Leads this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded-2 fs-2">
                                        <i data-feather="clock" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Pending Tasks</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0">
                                            <span class="counter-value" data-target="825">0</span>
                                        </h4>
                                        <span class="badge badge-soft-danger fs-12"><i
                                                class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35 %</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Work this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded-2 fs-2">
                                        <i data-feather="clock" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Overdue Tasks</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0">
                                            <span class="counter-value" data-target="825">0</span>
                                        </h4>
                                        <span class="badge badge-soft-danger fs-12"><i
                                                class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35 %</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Work this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <div class="card card-body h-90">
                        <div class="d-flex mb-4 align-items-center">
                            <div class="flex-shrink-0">
                                <img src="assets/images/users/avatar-1.jpg" alt=""
                                    class="avatar-sm rounded-circle" />
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h5 class="card-title mb-1">Oliver Phillips</h5>
                                <p class="text-muted mb-0">Digital Marketing</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <h6 class="mb-1">$15,548</h6>
                                <p class="card-text text-muted">Total Projects</p>
                            </div>
                            <div class="col-xl-6">
                                <h6 class="mb-1">$15,548</h6>
                                <p class="card-text text-muted">Open Tasks</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card h-90">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Birthdays</h6>
                        </div>
                        <div class="card-body overflow-scroll-y">
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">Oliver Phillips</h5>
                                    <p class="text-muted mb-0">Digital Marketing</p>
                                </div>
                            </div>
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">Oliver Phillips</h5>
                                    <p class="text-muted mb-0">Digital Marketing</p>
                                </div>
                            </div>
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">Oliver Phillips</h5>
                                    <p class="text-muted mb-0">Digital Marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card h-90">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Work From Home</h6>
                        </div>
                        <div class="card-body overflow-scroll-y">
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">Oliver Phillips</h5>
                                    <p class="text-muted mb-0">Digital Marketing</p>
                                </div>
                            </div>
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">Oliver Phillips</h5>
                                    <p class="text-muted mb-0">Digital Marketing</p>
                                </div>
                            </div>
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">Oliver Phillips</h5>
                                    <p class="text-muted mb-0">Digital Marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card h-90">
                        <div class="card-header">
                            <h6 class="card-title mb-0">On Leaves</h6>
                        </div>
                        <div class="card-body overflow-scroll-y">
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">Oliver Phillips</h5>
                                    <p class="text-muted mb-0">Digital Marketing</p>
                                </div>
                            </div>
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">Oliver Phillips</h5>
                                    <p class="text-muted mb-0">Digital Marketing</p>
                                </div>
                            </div>
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">Oliver Phillips</h5>
                                    <p class="text-muted mb-0">Digital Marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">My Projects</h5>
                        </div>
                        <div class="card-body">
                            <table
                                class="table table-bordered scroll-vertical dt-responsive nowrap align-middle mdl-data-table"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Project</th>
                                        <th>Task</th>
                                        <th>Client Name</th>
                                        <th>Assigned To</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Priority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>VLZ-452</td>
                                        <td>Symox v1.0.0</td>
                                        <td><a href="#!">Add Dynamic Contact List</a></td>
                                        <td>RH Nichols</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-3.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>03 Oct, 2021</td>
                                        <td><span class="badge badge-soft-info">Re-open</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-453</td>
                                        <td>Doot - Chat App Template</td>
                                        <td><a href="#!">Additional Calendar</a></td>
                                        <td>Diana Kohler</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-4.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>05 Oct, 2021</td>
                                        <td><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-454</td>
                                        <td>Qexal - Landing Page</td>
                                        <td><a href="#!">Make a creating an account profile</a></td>
                                        <td>David Nichols</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-8.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>27 April, 2022</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-455</td>
                                        <td>Dorsin - Landing Page</td>
                                        <td><a href="#!">Apologize for shopping Error!</a></td>
                                        <td>Tonya Noble</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>14 June, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-456</td>
                                        <td>Minimal - v2.1.0</td>
                                        <td><a href="#!">Support for theme</a></td>
                                        <td>Donald Palmer</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-2.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>25 June, 2021</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-457</td>
                                        <td>Dason - v1.0.0</td>
                                        <td><a href="#!">Benner design for FB & Twitter</a></td>
                                        <td>Jennifer Carter</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-8.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>14 Aug, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-458</td>
                                        <td>Velzon v1.6.0</td>
                                        <td><a href="#!">Add datatables</a></td>
                                        <td>James Morris</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-4.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>12 March, 2022</td>
                                        <td><span class="badge badge-soft-primary">Open</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-460</td>
                                        <td>Skote v2.0.0</td>
                                        <td><a href="#!">Support for theme</a></td>
                                        <td>Nancy Martino</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-3.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-10.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-10.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-9.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-9.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>28 Feb, 2022</td>
                                        <td><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-461</td>
                                        <td>Velzon v1.0.0</td>
                                        <td><a href="#!">Form submit issue</a></td>
                                        <td>Grace Coles</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-9.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-9.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-10.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-10.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>07 Jan, 2022</td>
                                        <td><span class="badge badge-soft-success">New</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-462</td>
                                        <td>Minimal - v2.2.0</td>
                                        <td><a href="#!">Edit customer testimonial</a></td>
                                        <td>Freda</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-2.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>16 Aug, 2021</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-454</td>
                                        <td>Qexal - Landing Page</td>
                                        <td><a href="#!">Make a creating an account profile</a></td>
                                        <td>David Nichols</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-8.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>27 April, 2022</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-455</td>
                                        <td>Dorsin - Landing Page</td>
                                        <td><a href="#!">Apologize for shopping Error!</a></td>
                                        <td>Tonya Noble</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>14 June, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-456</td>
                                        <td>Minimal - v2.1.0</td>
                                        <td><a href="#!">Support for theme</a></td>
                                        <td>Donald Palmer</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-2.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>25 June, 2021</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-457</td>
                                        <td>Dason - v1.0.0</td>
                                        <td><a href="#!">Benner design for FB & Twitter</a></td>
                                        <td>Jennifer Carter</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-8.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>14 Aug, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">My Tasks</h5>
                        </div>
                        <div class="card-body">
                            <table
                                class="table table-bordered scroll-vertical dt-responsive nowrap align-middle mdl-data-table"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Project</th>
                                        <th>Task</th>
                                        <th>Client Name</th>
                                        <th>Assigned To</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Priority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>VLZ-452</td>
                                        <td>Symox v1.0.0</td>
                                        <td><a href="#!">Add Dynamic Contact List</a></td>
                                        <td>RH Nichols</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-3.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>03 Oct, 2021</td>
                                        <td><span class="badge badge-soft-info">Re-open</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-453</td>
                                        <td>Doot - Chat App Template</td>
                                        <td><a href="#!">Additional Calendar</a></td>
                                        <td>Diana Kohler</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-4.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>05 Oct, 2021</td>
                                        <td><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-454</td>
                                        <td>Qexal - Landing Page</td>
                                        <td><a href="#!">Make a creating an account profile</a></td>
                                        <td>David Nichols</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-8.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>27 April, 2022</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-455</td>
                                        <td>Dorsin - Landing Page</td>
                                        <td><a href="#!">Apologize for shopping Error!</a></td>
                                        <td>Tonya Noble</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>14 June, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-456</td>
                                        <td>Minimal - v2.1.0</td>
                                        <td><a href="#!">Support for theme</a></td>
                                        <td>Donald Palmer</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-2.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>25 June, 2021</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-457</td>
                                        <td>Dason - v1.0.0</td>
                                        <td><a href="#!">Benner design for FB & Twitter</a></td>
                                        <td>Jennifer Carter</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-8.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>14 Aug, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-458</td>
                                        <td>Velzon v1.6.0</td>
                                        <td><a href="#!">Add datatables</a></td>
                                        <td>James Morris</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-4.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>12 March, 2022</td>
                                        <td><span class="badge badge-soft-primary">Open</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-460</td>
                                        <td>Skote v2.0.0</td>
                                        <td><a href="#!">Support for theme</a></td>
                                        <td>Nancy Martino</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-3.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-10.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-10.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-9.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-9.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>28 Feb, 2022</td>
                                        <td><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-461</td>
                                        <td>Velzon v1.0.0</td>
                                        <td><a href="#!">Form submit issue</a></td>
                                        <td>Grace Coles</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-9.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-9.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-10.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-10.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>07 Jan, 2022</td>
                                        <td><span class="badge badge-soft-success">New</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-462</td>
                                        <td>Minimal - v2.2.0</td>
                                        <td><a href="#!">Edit customer testimonial</a></td>
                                        <td>Freda</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-2.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>16 Aug, 2021</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-454</td>
                                        <td>Qexal - Landing Page</td>
                                        <td><a href="#!">Make a creating an account profile</a></td>
                                        <td>David Nichols</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-8.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>27 April, 2022</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-455</td>
                                        <td>Dorsin - Landing Page</td>
                                        <td><a href="#!">Apologize for shopping Error!</a></td>
                                        <td>Tonya Noble</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>14 June, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-456</td>
                                        <td>Minimal - v2.1.0</td>
                                        <td><a href="#!">Support for theme</a></td>
                                        <td>Donald Palmer</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-2.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>25 June, 2021</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>VLZ-457</td>
                                        <td>Dason - v1.0.0</td>
                                        <td><a href="#!">Benner design for FB & Twitter</a></td>
                                        <td>Jennifer Carter</td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-6.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-7.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-img="avatar-8.jpg" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td>14 Aug, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
@endsection

@section('inner-scripts')
    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

    <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
@endsection
