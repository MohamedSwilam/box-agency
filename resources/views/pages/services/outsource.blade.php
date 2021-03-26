@extends('layouts.website')

@section('title') Outsource Services |  @endsection


@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-primary d-table w-100" style="background: url(/images/bg2.png) center center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="page-next-level">
                        <h2 style="position:relative;top: -30px;font-weight: bold;color: white;">Outsource Services</h2>
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

                        <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="position-relative">
                                <img src="/images/services/service9.jpeg" class="rounded img-fluid mx-auto d-block" alt="">
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="section-title ms-lg-4">
                                <h5 class="title mb-4">Consultancy</h5>
                                <p class="text-muted">
                                    XCONNECT provides professional consultant to an individual or an organization for a fee. The types of firms vary, such as technology and advertising firms.
                                </p>
                                <h5 class="title mt-4">Service Level Agreement</h5>

                                <p class="text-muted">
                                    A service-level agreement (SLA) is a contract between XCONNECT and our customers that documents what services the provider will furnish and defines the service standards the provider is obligated to meet.
                                </p>
                            </div>
                        </div><!--end col-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
