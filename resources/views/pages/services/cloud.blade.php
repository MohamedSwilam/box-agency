@extends('layouts.website')

@section('title') Cloud Solutions |  @endsection


@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-primary d-table w-100" style="background: url(/images/bg2.png) center center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="page-next-level">
                        <h2 style="position:relative;top: -30px;font-weight: bold;color: white;">Cloud Solutions</h2>
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
                                    <img src="/images/client/service11.png" class="avatar avatar-ex-sm" style="max-height: 92px;position: relative;top: 15px;" alt="">
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-4 col-12 text-center py-4">
                                    <img src="/images/client/service12.png" class="avatar avatar-ex-sm" style="max-height: 108px;position: relative;top: 2px;" alt="">
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-4 col-12 text-center py-4">
                                    <img src="/images/client/service15.jpg" class="avatar avatar-ex-sm" style="max-height: 98px;position: relative;top: 2px;" alt="">
                                </div><!--end col-->

                            </div><!--end row-->

                            <h5 class="mt-4">Clouds Solutions</h5>

                            <p class="text-muted">
                                Cloud computing is the delivery of on-demand computing services from applications to storage and processing typically over the internet and on a pay-as-you-go basis.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
