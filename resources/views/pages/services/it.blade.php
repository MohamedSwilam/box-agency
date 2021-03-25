@extends('layouts.website')

@section('title') IT Infrastructure |  @endsection


@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-primary d-table w-100" style="background: url(/images/bg2.png) center center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="page-next-level">
                        <h2 style="position:relative;top: -30px;font-weight: bold;color: white;">IT Infrastructure</h2>
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

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-12 text-center py-4">
                                    <img src="/images/services/service7.jpeg" class="avatar avatar-ex-sm" style="max-height: 250px;" alt="">
                                </div><!--end col-->

                                <div class="col-lg-6 col-md-6 col-12 text-center py-4">
                                    <img src="/images/services/service8.jpeg" class="avatar avatar-ex-sm" style="max-height: 250px;" alt="">
                                </div><!--end col-->

                            </div><!--end row-->

                            <h5 class="mt-4">IT Infrastructure</h5>

                            <p class="text-muted">
                                XCONNECT will help you planning,designing and implementation your site network infrastructure and data centers with the latest techonolgy of servers, switching and routers and our services include:
                                <ul class="text-muted">
                                    <li>Cables Pulling</li>
                                    <li>Rack Management </li>
                                    <li>Switches Configuration </li>
                                    <li>Servers Implementation </li>
                                    <li>Firewall& Routers Configuration  </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
