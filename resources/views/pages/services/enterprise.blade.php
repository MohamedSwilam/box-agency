@extends('layouts.website')

@section('title') Enterprise Services |  @endsection


@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-primary d-table w-100" style="background: url(/images/bg2.png) center center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="page-next-level">
                        <h2 style="position:relative;top: -30px;font-weight: bold;color: white;">Enterprise Services</h2>
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
                            <div class="row justify-content-center" style="position: relative;top: -25px;">
                                <div class="col-lg-12 col-md-12 col-12 text-center py-4">
                                    <img src="/images/services/service1.jpeg" class="img-fluid rounded-md shadow" alt="" style="width: 100%;">
                                </div><!--end col-->
                            </div>

                            <h5 class="mt-4">IP Transit</h5>

                            <p class="text-muted">
                                IP transit service is a permanent dedicated bandwidth connection, offered with variable speeds connectivity at remarkably competitive prices, circuit capacity ranges from 64Kbps to E1, E3, DS 3, STM-1, STM-4, STM-16 and beyond.
                            </p>

                            <p class="text-muted">
                                Unlike many dedicated Internet Access providers, TE data has multiple, redundant, high availability International gateways, supported by peering agreements with major network service providers, enabling clients to get the right mixture of high QoS, competitive prices, and professional customer service.
                            </p>

                            <h5 class="mt-4">Virtual Private Network (VPN)</h5>

                            <p class="text-muted">
                                VPNs allow secure access to corporate resources by establishing an encrypted tunnel across the Internet. The ubiquity of the Internet, combined with today's VPN technologies, allows organizations to cost-effectively and securely extend the reach of their networks to anyone, anyplace, anytime.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
