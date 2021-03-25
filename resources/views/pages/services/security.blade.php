@extends('layouts.website')

@section('title') Security Solutions |  @endsection


@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-primary d-table w-100" style="background: url(/images/bg2.png) center center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="page-next-level">
                        <h2 style="position:relative;top: -30px;font-weight: bold;color: white;">Security Solutions</h2>
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
                                <div class="col-lg-4 col-md-4 col-12 text-center py-4">
                                    <img src="/images/services/service2.jpeg" class="avatar avatar-ex-sm" style="max-height: 128px;position: relative;" alt="">
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-4 col-12 text-center py-4">
                                    <img src="/images/services/service3.jpeg" class="avatar avatar-ex-sm" style="max-height: 82px;position: relative;top: 10px;" alt="">
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-4 col-12 text-center py-4">
                                    <img src="/images/services/service4.jpeg" class="avatar avatar-ex-sm" style="max-height: 128px;position: relative;top: -5px;" alt="">
                                </div><!--end col-->

                            </div><!--end row-->

                            <h5 class="mt-4">Security Service</h5>

                            <p class="text-muted">
                                We live in an age where technology is constantly changing and cyber threats are becoming harder to detect. Today’s organizations are turning to a variety of solutions to secure their security infrastructure. XCONNECT can help ypu with a big varity of soultions SOPHOS , FORTINET , PFSENSE to secure your work.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
