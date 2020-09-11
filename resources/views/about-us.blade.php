@extends('layouts.app')
@section('title')
About
@endsection
@section('css')
<style type="text/css" media="screen">
.testimonial-slider__media img
{
	height: 100px;
}
.description-txt
{
	line-height: 0.1;
	font-size: 15px;
	font-style: normal;
	font-weight: 400;
	visibility: visible;
	font-family: "CerebriSans";
	color: #696969;
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

</style>
@endsection


@section('content')
<div class="site-wrapper-reveal">
        <div class="about-banner-wrap banner-space about-us-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                        <div class="about-banner-content text-center">
                            <h1 class="mb-15 text-white">ABOUT VISTADERM</h1>
                            <h5 class="font-weight--normal text-white">Our future hinges on our ability to find a way to make things better, seek connection, and open the doors of possibility for others - VISTADERM is created with this goal to provide 360-degree technology solutions exclusively to the Derma-fraternity. This software introduces the Dermatologists to an Electronic Health Record System built precisely to cater to the needs – online and offline. </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_60">
                            
                            <h3 class="heading"><span class="text-color-primary"> ABOUT VISTADERM</span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

           

                
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cybersecurity-about-text">
                                <div class="text">The core team behind VISTADERM had a singular vision while crafting this software – to ensures that each Dermatologist is equipped with this cutting-edge software with features to manage the administrative, financial, and functional aspects of a derma-clinic.
                                </div>
                            </div>
                            <div class="text">  
                                    Designed with a range of specialisms, it provides a comprehensive list of functionalities, including a customisable dashboard, ePrescribing, a fully-integrated patient portal, and interoperable practice management that can massively increase practice revenue.<br>
                                We commit to providing complete customer service and training. Our objective is to keep evolving and improvising the software through continuous research and development to suit your customised needs and meeting future market trends. 
                            </div>
                        </div>
                    </div>
                
                
            </div>
        </div>

        


        <!--===========  feature-large-images-wrapper  End =============-->
        <div class="">
            <div class="container">
            	<div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_30">

                            <h3 class="heading"> <span class="text-color-primary">VISTADERM TEAM</span></h3><br>
                            <div class="text text-left">
                                Experts from three different industries have come together to build this powerful software; VISTADERM has the dermatology insights from the veteran Dermatologist Dr. Janak Thakkar, the millennial perceptions of Dr. Smit Thakkar, holistic knowledge of the Derma-field at each layer by Mr. Ilesh Khakhkhar, and the IT acuities of the software Skillman, Mr. Prakash Gujarati.  A combination of these masterminds has resulted in VISTADERM - A 360-degree solution for Derma-practitioners… A masterpiece software par excellence!
                            </div>
                            
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__three">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="testimonial-slider__media">
                                                    	<img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                                	</div>
                                                    <h5 class="heading">
                                                        Dr Janak Thakkar
                                                        <br>
                                                        <span class="description-txt">
                                                            is a dermatologist par excellence with a rich experience of 38 years in his tow. His first-hand knowledge from a dermatologist’s perspective has made this software all-inclusive. His inputs made VISTADERM a software that creates cycles of care that help providers better understand patient needs, accurately gauge risk, and promote more effective treatment and better outcomes. 
                                                        </span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="testimonial-slider__media">
                                                    	<img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                                                	</div>
                                                    <h5 class="heading">
                                                    	Dr Smit Thakkar
                                                    	<br>
                                                    	<span class="description-txt">
                                                    		is a young dermatologist with the enthusiasm and passion for technology, and a great awareness of the current industry trends. He worked hard with a focus on building a 360-degree software solution that is technologically powerful but has features that make it easy to use. Thanks to his tech-savvy outlook, VISTADERM is a configurable system that is a connecting platform for Dermatologists, Patients, and Vendors. 
                                                    	</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="testimonial-slider__media">
                                                    	<img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                                                	</div>
                                                    <h5 class="heading">
                                                    	Dr Ilesh Khakhkhar
                                                    	<br>
                                                        <span class="description-txt">
                                                        	is a successful entrepreneur and practice management expert, who has more than 27 years of marketing experience in dermatology. He is a design-driven and technology-focused brand and marketing strategist with sharp insight into digital marketing. His vision helped lead the strategy, design, and growth of VISTADERM. He believes that healthcare technology is entering a new era of innovation and is passionate about making transformative technology easy to access, and enjoyable to use for the Derma fraternity. 
                                                        </span>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="testimonial-slider__media">
                                                    	<img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                                                	</div>
                                                    <h5 class="heading">
                                                         Dr Prakash Gujarati
                                                        <br>
                                                        <span class="description-txt">
                                                        	is a young and dynamic software developer who has a vast experience in the IT field believes that inspiration and a healthy dose of constructive dissatisfaction are keys to successful products and technology innovation. He trusts that great products are created through a keen customer focus, ground-breaking ideas, precise engineering, and efficient execution. 
                                                        </span>
                                                    </h5>
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
@endsection