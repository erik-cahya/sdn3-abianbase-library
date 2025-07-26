<div class="top-navbar flex-between gap-16">

    <div class="flex-align gap-16">
        <!-- Toggle Button Start -->
        <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i
                class="ph ph-list"></i></button>
        <!-- Toggle Button End -->

    </div>

    <div class="flex-align gap-16">
        <div class="flex-align gap-8">

        </div>

        <!-- User Profile Start -->
        <div class="dropdown">
            <button
                class="users arrow-down-icon rounded-pill d-inline-block position-relative border border-gray-200 p-4 pe-40"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="position-relative">
                    <img src="{{ asset('admin') }}/assets/images/thumbs/user-img.png" alt="Image" class="rounded-circle h-32 w-32">
                    <span
                        class="activation-badge position-absolute inset-block-end-0 inset-inline-end-0 h-8 w-8"></span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                <div class="card rounded-12 box-shadow-custom border border-gray-100">
                    <div class="card-body">
                        <div class="flex-align border-bottom gap-8 border-gray-100 pb-20">
                            <img src="{{ asset('admin') }}/assets/images/thumbs/user-img.png" alt="" class="w-54 h-54 rounded-circle">
                            <div class="">
                                <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                                <p class="fw-medium text-13 text-gray-200">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <ul class="max-h-270 scroll-sm overflow-y-auto pe-4">
                            <li class="mb-4">
                                <a href="setting.html" class="text-15 hover-bg-gray-50 rounded-8 flex-align fw-medium text-15 gap-8 px-20 py-12 text-gray-300">
                                    <span class="text-primary-600 d-flex text-2xl"><i class="ph ph-gear"></i></span>
                                    <span class="text">Account Settings</span>
                                </a>
                            </li>

                            <li class="border-top border-gray-100 pt-8">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a class="text-15 hover-bg-danger-50 hover-text-danger-600 rounded-8 flex-align fw-medium text-15 gap-8 px-20 py-12 text-gray-300" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                                        <span class="text-danger-600 d-flex text-2xl"><i class="ph ph-sign-out"></i></span>
                                        <iconify-icon icon="solar:logout-3-broken" class="fs-18 align-middle"></iconify-icon><span class="align-middle">Logout</span>
                                    </a>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Profile Start -->

    </div>
</div>
