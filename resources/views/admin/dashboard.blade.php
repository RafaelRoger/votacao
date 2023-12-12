@extends('theme.admin')
@section('title', 'Kuhava | Dashboard')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-activity">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg></div>
                                Dashboard
                            </h1>
                            <div class="page-header-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="row">
                <div class="col-xxl-4 col-xl-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body h-100 p-5">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-xxl-12">
                                    <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                        <h1 class="text-primary">Welcome to Kuhava LDA!</h1>
                                        <p class="text-gray-700 mb-0">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Asperiores ex, molestias vero omnis adipisci est
                                            similique, optio cupiditate nemo quidem perspiciatis non quasi
                                            expedita repellat sed temporibus libero culpa amet.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid"
                                        src="{{ url('assets/img/at-work.svg') }}" style="max-width: 26rem">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 mb-4">
                    <div class="card card-header-actions h-100">
                        <div class="card-header">
                            Recent Activity
                            <div class="dropdown no-caret">
                                <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                    id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-more-vertical text-gray-500">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg></button>
                                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                    aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Filter Activity:</h6>
                                    <a class="dropdown-item" href="#!"><span
                                            class="badge bg-green-soft text-green my-1">Commerce</span></a>
                                    <a class="dropdown-item" href="#!"><span
                                            class="badge bg-blue-soft text-blue my-1">Reporting</span></a>
                                    <a class="dropdown-item" href="#!"><span
                                            class="badge bg-yellow-soft text-yellow my-1">Server</span></a>
                                    <a class="dropdown-item" href="#!"><span
                                            class="badge bg-purple-soft text-purple my-1">Users</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="timeline timeline-xs">
                                <!-- Timeline Item 1-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">27 min</div>
                                        <div class="timeline-item-marker-indicator bg-green"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New order placed!
                                        <a class="fw-bold text-dark" href="#!">Order #2912</a>
                                        has been successfully placed.
                                    </div>
                                </div>
                                <!-- Timeline Item 2-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">58 min</div>
                                        <div class="timeline-item-marker-indicator bg-blue"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        Your
                                        <a class="fw-bold text-dark" href="#!">weekly report</a>
                                        has been generated and is ready to view.
                                    </div>
                                </div>
                                <!-- Timeline Item 3-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">2 hrs</div>
                                        <div class="timeline-item-marker-indicator bg-purple"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New user
                                        <a class="fw-bold text-dark" href="#!">Rafael Munguambe</a>
                                        has registered
                                    </div>
                                </div>
                                <!-- Timeline Item 4-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">1 day</div>
                                        <div class="timeline-item-marker-indicator bg-yellow"></div>
                                    </div>
                                    <div class="timeline-item-content">Server activity monitor alert</div>
                                </div>
                                <!-- Timeline Item 5-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">1 day</div>
                                        <div class="timeline-item-marker-indicator bg-green"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New order placed!
                                        <a class="fw-bold text-dark" href="#!">Order #2911</a>
                                        has been successfully placed.
                                    </div>
                                </div>
                                <!-- Timeline Item 6-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">1 day</div>
                                        <div class="timeline-item-marker-indicator bg-purple"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        Details for
                                        <a class="fw-bold text-dark" href="#!">Marketing and Planning
                                            Meeting</a>
                                        have been updated.
                                    </div>
                                </div>
                                <!-- Timeline Item 7-->
                                <div class="timeline-item">
                                    <div class="timeline-item-marker">
                                        <div class="timeline-item-marker-text">2 days</div>
                                        <div class="timeline-item-marker-indicator bg-green"></div>
                                    </div>
                                    <div class="timeline-item-content">
                                        New order placed!
                                        <a class="fw-bold text-dark" href="#!">Order #2910</a>
                                        has been successfully placed.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 mb-4">
                    <div class="card card-header-actions h-100">
                        <div class="card-header">
                            Progress Tracker
                            <div class="dropdown no-caret">
                                <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                    id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-more-vertical text-gray-500">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg></button>
                                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#!">
                                        <div class="dropdown-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-list text-gray-500">
                                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                            </svg></div>
                                        Manage Tasks
                                    </a>
                                    <a class="dropdown-item" href="#!">
                                        <div class="dropdown-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-plus-circle text-gray-500">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg></div>
                                        Add New Task
                                    </a>
                                    <a class="dropdown-item" href="#!">
                                        <div class="dropdown-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-minus-circle text-gray-500">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg></div>
                                        Delete Tasks
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="small">
                                Server Migration
                                <span class="float-end fw-bold">20%</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small">
                                Sales Tracking
                                <span class="float-end fw-bold">40%</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small">
                                Customer Database
                                <span class="float-end fw-bold">60%</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small">
                                Payout Details
                                <span class="float-end fw-bold">80%</span>
                            </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small">
                                Account Setup
                                <span class="float-end fw-bold">Complete!</span>
                            </h4>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="card-footer position-relative">
                            <div class="d-flex align-items-center justify-content-between small text-body">
                                <a class="stretched-link text-body" href="#!">Visit Task Center</a>
                                <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="angle-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Example Colored Cards for Dashboard Demo-->
            <div class="row">
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Earnings (Monthly)</div>
                                    <div class="text-lg fw-bold">$40,000</div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-calendar feather-xl text-white-50">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="#!">View Report</a>
                            <div class="text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-warning text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Earnings (Annual)</div>
                                    <div class="text-lg fw-bold">$215,000</div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-dollar-sign feather-xl text-white-50">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="#!">View Report</a>
                            <div class="text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Task Completion</div>
                                    <div class="text-lg fw-bold">24</div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-check-square feather-xl text-white-50">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="#!">View Tasks</a>
                            <div class="text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Pending Requests</div>
                                    <div class="text-lg fw-bold">17</div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-message-circle feather-xl text-white-50">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="#!">View Requests</a>
                            <div class="text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
    @endSection