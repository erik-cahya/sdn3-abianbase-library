<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Edmate Learning Dashboard HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin') }}/assets/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/bootstrap.min.css">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/file-upload.css">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/plyr.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/full-calendar.css">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/jquery-ui.css">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/editor-quill.css">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/apexcharts.css">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/calendar.css">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/jquery-jvectormap-2.0.5.css">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/main.css">
</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ============================ Sidebar Start ============================ -->

    <!-- ============================ Sidebar End  ============================ -->

    <div class="dashboard-main-wrapper m-0">

        <div class="dashboard-body">

            <div class="card d-flex justify-content-center p-40">

                <a href="index.html" class="sidebar__logo position-sticky inset-block-start-0 w-100 z-1 bg-white text-center">
                    {{-- <img src="{{ asset('admin') }}/assets/images/logo/logo.png" alt="Logo"> --}}
                    <img src="{{ asset('assets/logo_dark.png') }}" alt="Logo" width="200px">
                    <hr>
                </a>

                <form action="#" class="w-100 d-sm-block d-none">
                    <div class="position-relative">
                        <button type="submit" class="input-icon d-flex pointer-event-none text-xl text-gray-100"><i class="ph ph-magnifying-glass"></i></button>
                        <input type="text" class="form-control focus-border-main-600 bg-main-50 rounded-pill placeholder-15 h-40 border-transparent ps-40" placeholder="Search...">
                    </div>
                </form>
            </div>

            <div class="card mt-50 overflow-hidden">
                <div class="card-body p-30">
                    <table id="assignmentTable" class="table-striped table">
                        <thead>
                            <tr>
                                <th class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox"
                                            id="selectAll">
                                    </div>
                                </th>
                                <th class="h6 text-gray-300">Students</th>
                                <th class="h6 text-gray-300">Lesson</th>
                                <th class="h6 text-gray-300">Deadline</th>
                                <th class="h6 text-gray-300">Sent</th>
                                <th class="h6 text-gray-300">Status</th>
                                <th class="h6 text-gray-300">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img1.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Jane Cooper</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Web & Mobile Design</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Nov 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Nov 18, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 d-inline-flex align-items-center rounded-pill gap-8 bg-teal-50 px-8 py-2 text-teal-600">
                                        <span class="rounded-circle h-6 w-6 flex-shrink-0 bg-teal-600"></span>
                                        Send
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img2.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Albert Flores</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Graphics Design</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Dec 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Feb 18, 2025</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 bg-warning-50 text-warning-600 d-inline-flex align-items-center rounded-pill gap-8 px-8 py-2">
                                        <span class="bg-warning-600 rounded-circle h-6 w-6 flex-shrink-0"></span>
                                        Checking
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img3.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Leslie Alexander</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Figma</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Feb 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Nov 18, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 d-inline-flex align-items-center rounded-pill gap-8 bg-purple-50 px-8 py-2 text-purple-600">
                                        <span class="rounded-circle h-6 w-6 flex-shrink-0 bg-purple-600"></span>
                                        Assigned
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img4.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Guy Hawkins</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Creating Web Design</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">June 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">June 21, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 bg-danger-50 text-danger-600 d-inline-flex align-items-center rounded-pill gap-8 px-8 py-2">
                                        <span class="bg-danger-600 rounded-circle h-6 w-6 flex-shrink-0"></span>
                                        Decline
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img5.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Jacob Jones</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Complete Wordpress Course</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">June 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">July 18, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 d-inline-flex align-items-center rounded-pill gap-8 bg-green-50 px-8 py-2 text-green-600">
                                        <span class="rounded-circle h-6 w-6 flex-shrink-0 bg-green-600"></span>
                                        Accepted
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img2.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Guy Hawkins</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Webflow Essentials Course</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Aug 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Sep 18, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 bg-success-50 text-success-600 d-inline-flex align-items-center rounded-pill gap-8 px-8 py-2">
                                        <span class="bg-success-600 rounded-circle h-6 w-6 flex-shrink-0"></span>
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img1.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Jacob Jones</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Beginners Guide to Design</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Sep 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Sep 22, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 d-inline-flex align-items-center rounded-pill gap-8 bg-pink-50 px-8 py-2 text-pink-600">
                                        <span class="rounded-circle h-6 w-6 flex-shrink-0 bg-pink-600"></span>
                                        Not Submitted
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img5.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Albert Flores</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">AngularJS Crash Course </span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Oct 19, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Nov 18, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 bg-success-50 text-success-600 d-inline-flex align-items-center rounded-pill gap-8 px-8 py-2">
                                        <span class="bg-success-600 rounded-circle h-6 w-6 flex-shrink-0"></span>
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img3.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Jenny Wilson</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Complete Wordpress Course</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Sep 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Dec 18, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 bg-success-50 text-success-600 d-inline-flex align-items-center rounded-pill gap-8 px-8 py-2">
                                        <span class="bg-success-600 rounded-circle h-6 w-6 flex-shrink-0"></span>
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img4.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Sunny Maria</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Responsive Web Design</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Nov 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Oct 18, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 bg-success-50 text-success-600 d-inline-flex align-items-center rounded-pill gap-8 px-8 py-2">
                                        <span class="bg-success-600 rounded-circle h-6 w-6 flex-shrink-0"></span>
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img5.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Eleanor Pena</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Theme Development</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Oct 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Dec 20, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 bg-success-50 text-success-600 d-inline-flex align-items-center rounded-pill gap-8 px-8 py-2">
                                        <span class="bg-success-600 rounded-circle h-6 w-6 flex-shrink-0"></span>
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fixed-width">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-4 border-gray-200" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="flex-align gap-8">
                                        <img src="{{ asset('admin') }}/assets/images/thumbs/student-img1.png" alt=""
                                            class="rounded-circle h-40 w-40">
                                        <span class="h6 fw-medium mb-0 text-gray-300">Albert Flores</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Complete Python Bootcamp</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Nov 18, 2024</span>
                                </td>
                                <td>
                                    <span class="h6 fw-medium mb-0 text-gray-300">Dec 18, 2024</span>
                                </td>
                                <td>
                                    <span
                                        class="text-13 bg-success-50 text-success-600 d-inline-flex align-items-center rounded-pill gap-8 px-8 py-2">
                                        <span class="bg-success-600 rounded-circle h-6 w-6 flex-shrink-0"></span>
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a href="#"
                                        class="bg-main-50 text-main-600 rounded-pill hover-bg-main-600 hover-text-white px-14 py-2">View
                                        More</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer flex-between flex-wrap">
                    <span class="text-gray-900">Showing 1 to 10 of 12 entries</span>
                    <ul class="pagination flex-align flex-wrap">
                        <li class="page-item active">
                            <a class="page-link flex-center text-15 rounded-8 fw-medium h-44 w-44" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link flex-center text-15 rounded-8 fw-medium h-44 w-44" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link flex-center text-15 rounded-8 fw-medium h-44 w-44" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link flex-center text-15 rounded-8 fw-medium h-44 w-44" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link flex-center text-15 rounded-8 fw-medium h-44 w-44" href="#">8</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link flex-center text-15 rounded-8 fw-medium h-44 w-44" href="#">9</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link flex-center text-15 rounded-8 fw-medium h-44 w-44" href="#">10</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="dashboard-footer">
            <div class="flex-between flex-wrap gap-16">
                <p class="text-13 fw-normal text-gray-300"> &copy; Copyright Edmate 2024, All Right Reserverd</p>
                <div class="flex-align flex-wrap gap-16">
                    <a href="#"
                        class="text-13 fw-normal hover-text-main-600 hover-text-decoration-underline text-gray-300">License</a>
                    <a href="#"
                        class="text-13 fw-normal hover-text-main-600 hover-text-decoration-underline text-gray-300">More
                        Themes</a>
                    <a href="#"
                        class="text-13 fw-normal hover-text-main-600 hover-text-decoration-underline text-gray-300">Documentation</a>
                    <a href="#"
                        class="text-13 fw-normal hover-text-main-600 hover-text-decoration-underline text-gray-300">Support</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery js -->
    <script src="{{ asset('admin') }}/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('admin') }}/assets/js/boostrap.bundle.min.js"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset('admin') }}/assets/js/phosphor-icon.js"></script>
    <!-- file upload -->
    <script src="{{ asset('admin') }}/assets/js/file-upload.js"></script>
    <!-- file upload -->
    <script src="{{ asset('admin') }}/assets/js/plyr.js"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="{{ asset('admin') }}/assets/js/full-calendar.js"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin') }}/assets/js/jquery-ui.js"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin') }}/assets/js/editor-quill.js"></script>
    <!-- apex charts -->
    <script src="{{ asset('admin') }}/assets/js/apexcharts.min.js"></script>
    <!-- Calendar Js -->
    <script src="{{ asset('admin') }}/assets/js/calendar.js"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset('admin') }}/assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset('admin') }}/assets/js/jquery-jvectormap-world-mill-en.js"></script>

    <!-- main js -->
    <script src="{{ asset('admin') }}/assets/js/main.js"></script>

    <script>
        // ========================== Export Js Start ==============================
        document.getElementById('exportOptions').addEventListener('change', function() {
            const format = this.value;
            const table = document.getElementById('assignmentTable');
            let data = [];
            const headers = [];

            // Get the table headers
            table.querySelectorAll('thead th').forEach(th => {
                headers.push(th.innerText.trim());
            });

            // Get the table rows
            table.querySelectorAll('tbody tr').forEach(tr => {
                const row = {};
                tr.querySelectorAll('td').forEach((td, index) => {
                    row[headers[index]] = td.innerText.trim();
                });
                data.push(row);
            });

            if (format === 'csv') {
                downloadCSV(data);
            } else if (format === 'json') {
                downloadJSON(data);
            }
        });

        function downloadCSV(data) {
            const csv = data.map(row => Object.values(row).join(',')).join('\n');
            const blob = new Blob([csv], {
                type: 'text/csv'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'students.csv';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }

        function downloadJSON(data) {
            const json = JSON.stringify(data, null, 2);
            const blob = new Blob([json], {
                type: 'application/json'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'students.json';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
        // ========================== Export Js End ==============================

        // Table Header Checkbox checked all js Start
        $('#selectAll').on('change', function() {
            $('.form-check .form-check-input').prop('checked', $(this).prop('checked'));
        });

        // Data Tables
        new DataTable('#assignmentTable', {
            searching: false,
            lengthChange: false,
            info: false, // Bottom Left Text => Showing 1 to 10 of 12 entries
            paging: false,
            "columnDefs": [{
                    "orderable": false,
                    "targets": [0, 6]
                } // Disables sorting on the 7th column (index 6)
            ]
        });
    </script>

</body>

</html>
