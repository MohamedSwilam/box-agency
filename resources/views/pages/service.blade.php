@extends('layouts.website')

@section('title') Service Name |  @endsection


@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-primary d-table w-100" style="background: url(/images/account/bg.png) center center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h3 style="font-weight: bold;color: white;">Service Name</h3>
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
                            <p class="text-muted">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody.</p>

                            <ul class="list-unstyled d-flex justify-content-between mt-4">
                                <li class="list-inline-item user me-2"><a href="javascript:void(0)" class="text-muted"><i class="uil uil-user text-dark"></i> Calvin Carlo</a></li>
                                <li class="list-inline-item date text-muted"><i class="uil uil-calendar-alt text-dark"></i> 13th August, 2019</li>
                            </ul>

                            <img src="/images/blog/bg1.jpg" class="img-fluid rounded-md shadow" alt="">

                            <h5 class="mt-4">Mornings contain the secret to an extraordinarily successful life</h5>

                            <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area).</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
