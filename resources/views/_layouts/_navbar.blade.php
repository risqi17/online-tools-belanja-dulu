<!--begin::Header-->
<div id="kt_app_header" class="app-header">
    <!--begin::Header primary-->
    <div class="app-header-primary" data-kt-sticky="true" data-kt-sticky-name="app-header-primary-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}">
        <!--begin::Header primary container-->
        <div class="app-container container-xxl d-flex align-items-stretch justify-content-between">
            <!--begin::Logo and search-->
            <div class="d-flex flex-grow-1 flex-lg-grow-0">
                <!--begin::Logo wrapper-->
                <div class="d-flex align-items-center me-7" id="kt_app_header_logo_wrapper">
                    <!--begin::Header toggle-->
                    <button class="d-lg-none btn btn-icon btn-flex btn-color-gray-600 btn-active-color-primary w-35px h-35px ms-n2 me-2" id="kt_app_header_menu_toggle">
                        <i class="ki-outline ki-abstract-14 fs-2"></i>
                    </button>
                    <!--end::Header toggle-->
                    <!--begin::Logo-->
                    <a href="../../demo35/dist/index.html" class="d-flex align-items-center me-lg-20 me-5">
                        <img alt="Logo" src="assets/media/logos/demo-35-small.svg" class="h-20px d-sm-none d-inline" />
                        <img alt="Logo" src="assets/media/logos/demo-35.svg" class="h-20px h-lg-25px theme-light-show d-none d-sm-inline" />
                        <img alt="Logo" src="assets/media/logos/demo-35-dark.png" class="h-20px h-lg-25px theme-dark-show d-none d-sm-inline" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Logo wrapper-->
                <!--begin::Menu wrapper-->
                <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                    <!--begin::Menu-->
                    <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <span class="menu-link py-3">
                                <span class="menu-title">Tool Populer</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                <!--begin:Dashboards menu-->
                                <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
                                    <!--begin:Row-->
                                    <div class="row">
                                        <!--begin:Col-->
                                        <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-6 mb-3">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="{{ route('kirim-pesan-whatsapp-tanpa-simpan-nomor.index') }}" class="menu-link">
                                                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                <i class="ki-outline ki-element-11 text-primary fs-1"></i>
                                                            </span>
                                                            <span class="d-flex flex-column">
                                                                <span class="fs-6 fw-bold text-gray-800">WhatsApp</span>
                                                                <span class="fs-7 fw-semibold text-muted">Kirim WhatsApp</span>
                                                            </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                        </div>
                                        <!--end:Col-->
                                    </div>
                                    <!--end:Row-->
                                </div>
                                <!--end:Dashboards menu-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Logo and search-->
        </div>
        <!--end::Header primary container-->
    </div>
    <!--end::Header primary-->
    <!--begin::Header secondary-->
    <div class="app-header-secondary">
        <!--begin::Header secondary container-->
        <div class="app-container container-xxl">
            <!--begin::Wrapper slider-->
            <div class="app-header-slider d-flex flex-stack h-100">
                <!--begin::Slider button-->
                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary ms-xxl-n18" id="kt_app_header_slider_prev">
                    <i class="ki-outline ki-left-square fs-2x"></i>
                </button>
                <!--end::Slider button-->
                <!--begin::Header slider-->
                <div class="tns tns-fit w-100">
                    <!--begin::Slider-->
                    <div data-tns="true" data-tns-loop="false" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="10000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-gutter="0" data-tns-responsive="{470: {items: 2}, 670: {items: 3, gutter: 15}, 992: {items: 5, gutter: 20}, 1300: {items: 6, gutter: 40}}" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_app_header_slider_prev" data-tns-next-button="#kt_app_header_slider_next">
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/feeds.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #6441A5">
                                    <img src="assets/media/svg/brand-logos/twitch-2.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Twitch Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">4 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/activity.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #E34984">
                                    <img src="assets/media/svg/brand-logos/dribbble-2.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Dribbble Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">1 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/feeds.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #00BF6D">
                                    <img src="assets/media/svg/brand-logos/gab.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Gab Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">no active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/followers.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #001935">
                                    <img src="assets/media/svg/brand-logos/tumblr.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Tumblr Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">3 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/feeds.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #E60000">
                                    <img src="assets/media/svg/brand-logos/youtube-2.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Youtube Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">28 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/settings.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #0B66C3">
                                    <img src="assets/media/svg/brand-logos/linkedin-3.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">LinkedIn Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">no active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/feeds.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #001935">
                                    <img src="assets/media/svg/brand-logos/tumblr.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Tumblr Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">3 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/feeds.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #00BF6D">
                                    <img src="assets/media/svg/brand-logos/gab.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Gab Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">no active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/followers.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #001935">
                                    <img src="assets/media/svg/brand-logos/tumblr.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Tumblr Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">3 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/feeds.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #E60000">
                                    <img src="assets/media/svg/brand-logos/youtube-2.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Youtube Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">28 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/activity.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #E34984">
                                    <img src="assets/media/svg/brand-logos/dribbble-2.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Dribbble Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">1 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/feeds.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #2682ff">
                                    <img src="assets/media/svg/brand-logos/eolic-energy.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Eolic Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">no active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/followers.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #cfe2ff">
                                    <img src="assets/media/svg/brand-logos/vimeo.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Vimeo Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">3 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="../../demo35/dist/pages/social/feeds.html" class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px symbol-lg-40px me-3">
                                <span class="symbol-label rounded-4" style="background-color: #f1aeb5">
                                    <img src="assets/media/svg/brand-logos/foursquare.svg" class="mw-25px" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="d-flex justify-content-center flex-column">
                                <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Foursquare Ads</span>
                                <span class="text-gray-500 fw-semibold d-block fs-7">5 active campaings</span>
                            </div>
                            <!--end::Info-->
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Slider-->
                </div>
                <!--end::Header slider-->
                <!--begin::Slider button-->
                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-xxl-n18" id="kt_app_header_slider_next">
                    <i class="ki-outline ki-right-square fs-2x"></i>
                </button>
                <!--end::Slider button-->
            </div>
            <!--end::Wrapper slider-->
        </div>
        <!--end::Header secondary container-->
    </div>
    <!--end::Header secondary-->
</div>
<!--end::Header-->