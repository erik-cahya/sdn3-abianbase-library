@extends('admin.layouts.master')
@section('content')
    <div class="dashboard-body">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="{{ route('dashboard') }}" class="fw-normal text-15 hover-text-main-600 text-gray-200">Home</a></li>
                <li> <span class="fw-normal d-flex text-gray-500"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">List Buku</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Recommended Start -->
        <div class="card mt-24">
            <div class="card-body">
                <form action="#" class="search-input-form">
                    <div class="search-input">
                        <select class="form-control h6 rounded-4 form-select mb-0 px-8 py-6">
                            <option value="" selected disabled>Category</option>
                            <option value="">Web Development</option>
                            <option value="">Web Design</option>
                            <option value="">UX/UI Design</option>
                            <option value="">SEO</option>
                            <option value="">Content Writing</option>
                            <option value="">WordPress Development</option>
                        </select>
                    </div>
                    <div class="search-input">
                        <select class="form-control h6 rounded-4 form-select mb-0 px-8 py-6">
                            <option value="" selected disabled>Design Level</option>
                            <option value="">Authentication</option>
                            <option value="">Meta</option>
                            <option value="">System</option>
                        </select>
                    </div>
                    <div class="search-input">
                        <select class="form-control h6 rounded-4 form-select mb-0 px-8 py-6">
                            <option value="" selected disabled>Duration</option>
                            <option value="">1 Hour</option>
                            <option value="">2 Hour</option>
                            <option value="">3 Hour</option>
                            <option value="">4 Hour</option>
                        </select>
                    </div>
                    <div class="search-input">
                        <select class="form-control h6 rounded-4 form-select mb-0 px-8 py-6">
                            <option value="" selected disabled>Type</option>
                            <option value="">Authentication</option>
                            <option value="">Meta</option>
                            <option value="">System</option>
                        </select>
                    </div>
                    <div class="search-input">
                        <button type="submit" class="btn btn-main rounded-pill w-100 py-9">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Recommended End -->

        <!-- Recommended Course Start -->
        <div class="card mt-24">
            <div class="card-body">
                <div class="flex-between mb-20 flex-wrap gap-8">
                    <h4 class="mb-0">List Buku</h4>
                    <div class="flex-align flex-wrap gap-8">

                    </div>
                </div>

                <div class="row g-20">
                    @foreach ($data_buku as $buku)
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100" style="min-height: 460px">
                                <div class="card-body p-8">
                                    <a href="course-details.html"
                                        class="bg-main-100 rounded-8 h-164 flex-center mb-8 overflow-hidden p-8 text-center">
                                        <img src="{{ isset($buku->image) ? asset('img/gambar_buku/' . $buku->image) : 'https://placehold.co/600x400?text=Book%20Images' }}" alt="Course Image">
                                        {{-- <img src="https://placehold.co/600x400?text=Book%20Images" alt="Course Image"> --}}
                                    </a>
                                    <div class="p-8">
                                        <div class="d-flex justify-content-between">

                                            <span class="text-13 rounded-pill bg-success-50 text-success-600 mb-16 px-10 py-2">{{ $buku->nama_kategori }}</span>
                                            <span class="text-13 rounded-pill bg-warning-50 text-warning-600 mb-16 px-10 py-2">{{ $buku->kelas }}</span>
                                        </div>

                                        <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600" style="min-height: 50px">{{ Str::limit($buku->nama_buku, 40) }}</a></h5>

                                        <div class="flex-align mt-16 flex-wrap gap-8">
                                            <img src="{{ asset('admin') }}/assets/images/thumbs/user-img1.png"
                                                class="rounded-circle object-fit-cover h-28 w-28" alt="User Image">
                                            <div>
                                                <span class="text-13 text-gray-600">Pengarang <a href="javascript:void(0)"
                                                        class="fw-semibold text-gray-700">{{ $buku->pengarang }}</a> </span>
                                            </div>
                                        </div>

                                        <div class="flex-align border-top mt-12 gap-8 border-gray-100 pt-12">
                                            <div class="flex-align gap-4">
                                                <span class="text-main-600 d-flex text-sm"><i
                                                        class="ph ph-video-camera"></i></span>
                                                <span class="text-13 text-gray-600">Asal Buku : <a href="javascript:void(0)"
                                                        class="fw-semibold text-gray-700">{{ $buku->asal_buku }}</a> </span>
                                            </div>
                                        </div>

                                        <div class="flex-between mt-24 flex-wrap gap-4">

                                            {{-- <a href="course-details.html" class="btn btn-danger rounded-pill py-9">Delete</a> --}}

                                            {{-- Delete Button --}}
                                            <input type="hidden" class="propertyId" value="{{ $buku->id }}">
                                            <button type="button" class="btn btn-danger rounded-pill deleteButton py-9" data-nama="{{ $buku->nama_buku }}">Delete</button>
                                            {{-- /. Delete Button --}}
                                            <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex-between mt-20 flex-wrap gap-8">
                    <a href="#" class="btn btn-outline-gray rounded-pill flex-align gap-4 py-9">
                        <span class="d-flex text-xl"><i class="ph ph-arrow-left"></i></span>
                        Previous
                    </a>

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

                    <a href="#" class="btn btn-outline-main rounded-pill flex-align gap-4 py-9">
                        Next <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span>
                    </a>
                </div>

            </div>
        </div>
        <!-- Recommended Course End -->
    </div>
@endsection
@push('script')
    {{-- Sweet Alert --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Saat halaman sudah ready
            const deleteButtons = document.querySelectorAll('.deleteButton');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    let propertyName = this.getAttribute('data-nama');
                    let propertyId = this.parentElement.querySelector('.propertyId').value;

                    Swal.fire({
                        title: 'Anda Yakin?',
                        text: "Delete Buku " + propertyName + "?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus Buku ini'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Kirim DELETE request manual lewat JavaScript
                            fetch('/buku/' + propertyId, {
                                    method: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                        'Content-Type': 'application/json'
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    Swal.fire({
                                        title: data.judul,
                                        text: data.pesan,
                                        icon: data.swalFlashIcon,
                                        timer: 2000,
                                    }).then(() => {
                                        // Reload setelah user menutup SweetAlert
                                        window.location.reload();
                                    });

                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    Swal.fire('Error', 'Something went wrong!', 'error');
                                });
                        }
                    });
                });
            });
        });
    </script>
    <script>
        // ========================== Range Slider Js Start =====================
        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 480,
                values: [0, 240],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });
        // ========================== Range Slider Js End =====================
    </script>
@endpush
