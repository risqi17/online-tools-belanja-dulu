@extends('_layouts.master')

@section('title')
    Kirim whatsapp tanpa simpan nomor hp
@endsection

@section('meta-description')
Jelajahi Tool Online Berkualitas Tinggi: Konverter & Kirim Pesan WhatsApp Tanpa Simpan Nomor. Solusi Praktis untuk Kebutuhan Anda. Dapatkan Akses Gratis!
@endsection

@section('meta-keyword')
Kirim Whatsapp, Tool Online, Converter Online, Kirim Pesan WhatsApp, Tanpa Simpan Nomor, Konverter Gratis, Layanan Online Gratis, Alat Konversi, Pesan WhatsApp Tanpa Simpan Kontak, Aplikasi Konversi Online, Peralatan Internet Gratis
@endsection

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::About card-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-17">
                    <!--begin::About-->
                    <div class="">
                        <!--begin::Wrapper-->
                        <div class="mb-10">
                            <!--begin::Top-->
                            <div class="text-center mb-15">
                                <!--begin::Title-->
                                <h3 class="fs-2hx text-dark mb-5">Kirim Pesan Whatsapp</h3>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fs-5 text-muted fw-semibold">Masukkan nomor telepon/HP yang akan anda kirim pesan, kemudian tekan tombol kirim atau tekan Enter.</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Top-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold text-gray-600">
                            <form action="{{ route('kirim-pesan-whatsapp-tanpa-simpan-nomor.store') }}" method="post" target="_blank">
                                @csrf
                                <input type="text" class="form-control" placeholder="example. 082453786476" name="number" required/>

                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-success hover-scale">Kirim Pesan</button>
                                </div>
                            </form>
                        </div>
                        <!--end::Description-->
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <!--begin::Body-->
                <div class="card-body p-lg-17">
                    <!--begin::Section-->
                    <div class="mb-16">
                        <!--begin::Top-->
                        <div class="text-center mb-12">
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-dark mb-5">Tool Populer</h3>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fs-5 text-muted fw-semibold">Berikut tool-tool yang sering digunakan dan populer, silakan pilih tools yang sesuai dengan kebutuhan kamu.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Top-->
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Publications post-->
                                <div class="card-xl-stretch me-md-6">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-73.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-73.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                            <i class="ki-outline ki-eye fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="../../demo35/dist/pages/user-profile/overview.html" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-dark mt-3 mb-5">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="../../demo35/dist/apps/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on Mar 21 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Publications post-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Publications post-->
                                <div class="card-xl-stretch mx-md-3">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-74.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-74.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                            <i class="ki-outline ki-eye fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="../../demo35/dist/pages/user-profile/overview.html" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-dark mt-3 mb-5">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="../../demo35/dist/apps/projects/users.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on Apr 14 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Publications post-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Publications post-->
                                <div class="card-xl-stretch ms-md-6">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-47.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-47.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                            <i class="ki-outline ki-eye fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="../../demo35/dist/pages/user-profile/overview.html" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-dark mt-3 mb-5">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="../../demo35/dist/apps/projects/users.html" class="text-gray-700 text-hover-primary">Carles Nilson</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on May 14 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Publications post-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                    
                    @include('_layouts._socials')

                </div>
                <!--end::Body-->
            </div>
            <!--end::About card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection