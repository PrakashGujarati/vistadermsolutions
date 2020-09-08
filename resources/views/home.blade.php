@extends('layouts.app')
@section('title')
Home
@endsection
@section('css')
<style type="text/css" media="screen">
/*.row .country-code  
{
padding:15px;
} */
/*.img-circle
{
    border-radius: 50%;
    width: 200px;
    height: 200px;
}*/

.icon-size
{
    font-size:70px;
    color: white;
}
.icon-hover
{
    font-size:80px;
    color: white;
}
.txt-size
{
    color: white;
    font-size: 20px;

}
.features-icon
{
    color: #3685f1;
    font-size: 35px;
}
.text
{
line-height: 1.74;
font-size: 18px;
font-style: normal;
font-weight: 400;
visibility: visible;
font-family: "CerebriSans";
color: #696969;
}
.section-space--ptb_100
{
    padding-top: 0px;
    padding-bottom: 0px;
}
.slider-background
{
    position: relative;
    background-repeat: no-repeat;
    background-position: center center;
    padding: 100px 0;
}
.ht-box-icon.style-03 .icon-box-wrap
{
    padding: 12px;
}
.brand-logo--slider
{
    width: 420px;
}
.swiper-width
{
    width: 250px !important;
}
.grid-wrapper
{
    height: 454px;
}
</style>
@endsection


@section('content')
<!--============ Infotechno Hero Start ============-->
<div class="infotechno-hero infotechno-bg">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!--baseline-->
            <div class="col-lg-6 col-md-6">
                <div class="infotechno-hero-text  wow move-up">
                    <h4><span class="text-color-primary"> All-in-one Software Solution for</span></h4>
                    <h5>DERMATOLOGISTS</h5>
                    <p>The first ever dedicated software for dermatologists to manage their <br>practice. Powerful yet easy to use EMR with CRM software developed by <br>dermatologists. </p>
                    <div class="hero-button  mt-30">
                        <a href="#" class="ht-btn ht-btn-sm">Try free for 15 days</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="infotechno-hero-inner-images">

                    <div class="infotechno-inner-two  wow move-up">
                        <img class="img-fluid" src="{{ asset('assets/images/gallery/bgimage.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============ Infotechno Hero End ============-->

