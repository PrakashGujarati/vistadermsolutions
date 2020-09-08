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
</style>
@endsection


@section('content')
<div class="feature-icon-wrapper bg-gray section-space--ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 wow move-up">
                <center>
                    <i class="fa fa-phone features-icon"></i><br><br>
                    <h5 class="heading">+91 98585 98484</h5>
                    <h7 class="heading">9 AM to 9 PM (IST) - Mon to Sat</h7>

                </center>
            </div>
            <div class="col-lg-4 col-md-6 wow move-up">
                <center>
                      <i class="fa fa-envelope features-icon"></i><br><br>
                    <h5 class="heading">info@vistaderm.in</h5>
                    
                </center>
            </div>
            <div class="col-lg-4 col-md-6 wow move-up">
                <center>
                    <i class="fa fa-map-marker features-icon"></i><br><br>
                    <h5 class="heading">402, imperial heights, rajkot</h5>
                    

                </center>
            </div>
        </div>
        
    </div>
    <hr>


@endsection