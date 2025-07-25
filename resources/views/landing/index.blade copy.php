<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Library App | SDN 3 Abianbase</title>
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

                <a href="/" class="sidebar__logo position-sticky inset-block-start-0 w-100 z-1 bg-white text-center">
                    {{-- <img src="{{ asset('admin') }}/assets/images/logo/logo.png" alt="Logo"> --}}
                    <img src="{{ asset('assets/logo_dark.png') }}" alt="Logo" width="100px">

                    <h3 class="m-30">LIBRARY DIGITAL APP <br> SD NEGERI 3 ABIANBASE</h3>
                </a>

                <form action="#" class="w-100 d-sm-block d-none">
                    <div class="position-relative">
                        <button type="submit" class="input-icon d-flex pointer-event-none text-xl text-gray-100"><i class="ph ph-magnifying-glass"></i></button>
                        <input type="text" class="form-control focus-border-main-600 bg-main-50 rounded-pill placeholder-15 h-40 border-transparent ps-40" placeholder="Search...">
                    </div>
                </form>
            </div>

            <div class="card mt-50 overflow-hidden">
                <div class="card-header border-bottom flex-align gap-8 border-gray-100" bis_skin_checked="1">
                    <h5 class="mb-0">Cari Buku</h5>
                </div>
                <div class="card-body p-30">
                    <table id="assignmentTable" class="table-striped table">
                        <thead>
                            <tr>
                                <th class="h6 text-gray-300">No</th>
                                <th class="h6 text-gray-300">Nama Buku</th>
                                <th class="h6 text-gray-300">Lesson</th>
                                <th class="h6 text-gray-300">Deadline</th>
                                <th class="h6 text-gray-300">Sent</th>
                                <th class="h6 text-gray-300">Status</th>
                                <th class="h6 text-gray-300">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_buku as $buku)
                                <tr>
                                    <td class="fixed-width">
                                        <span class="h6 fw-medium mb-0 text-gray-300">{{ $loop->iteration }}</span>
                                    </td>
                                    <td>
                                        <div class="flex-align gap-8">
                                            <img src="{{ asset('admin') }}/assets/images/thumbs/student-img1.png" alt=""
                                                class="rounded-circle h-40 w-40">
                                            <span class="h6 fw-medium mb-0 text-gray-300">{{ $buku->nama_buku }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="h6 fw-medium mb-0 text-gray-300">{{ $buku->nama_kategori }}</span>
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
                            @endforeach

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