<div class="our-company-history section-space--ptb_100" style="margin-top: -50px">
    <div class="container-fluid">
        <div class="grid-wrapper">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
            <div class="line line-4"></div>
        </div>

        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="rv-video-section">
                    <div class="main-video-box video-popup">
                        <a href="{{ asset('assets/promo/promo.mp4') }}" class="video-link  mt-30">
                            {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30"> --}}
                            <div class="single-popup-wrap">
                                <img class="img-fluid border-radus-5" src="{{ asset('assets/full-width-img/doctor.jpg') }}" alt="">
                                <div class="ht-popup-video video-button">
                                    <div class="video-mark">
                                        <div class="wave-pulse wave-pulse-1"></div>
                                        <div class="wave-pulse wave-pulse-2"></div>
                                    </div>
                                    <div class="video-button__two">
                                        <div class="video-play">
                                            <span class="video-play-icon"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-custom-col">
                    <div class="section-title-wrap">
                        <h3 class="heading">Designed exclusively for  <br> dermatologists.<br></h3><h5><span class="text-color-primary">Most Versatile and Powerful EMR with CRM for professionals.</span></h5>

                        <p class="text mt-30">Be among the firsts to experience the powerful practice management software for derma-practitioners. Modern UI/UX designed for ease of use, touch screen friendly and most importantly multi-platform, so whether you have windows / android / ios / linux you can access your software. </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="" style="margin-top: -87px">
    <div class="container mb-20">
        <div class="swiper-container service-slider__project-active">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-project-slide-info" style="margin-top: 8rem">
                        <span class="text" style="font-size: 20px;"><b>
                            Who would understand your pains better than a dermatologist?<br><br>
                            Tried & tested in the practical environment of a derma-VistaDerm.</b>
                        </span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="slide-image">
                        <div class="image-wrap">
                            <div class="image">
                                <img class="img-fluid" src="{{ asset('assets/images/gallery/doctors.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feature-icon-wrapper bg-gray section-space--ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 wow move-up mt-5 ">
                <center>
                    <h5 class="heading">Offline Mode</h5><br>
                    <img src="{{ asset('assets/images/icons/ezgif.com-webp-to-png.png') }}" width="80" height="80" ><br><br>

                </center>
            </div>
            <div class="col-lg-4 col-md-6 wow move-up mt-5">
                <center>
                    <h5 class="heading">Data Security</h5><br>
                    <img src="{{ asset('assets/images/icons/padlock.png') }}" width="80" height="80"><br><br>
                </center>
            </div>
            <div class="col-lg-4 col-md-6 wow move-up mt-5">
                <center>
                    <h5 class="heading">Training & Support</h5><br>
                    <img src="{{ asset('assets/images/icons/customer-service.png') }}" width="80" height="80"><br><br>

                </center>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="feature-list-button-box text-center">


                
                    <p class="text" >    The first ever web-based practice management software in offline mode.<br>
                           No cloud or third-party server attached.<br>
                           Your data in your local system only.<br>
                           Never lose connection to your data, work seamlessly.<br>
                           Dedicated team to provide you seamless support & training.<br>
                    </p>

                    <a href="#" class="ht-btn ht-btn-sm">BOOK YOUR DEMO NOW</a>
                </div>
            </div>   
        </div>
    </div>


    <div class="mt-5">
        <div class="col-lg-12">
            <div class="section-title-wrap text-center section-space--mb_40">
                <h3 class="heading"><span class="text-color-primary">POWERFUL FEATURES</span></h3><h5 class="heading">WHICH YOU WOULD HAVE DREAMED OF</h5>
            </div>
        </div>
    </div>


<div class="col-md-12">
        <div class="container">
            <div class="row">
                
            
                <div class="col-md-4">
                    <div class="footer-widget__logo mb-30">
                        <img src="{{ asset('assets/images/gallery/promo-2.png') }}" alt="" style="width: 390px">
                    </div>
                </div>

                <div class="col-md-8">
                     <div class="row">
                        <div class="col-md-6">

                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <a href="features#" title="">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fa fa-coffee features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                Appointments
                                            </h5>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <a href="features" title="">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fas fa-desktop features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                EMR / Patient Treatment Records
                                            </h5>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <a href="features" title="">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fas fa-ghost features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                E-Prescription
                                            </h5>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <a href="features" title="">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fas fa-money-bill-alt features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                Invoice & Billing
                                            </h5>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-6">
                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <a href="features" title="">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fas fa-paper-plane features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                Procedure & Package Management
                                            </h5>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                         <div class="col-md-6">
                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fas fa-desktop features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                Expense Management
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>



                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <a href="features" title="">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fa fa-tasks features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                Photos Management
                                            </h5>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <a href="features" title="">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fas fa-bullhorn features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                Marketing & Campaigns
                                            </h5>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <a href="features" title="">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fa fa-camera features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                Laboratory Module
                                            </h5>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                       
                        <div class="col-md-6">
                            <div class="grid-item animate">
                                <div class="ht-box-icon style-03">
                                    <div class="icon-box-wrap">
                                        <a href="features" title="">
                                        <div class="content-header">
                                            <div class="icon">
                                                <i class="fas fa-first-aid features-icon"></i>
                                            </div>
                                            <h5 class="text">
                                                Pharmacy Module
                                            </h5>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>


                </div>
            </div>
        </div>
</div>



    <div style="background-image: url('assets/full-width-img/section-bg-5.jpg');" class="slider-background">
        
        <div class="container">
            <div class="row align-items-center">

                <div class="">
                    <div class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- brand logo slider -->
                                    <div class="">
                                        <div class="swiper-container brand-logo-slider__container">
                                            <div class="swiper-wrapper brand-logo-slider__one">
                                                <div class="swiper-slide brand-logo brand-logo--slider swiper-width">
                                                    <a href="#">
                                                        <div class="brand-logo__image">

                                                            <i class="fas fa-ghost icon-size" aria-hidden="true" ></i>
                                                            <p class="txt-size">
                                                                Work Offline
                                                            </p>

                                                        </div>
                                                        <div class="brand-logo__image-hover">
                                                            <i class="fas fa-ghost icon-hover" aria-hidden="true" ></i>
                                                            <p class="txt-size">
                                                                Work Offline
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="swiper-slide brand-logo brand-logo--slider swiper-width">
                                                    <a href="#">
                                                        <div class="brand-logo__image">

                                                            <i class="fa fa-rocket icon-size" aria-hidden="true" > </i>
                                                            <p class="txt-size">
                                                                Modern Ui/Ux
                                                            </p>

                                                        </div>
                                                        <div class="brand-logo__image-hover">
                                                            <i class="fa fa-rocket icon-hover" aria-hidden="true" ></i>
                                                            <p class="txt-size">
                                                                Modern Ui/Ux
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="swiper-slide brand-logo brand-logo--slider swiper-width">
                                                    <a href="#">
                                                        <div class="brand-logo__image">

                                                            <i class="fa fa-magic icon-size" aria-hidden="true" > </i>
                                                            <p class="txt-size">
                                                                Multi Platform
                                                            </p>
                                                        </div>
                                                        <div class="brand-logo__image-hover">
                                                            <i class="fa fa-magic icon-hover" aria-hidden="true" ></i>
                                                            <p class="txt-size">
                                                                Multi Platform
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="swiper-slide brand-logo brand-logo--slider swiper-width">
                                                    <a href="#">
                                                        <div class="brand-logo__image">


                                                            <i class="fa fa-wrench icon-size" aria-hidden="true" > </i>
                                                            <p class="txt-size">
                                                                Package Management
                                                            </p>
                                                        </div>
                                                        <div class="brand-logo__image-hover">
                                                            <i class="fa fa-wrench icon-hover" aria-hidden="true" ></i>
                                                            <p class="txt-size">
                                                                Package Management
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide brand-logo brand-logo--slider swiper-width">
                                                    <a href="#">
                                                        <div class="brand-logo__image">



                                                            <i class="fa fa-music icon-hover" aria-hidden="true" ></i>

                                                            <p class="txt-size">
                                                                Multi User/VistaDerm
                                                            </p>

                                                        </div>
                                                        <div class="brand-logo__image-hover">
                                                            <i class="fa fa-music icon-hover" aria-hidden="true" ></i>
                                                            <p class="txt-size">
                                                                Multi User/VistaDerm
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 

            </div>
        </div>
    </div>


    <div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-lg-6">
                    <div class="contact-info-one text-center">
                        <img class="img-fluid" src="{{ asset('assets/images/gallery/bgimage.png') }}" alt="">

                    </div>
                </div>

                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading">Cross-platform support</h3>
                        <p class="heading"> Windows / Mac / Android / ios / Linux</p>
                        <div class="sub-heading">
                            <p>
                                VistaDerm is optimised to work on all major platforms for maximum productivity. User interface is touchscreen optimised so you can use ipad or other touchscreens as you prefer.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="site-wrapper-reveal mt-5">

        <div class="feature-large-images-wrapper section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_30">

                            <h3 class="heading"> <span class="text-color-primary">The Team of Experts</span></h3>
                            <h5 class="heading">Experts from 3 different industries have come together to build this powerful <br>software VistaDerm with exclusive features to modernise your practice. </h5>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row row--35">
                            <div class="col-lg-3 col-md-6 mt-30">
                                <!-- Box large image warap Start -->
                                <a href="#" class="box-large-image__wrap wow move-up">
                                    <div class="box-large-image__box">
                                        <div class="box-large-image__midea">
                                            <div class="images-midea">
                                                <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                                <div class="button-wrapper">
                                                    <div class="btn tm-button">
                                                        <span class="button-text">Visionary Dermatologist, practicing since last 38 years, who thoroughly understands the pains and gains of a dermatologist.</span>
                                                    </div>
                                                </div>
                                                <div class="heading-wrap">
                                                    <h5 class="heading">Dr Janak Thakkar </h5>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="box-large-image__content mt-30 text-center">
                                            <p><b>Dr Janak Thakkar</b><br>MD Dermatology </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Box large image warap End -->
                            </div>
                            <div class="col-lg-3 col-md-6 mt-30">
                                <!-- Box large image warap Start -->
                                <a href="#" class="box-large-image__wrap wow move-up">
                                    <div class="box-large-image__box">
                                        <div class="box-large-image__midea">
                                            <div class="images-midea">
                                                <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                                                <div class="button-wrapper">
                                                    <div class="btn tm-button">
                                                        <span class="button-text">Young futuristic Dermatologist with the enthusiasm and passion for technology, practicing with Dr Janak Thakkar and well aware about current industry needs. </span>
                                                    </div>
                                                </div>
                                                <div class="heading-wrap">
                                                    <h5 class="heading">Dr Smit Thakkar  </h5>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="box-large-image__content mt-30 text-center">
                                            <p><b>Dr Smit Thakkar</b><br>DDVL Dermatology</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Box large image warap End -->
                            </div>
                            <div class="col-lg-3 col-md-6 mt-30">
                                <!-- Box large image warap Start -->
                                <a href="#" class="box-large-image__wrap wow move-up">
                                    <div class="box-large-image__box">
                                        <div class="box-large-image__midea">
                                            <div class="images-midea">
                                                <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                                                <div class="button-wrapper">
                                                    <div class="btn tm-button">
                                                        <span class="button-text">A serial entrepreneur and practice management expert, who has more than 27 years of experience of marketing exclusively in dermatology.</span>
                                                    </div>
                                                </div>
                                                <div class="heading-wrap">
                                                    <h5 class="heading">Mr Ilesh Khakhar</h5>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="box-large-image__content mt-30 text-center">
                                            <p><b>Mr Ilesh Khakhar</b><br>Serial Entrepreneur</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Box large image warap End -->
                            </div>
                            <div class="col-lg-3 col-md-6 mt-30">
                                <!-- Box large image warap Start -->
                                <a href="#" class="box-large-image__wrap wow move-up">
                                    <div class="box-large-image__box">
                                        <div class="box-large-image__midea">
                                            <div class="images-midea">
                                                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                                                <div class="button-wrapper">
                                                    <div class="btn tm-button">
                                                        <span class="button-text">Young and enthusiastic software developer and designer with brilliant skills for computer languages, who has also served international clients.</span>
                                                    </div>
                                                </div>
                                                <div class="heading-wrap">
                                                    <h5 class="heading">Mr Prakash Gujarati  </h5>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="box-large-image__content mt-30 text-center">
                                            <p><b>Mr Prakash Gujarati </b><br>Software Engineer (Ph.D.) </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Box large image warap End -->
                            </div>


                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            
                            <h3 class="heading"><span class="text-color-primary">What Our Doctors Have to Say</span></h3>
                        </div>
                        <div class="testimonial-slider">
                            <div class="swiper-container testimonial-slider__container">
                                <div class="swiper-wrapper testimonial-slider__wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__one wow move-up">

                                            <div class="testimonial-slider--info">
                                                <div class="testimonial-slider__media">
                                                    <img src="assets/images/testimonial/mitech-testimonial-avata-02-90x90.jpg" class="img-fluid" alt="">
                                                </div>

                                                <div class="testimonial-slider__author">
                                                    <div class="testimonial-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="author-info">
                                                        <h6 class="name">Abbie Ferguson</h6>
                                                        <span class="designation">Marketing</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__one wow move-up">

                                            <div class="testimonial-slider--info">
                                                <div class="testimonial-slider__media">
                                                    <img src="assets/images/testimonial/mitech-testimonial-avata-03-90x90.jpg" class="img-fluid" alt="">
                                                </div>

                                                <div class="testimonial-slider__author">
                                                    <div class="testimonial-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="author-info">
                                                        <h6 class="name">Monica Blews</h6>
                                                        <span class="designation">Web designer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__one wow move-up">

                                            <div class="testimonial-slider--info">
                                                <div class="testimonial-slider__media">
                                                    <img src="assets/images/testimonial/mitech-testimonial-avata-04-90x90.jpg" class="img-fluid" alt="">
                                                </div>

                                                <div class="testimonial-slider__author">
                                                    <div class="testimonial-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="author-info">
                                                        <h6 class="name">Abbie Ferguson</h6>
                                                        <span class="designation">WEB DESIGNER</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__one wow move-up">

                                            <div class="testimonial-slider--info">
                                                <div class="testimonial-slider__media">
                                                    <img src="assets/images/testimonial/mitech-testimonial-avata-01-90x90.jpg" class="img-fluid" alt="">
                                                </div>

                                                <div class="testimonial-slider__author">
                                                    <div class="testimonial-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="author-info">
                                                        <h6 class="name">Abbie Ferguson</h6>
                                                        <span class="designation">WEB DESIGNER</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   


    <div class="col-lg-12 mt-5">
        <div class="section-title-wrap text-center section-space--mb_40">
            <h3 class="heading"><span class="text-color-primary">Experience Now the power of dedicated derma-software</span></h3><h6>& see how VistaDerm can help you improve your practice.</h6>
            <br>
            <a href="#" class="ht-btn ht-btn-sm">BOOK YOUR DEMO NOW</a>

        </div>
    </div>

    @endsection