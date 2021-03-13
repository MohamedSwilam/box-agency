@extends('layouts.website')

@section('title') Contact Us |  @endsection


@section('content')
    <!-- Hero Start -->
    <!-- Hero Start -->
    <section class="bg-half bg-primary d-table w-100" style="background: url(/images/account/bg.png) center center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h3 style="font-weight: bold;color: white;">Contact Us</h3>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <section class="align-items-center" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 offset-lg-12 col-md-12 offset-md-12">
                    <div class="title-heading mt-5 pt-4">
                        <div class="container mt-60">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card border-0 text-center features feature-clean">
                                        <div class="icons text-primary text-center mx-auto">
                                            <i class="uil uil-phone d-block rounded h3 mb-0"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5 class="fw-bold">Phone</h5>
                                            <a target="_blank" href="https://api.whatsapp.com/send/?phone=+201007857338&text&app_absent=0" class="text-primary">+201007857338</a>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="card border-0 text-center features feature-clean">
                                        <div class="icons text-primary text-center mx-auto">
                                            <i class="uil uil-envelope d-block rounded h3 mb-0"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5 class="fw-bold">Email</h5>
                                            <a href="mailto:info@xconnect-eg.com" class="text-primary">info@xconnect-eg.com</a>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="card border-0 text-center features feature-clean">
                                        <div class="icons text-primary text-center mx-auto">
                                            <i class="uil uil-map-marker d-block rounded h3 mb-0"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5 class="fw-bold">Locations</h5>
                                            <p><b>Cairo Office:</b> <span class="text-muted">Nasr City</span></p>
                                            <p><b>Alexandria Office:</b> <span class="text-muted">Sidi Besher</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
@endsection
