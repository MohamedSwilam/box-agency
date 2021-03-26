@extends('layouts.website')

@section('title') About Us |  @endsection


@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-primary d-table w-100" style="background: url(/images/bg2.png) center center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="page-next-level">
                        <h2 style="font-weight: bold;color: white;">About Us</h2>
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

    <!-- About Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="position-relative">
                        <img src="/images/about.jpeg" class="rounded img-fluid mx-auto d-block" alt="">
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-4">
                        <h4 class="title mb-4">About Us</h4>
                        <p class="text-muted">
                            XCONNECT established in 2009 at the name "ALAMIN SOULTIONS" and in 2021 we decided to change out identity to XCONNECT, in the last 11 years we gain experience and our technical team get more and more professionalism ,we accomplished a lot of projects and we gain the trust of a lot of clients who become  members of our family , and in 2021 we hope to gain the trust of new clients.
                        </p>
                        <p class="text-muted text-center">
                            XCONNECT CAN MAKE THE CHANGE
                        </p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- About End -->
@endsection
