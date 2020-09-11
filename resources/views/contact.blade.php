@extends('layouts.app')
@section('title')
contact
@endsection
@section('css')
<style type="text/css">
    .features-icon
    {
        color: #3685f1;
        font-size: 45px;
    }
    .section-space--ptb_120
    {
        padding-top: 20px;
        padding-bottom: 15px;
    }
</style>
@endsection


@section('content')
<div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-lg-6">
                <div class="conact-us-wrap-one mb-30">
                    <h3 class="heading"><span class="text-color-primary">contact us</span> VistaDerm. </h3>
                </div>
            </div>

            <div class="col-lg-6 col-lg-6">
                <div class="contact-form-wrap">
                    <form id="contact-form" action="#" method="post">
                        <div class="contact-form">
                            <div class="contact-input">
                                <div class="contact-inner">
                                    <input name="con_name" type="text" placeholder="Name *">
                                </div>
                                <div class="contact-inner">
                                    <input name="con_email" type="email" placeholder="Email *">
                                </div>
                            </div>
                            <div class="contact-inner">
                                <input name="con_subject" type="text" placeholder="Mobile *">
                            </div>
                            <div class="contact-inner contact-message">
                                <textarea name="con_message" placeholder="Please Message."></textarea>
                            </div>
                            <div class="submit-btn mt-20">
                                <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="grid-item animate">
                    <div class="ht-box-icon style-03">
                        <div class="icon-box-wrap">
                            <div class="text-center">
                                <i class="fa fa-phone features-icon"></i><br><br>
                                <h5 class="heading">+91 98585 98484</h5>
                                <h7 class="heading">10 to 2, 4 to 8</h7>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-item animate">
                    <div class="ht-box-icon style-03">
                        <div class="icon-box-wrap">
                            <div class="text-center">
                                <i class="fa fa-envelope features-icon"></i><br><br>
                                <h5 class="heading">info@vistaderm.in</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-item animate">
                    <div class="ht-box-icon style-03">
                        <div class="icon-box-wrap">
                            <div class="text-center">
                                <i class="fa fa-map-marker features-icon"></i><br><br>
                                <h6 class="heading">B/407 – Imperial Heights, Opp. Big Bazzar, 150ft Ring Road, Rajkot. (Guj., India)</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection