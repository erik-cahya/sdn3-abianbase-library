@extends('admin.layouts.master')
@section('content')
    <div class="dashboard-body">

        <div class="breadcrumb-with-buttons flex-between mb-24 flex-wrap gap-8">
            <!-- Breadcrumb Start -->
            <div class="breadcrumb mb-24">
                <ul class="flex-align gap-4">
                    <li><a href="index.html" class="fw-normal text-15 hover-text-main-600 text-gray-200">Home</a>
                    </li>
                    <li> <span class="fw-normal d-flex text-gray-500"><i class="ph ph-caret-right"></i></span> </li>
                    <li><span class="text-main-600 fw-normal text-15">Create Account</span></li>
                </ul>
            </div>
            <!-- Breadcrumb End -->

            <!-- Buttons Start -->
            <div class="flex-align justify-content-end gap-8">
                <button type="button"
                    class="btn btn-outline-main bg-main-100 border-main-100 text-main-600 rounded-pill py-9">Save as
                    Draft</button>
                <button type="button" class="btn btn-main rounded-pill py-9" disabled>Publish Course</button>
            </div>
            <!-- Buttons End -->
        </div>

        <!-- Course Tab Start -->
        <div class="card">
            <div class="card-header border-bottom flex-align gap-8 border-gray-100">
                <h5 class="mb-0">Tambah Data Buku</h5>
                <button type="button" class="text-main-600 text-md d-flex" data-bs-toggle="tooltip"
                    data-bs-placement="top" data-bs-title="Course Details">
                    <i class="ph-fill ph-question"></i>
                </button>
            </div>
            <div class="card-body">
                <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-20">
                        <div class="col-xxl-3 col-md-4 col-sm-5">
                            <div class="mb-20">
                                <label class="h5 fw-semibold font-heading mb-0" for="gambar_buku">Gambar Buku <span
                                        class="text-13 fw-medium text-gray-400">(Opsional)</span> </label>
                            </div>
                            {{-- <div id="fileUpload" class="fileUpload image-upload"></div> --}}

                            <input type="file" class="" id="gambar_buku" name="gambar_buku" onchange="previewImage()">

                            <img src="{{ asset('admin/assets/images/thumbs/course-img2.png') }}" class="gambar_buku img-thumbnail mt-30" width="200px">

                        </div>
                        <div class="col-xxl-9 col-md-8 col-sm-7">
                            <div class="row g-20">
                                <div class="col-sm-12">
                                    <label for="courseTitle" class="h5 fw-semibold font-heading mb-8">
                                        Judul Buku
                                        <span class="text-13 fw-medium text-gray-400">(Required)</span>
                                    </label>
                                    <div class="position-relative">
                                        <input type="text" class="text-counter placeholder-13 form-control pe-76 py-11" name="nama_buku" id="courseTitle" placeholder="Name of the Lesson">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="courseTitle" class="h5 fw-semibold font-heading mb-8">
                                        Pengarang
                                        <span class="text-13 fw-medium text-gray-400">(Required)</span>
                                    </label>
                                    <div class="position-relative">
                                        <input type="text"
                                            class="text-counter placeholder-13 form-control pe-76 py-11"
                                            id="courseTitle" placeholder="Name of the Lesson" name="pengarang">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="courseTitle" class="h5 fw-semibold font-heading mb-8">
                                        Penerbit
                                        <span class="text-13 fw-medium text-gray-400">(Required)</span>
                                    </label>
                                    <div class="position-relative">
                                        <input type="text"
                                            class="text-counter placeholder-13 form-control pe-76 py-11"
                                            id="courseTitle" placeholder="Name of the Lesson" name="penerbit">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="courseTitle" class="h5 fw-semibold font-heading mb-8">
                                        Tempat Terbit
                                        <span class="text-13 fw-medium text-gray-400">(Required)</span>
                                    </label>
                                    <div class="position-relative">
                                        <input type="text"
                                            class="text-counter placeholder-13 form-control pe-76 py-11"
                                            id="courseTitle" placeholder="Name of the Lesson" name="tempat_terbit">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="courseTitle" class="h5 fw-semibold font-heading mb-8">
                                        Tahun Cetak
                                        <span class="text-13 fw-medium text-gray-400">(Required)</span>
                                    </label>
                                    <div class="position-relative">
                                        <input type="text"
                                            class="text-counter placeholder-13 form-control pe-76 py-11"
                                            id="courseTitle" placeholder="Name of the Lesson" name="tahun_cetak">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="courseTitle" class="h5 fw-semibold font-heading mb-8">
                                        Kelas
                                        <span class="text-13 fw-medium text-gray-400">(Required)</span>
                                    </label>
                                    <div class="position-relative">
                                        <input type="text"
                                            class="text-counter placeholder-13 form-control pe-76 py-11"
                                            id="courseTitle" placeholder="Name of the Lesson" name="kelas">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="courseCategory" class="h5 fw-semibold font-heading mb-8">Asal Buku</label>
                                    <div class="position-relative">
                                        <select id="courseCategory" name="asal_buku" class="placeholder-13 text-15 form-select py-9">
                                            <option value="" disabled selected>Pilih Asal Buku</option>
                                            <option value="sumbangan">Sumbangan </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label for="courseTitle" class="h5 fw-semibold font-heading mb-8">
                                        Jumlah
                                        <span class="text-13 fw-medium text-gray-400">(Required)</span>
                                    </label>
                                    <div class="position-relative">
                                        <input type="number" name="jumlah"
                                            class="text-counter placeholder-13 form-control pe-76 py-11"
                                            id="courseTitle" placeholder="Name of the Lesson">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label for="courseTitle" class="h5 fw-semibold font-heading mb-8">
                                        Tahun Penerimaan
                                        <span class="text-13 fw-medium text-gray-400">(Required)</span>
                                    </label>
                                    <div class="position-relative">
                                        <input type="number" name="tahun_penerimaan"
                                            class="text-counter placeholder-13 form-control pe-76 py-11"
                                            id="courseTitle" placeholder="Name of the Lesson">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="courseTitle" class="h5 fw-semibold font-heading mb-8">
                                        Kategori Buku
                                        <span class="text-13 fw-medium text-gray-400">(Required)</span>
                                    </label>
                                    <div class="position-relative">
                                        <select id="courseCategory" name="kategori_buku" class="placeholder-13 text-15 form-select py-9">
                                            <option value="" disabled selected>Pilih Kategori Buku</option>
                                            @foreach ($kategori as $kat)
                                                <option value="{{ $kat->id }}" class="">{{ $kat->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-align justify-content-end gap-8">
                            <a href="mentor-courses.html" class="btn btn-outline-main rounded-pill py-9">Cancel</a>
                            <button type="submit" class="btn btn-main rounded-pill py-9">Tambah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Course Tab End -->
    </div>
@endsection
@push('script')
    <script>
        // untuk membuat preview gambar
        function previewImage() {
            const image = document.querySelector('#gambar_buku');
            const imgPreview = document.querySelector('.gambar_buku');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endpush
