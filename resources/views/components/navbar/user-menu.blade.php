<x-slot name="usermenu">
    <!--begin::User account menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    @if (isset(auth()->user()->profile_picture))
                        <img alt="Logo" src="{{ asset(auth()->user()->profile_picture) }}"
                            onerror="this.src='{{ asset('admin/media/avatars/300-3.jpg') }}'" />
                    @else
                        <img alt="Logo" src="{{ asset('admin/media/avatars/300-3.jpg') }}" />
                    @endif
                </div>
                <!--end::Avatar-->

                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bold d-flex align-items-center fs-5">
                        {{ auth()->user()->name ?? '' }}
                        {{-- <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span> --}}
                    </div>

                    <a href="" class="fw-semibold text-muted  fs-7">
                        {{ auth()->user()->email ?? '' }}</a>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            @if (auth()->user()->isDepartment())
                <a href="/department/profile/edit" class="menu-link px-5">
                    My Profile
                </a>
            @elseif(auth()->user()->isCompany() || auth()->user()->isAdmin())
                <a href="/company/profile/edit" class="menu-link px-5">
                    My Profile
                </a>
            @else
                @if (auth()->user()->role_id != 7)
                    <a href="/profile/edit" class="menu-link px-5">
                        My Profile
                    </a>
                @endif
            @endif

        </div>
        <!--end::Menu item-->

    </div>
    <!--end::User account menu-->
</x-slot>
