@extends("layouts.app")
<!-- Hero Start -->
@section("titleSection")
<title>Home - Smart Force</title>
@endSection("titleSection")


@section("mainSection")
<section class="bg-half-170 d-table w-100" id="" style="height: 50vh; overflow: hidden">
    <div class="mt-sm-0 pt-sm-0 clip no-clip" style="position: absolute; top: 0; height: 50vh; width: 100%; z-index: 0">
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
                <div class="title-heading title-heading2 mt-4 p-3 shadow-md rounded " style="width: fit-content">
                    <h1 class="fw-900 text-uppercase text-white main-title">Contact Us</h1>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->



<div class="contact-information">
    <div class="container">
        <div class="text-center mb-4 pb-4">
            <h3 class="my_h3">Contact Us</h3>
            <br />
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-phone"></i>
                    <h4>Phone</h4>
                    <a href="#">+47 802 401 2409</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-envelope"></i>
                    <h4>Email</h4>
                    <a href="#">info@smartforce.com</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-map-marker"></i>
                    <h4>Location</h4>
                    <a>London, UK.</a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="callback-form contact-us" id="requestFeedback" style="background: #232323;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2 class="text-white">Request a <em>feedback</em></h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start -->
<section>
    <div id="map">
        <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
        <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

@endSection("mainSection")