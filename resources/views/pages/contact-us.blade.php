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
                                            <p class="text-muted">Start working with Landrick that can provide everything</p>
                                            <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
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
                                            <p class="text-muted">Start working with Landrick that can provide everything</p>
                                            <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="card border-0 text-center features feature-clean">
                                        <div class="icons text-primary text-center mx-auto">
                                            <i class="uil uil-map-marker d-block rounded h3 mb-0"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5 class="fw-bold">Location</h5>
                                            <p class="text-muted">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#watchvideomodal" class="video-play-icon h6 text-primary">View on Google map</a>
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

    <!-- Map Popup Start -->
    <div class="modal fade" id="watchvideomodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content video-modal rounded overflow-hidden">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Popup End -->
@endsection
