@props([])

<!--begin::Header-->
<div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
    data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
    data-kt-sticky-animation="false">

    <!--begin::Header container-->
    <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">

        {{ $logo }}

        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

            <!--begin::Menu wrapper-->
            <div class=" app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

                <!--begin::Menu-->
                <div class="menu menu-rounded menu-column menu-lg-row my-5  my-lg-0 align-items-stretch fw-semibold      px-2 px-lg-0        "
                    id="kt_app_header_menu" data-kt-menu="true">

                    {{ $navitems }}

                    @can('talent_management_read')
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-title">Settings</span><span
                                    class="menu-arrow d-lg-none"></span></span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon">
                                            <iconify-icon icon="carbon:data-structured"></iconify-icon>
                                        </span><span class="menu-title">Organization Structure</span><span
                                            class="menu-arrow"></span></span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                        <!--begin:Menu item-->

                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        @if (auth()->user()->isCompany() || auth()->user()->isAdmin())
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/admin/division"><span
                                                        class="menu-icon">
                                                        <iconify-icon icon="mdi:company" class="fa-1-5"></iconify-icon>
                                                    </span><span class="menu-title">Division</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link"
                                                    href="/admin/mydepartment"><span class="menu-icon">
                                                        <iconify-icon icon="mdi:company" class="fa-1-5"></iconify-icon>
                                                    </span><span class="menu-title">Departments</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('department_sections.index') }}">
                                                    <span class="menu-icon">
                                                        <iconify-icon icon="mdi:company" class="fa-1-5"></iconify-icon>
                                                    </span>
                                                    <span class="menu-title">Sections</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>

                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('section_units.index') }}">
                                                    <span class="menu-icon">
                                                        <iconify-icon icon="mdi:company" class="fa-1-5"></iconify-icon>
                                                    </span>
                                                    <span class="menu-title">Units</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        @endif
                                        <!--end:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('admin.teams.index') }}"><span class="menu-icon">
                                                    <iconify-icon icon="mdi:company" class="fa-1-5"></iconify-icon>
                                                </span><span class="menu-title">Teams</span></a>
                                            <!--end:Menu link-->
                                        </div>

                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="/admin/myemployee"><span
                                                    class="menu-icon">
                                                    <iconify-icon icon="mdi:company" class="fa-1-5"></iconify-icon>
                                                </span><span class="menu-title">Employees</span></a>
                                            <!--end:Menu link-->
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link" href="/admin/organizational-structure-list"><span
                                                    class="menu-icon">
                                                    <iconify-icon icon="eos-icons:job" class="fa-1-5"></iconify-icon>
                                                </span><span class="menu-title">Chart</span></a>
                                        </div>

                                    </div>
                                </div>

                                <div class="menu-item">
                                    <!--begin:Menu link--><a class="menu-link" href="/admin/setting/job-description"><span
                                            class="menu-icon">
                                            <iconify-icon icon="eos-icons:job" class="fa-1-5"></iconify-icon>
                                        </span><span class="menu-title">Job Management</span></a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link--><a class="menu-link"
                                        href="/admin/skill-management/dashboard"><span class="menu-icon">
                                            <iconify-icon icon="eos-icons:job" class="fa-1-5"></iconify-icon>
                                        </span><span class="menu-title">Skill Management</span></a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="/admin/meta-settings"><span class="menu-icon">
                                            <iconify-icon icon="eos-icons:job" class="fa-1-5"></iconify-icon>
                                        </span><span class="menu-title">PMS Management</span></a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('survey.index') }}"><span class="menu-icon">
                                            <iconify-icon icon="wpf:survey" class="fa-1-5"></iconify-icon>
                                        </span><span class="menu-title">Survey</span></a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('technicalAss.index') }}"><span
                                            class="menu-icon">
                                            <iconify-icon icon="eos-icons:job" class="fa-1-5"></iconify-icon>
                                        </span><span class="menu-title">Technical Assessment</span></a>
                                </div>
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    @endcan
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->


            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">

                <div class="app-navbar-item ms-1 ms-md-4">
                    <!--begin::Drawer toggle-->
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                        id="kt_activities_toggle">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                            class="menu-link px-5 text-gray-600">
                            <iconify-icon icon="quill:off" class="fa-1-5"></iconify-icon>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    <!--end::Drawer toggle-->
                </div>

                {{ $usermenu }}

                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                        id="kt_app_header_menu_toggle">

                        <iconify-icon icon="lets-icons:menu" class="fa-1-5"></iconify-icon>
                    </div>
                </div>
                <!--end::Header menu toggle-->

            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
