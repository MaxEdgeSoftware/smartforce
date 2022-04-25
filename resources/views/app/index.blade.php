@extends("layouts.app")
<!-- Hero Start -->
@section("titleSection")
<title>Home - Smart Force</title>
@endSection("titleSection")


@section("mainSection")
<section class="bg-half-170 d-table w-100" id="">
    <div class="mt-sm-0 pt-sm-0 clip" style="position: absolute; top: 0; height: 100vh; width: 100%;">
        <div class="owl-carousel">
            <div class="item">
                <img src="/assets/images/slider/1.jpeg" style="height: 100vh; object-fit: cover; " alt="">
            </div>
            <div class="item">
                <img src="/assets/images/slider/2.webp" style="height: 100vh; object-fit: cover; " alt="">
            </div>
            <div class="item">
                <img src="/assets/images/slider/3.jpeg" style="height: 100vh; object-fit: cover; " alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading title-heading2 mt-4 p-3 shadow-md rounded ">
                    <h1 class="heading mb-3">FIND BEST <br>DOMESTIC JOBS WITH US</h1>
                    <p class="para-desc">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                    <div class="mt-4 pt-2">
                        <a href="/register" class="btn btn-primary m-1">Apply for Jobs</a>
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-primary m-1 lightbox">
                            <span class="fw-bold small align-middle ms-2">All Jobs</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->
            <!-- 
                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="owl-carousel">
                            <div class="item">
                                <img src="/assets/images/slider/1.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img src="/assets/images/slider/2.webp" alt="">
                            </div>
                            <div class="item">
                                <img src="/assets/images/slider/3.jpeg" alt="">
                            </div>
                        </div>
                    </div> -->
            <!-- style="background: #142170; clip-path: polygon(100% 0, 0 0, 100% 62%); -->
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<section class="section who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="section-title mb-0 pb-2">
                    <p class="text-muted mx-auto mb-0">Who We Are</p>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-6">
                <h2 class="heading mb-4">Welcome to an Award Winning Domestic Staff Recruitment Agency</h2>
                <p class="para-desc text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                <p class="para-desc text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
            </div>

            <div class="col-lg-6 agent_img">
                <div class="clippy">d</div>
                <img src="/assets/images/agent.jpg" class="img-fluid" alt="">
            </div>
        </div>
        <!--end row-->
        <div class="row">

        </div>
    </div>
    <!--end container-->
</section>



<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Join our staff list</h4>
                    <p class="text-muted para-desc mx-auto mb-0">How to get started? You can join our workers list with the following steps.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card how-it-works overflow-hidden rounded shadow border-0 position-relative">
                    <img src="/assets/images/agent3.jpg" class="img-fluid" alt="">
                    <div class="card-body position-absolute bottom-0 bg-primary w-100 h-fit-content">
                        <a class="d-flex p-0 m-0 justify-content-between text-white">
                            <span>Sign Up</span>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card how-it-works overflow-hidden rounded shadow border-0 position-relative">
                    <img src="/assets/images/agent2.jpg" class="img-fluid" alt="">
                    <div class="card-body position-absolute bottom-0 bg-primary w-100 h-fit-content">
                        <a class="d-flex p-0 m-0 justify-content-between text-white">
                            <span>Create Profile</span>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->


            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card how-it-works overflow-hidden rounded shadow border-0 position-relative">
                    <img src="/assets/images/cv.jpg" class="img-fluid" alt="">
                    <div class="card-body position-absolute bottom-0 bg-primary bg-opacity-0 w-100 h-fit-content">
                        <a class="d-flex p-0 m-0 justify-content-between text-white">
                            <span>Upload CV</span>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Popular Categories</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="/assets/images/work/1.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="javascript:void(0)" class="title h6 text-dark">Communications</a></li>
                            <li class="h6 mb-0 jobs">125 Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="/assets/images/work/2.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="javascript:void(0)" class="title h6 text-dark">Accounting</a></li>
                            <li class="h6 mb-0 jobs">125 Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="/assets/images/work/3.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="javascript:void(0)" class="title h6 text-dark">Restaurant</a></li>
                            <li class="h6 mb-0 jobs">125 Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="/assets/images/work/4.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="javascript:void(0)" class="title h6 text-dark">Health</a></li>
                            <li class="h6 mb-0 jobs">125 Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="/assets/images/work/5.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="javascript:void(0)" class="title h6 text-dark">Finance</a></li>
                            <li class="h6 mb-0 jobs">125 Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="/assets/images/work/6.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="javascript:void(0)" class="title h6 text-dark">Facilities</a></li>
                            <li class="h6 mb-0 jobs">125 Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="/assets/images/work/7.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="javascript:void(0)" class="title h6 text-dark">HR</a></li>
                            <li class="h6 mb-0 jobs">125 Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="/assets/images/work/8.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="javascript:void(0)" class="title h6 text-dark">Construction</a></li>
                            <li class="h6 mb-0 jobs">125 Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->


    <!-- Candidates Start -->
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Expert Candidates</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team text-center border-0">
                    <div class="card-body">
                        <div class="position-relative">
                            <img src="/assets/images/client/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ronny Jofra</a></h5>
                            <small class="designation text-muted">Web Developer</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team text-center border-0">
                    <div class="card-body">
                        <div class="position-relative">
                            <img src="/assets/images/client/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Micheal Carlo</a></h5>
                            <small class="designation text-muted">Web Designer</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team text-center border-0">
                    <div class="card-body">
                        <div class="position-relative">
                            <img src="/assets/images/client/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana Rosy</a></h5>
                            <small class="designation text-muted">IOS Developer</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team text-center border-0">
                    <div class="card-body">
                        <div class="position-relative">
                            <img src="/assets/images/client/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana Rosy</a></h5>
                            <small class="designation text-muted">IOS Developer</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- Candidates End -->

    <!-- Testi start -->
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Candidates Review</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <div class="tiny-three-item">
                    <div class="tiny-slide">
                        <div class="card client-testi border-0 text-center">
                            <div class="card-body">
                                <img src="/assets/images/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                <p class="text-muted mt-4">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                <h6 class="text-primary">- Thomas Israel</h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card client-testi border-0 text-center">
                            <div class="card-body">
                                <img src="/assets/images/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <h6 class="text-primary">- Carl Oliver</h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card client-testi border-0 text-center">
                            <div class="card-body">
                                <img src="/assets/images/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                <h6 class="text-primary">- Barbara McIntosh</h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card client-testi border-0 text-center">
                            <div class="card-body">
                                <img src="/assets/images/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                <h6 class="text-primary">- Jill Webb</h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card client-testi border-0 text-center">
                            <div class="card-body">
                                <img src="/assets/images/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                <h6 class="text-primary">- Dean Tolle</h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card client-testi border-0 text-center">
                            <div class="card-body">
                                <img src="/assets/images/client/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                <p class="text-muted mt-4">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                <h6 class="text-primary">- Christa Smith</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <!-- Testi end -->
</section>
<!--end section-->
<!-- End -->


@endSection("mainSection")