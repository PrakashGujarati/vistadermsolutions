
<?php $__env->startSection('title'); ?>
Pricing
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<style type="text/css">
.sub-title-txt
{
	font-size: 12px;
	line-height: 1.5;
	color: inherit;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-bottom: 21px;
	z-index: 2;
	position: relative;
}
.wrong_txt li
{
	margin: 10px auto 0;
	max-width: 270px;
	color: #696969;
}
.fa-times
{
	color: red;
	padding-right: 12px;
}
/*.package
{
    max-height: 1000px;
}*/
.packagediv
{
    height: 1370px;

}


.switch {
  position: relative;
  display: inline-block;
  width: 120px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ca2222;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 8px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2ab934;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(55px);
  -ms-transform: translateX(55px);
  transform: translateX(76px);
}

/*------ ADDED CSS ---------*/
.on
{
  display: none;

}

.on, .off
{
  color: white;
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left: 50%;
  font-size: 11px;
  font-family: Verdana, sans-serif;
   font-weight: bold;
}

input:checked+ .slider .on
{display: block;}

input:checked + .slider .off
{display: none;}

/*--------- END --------*/

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;}



</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<center>
 


<label class="switch">
  



<label class="switch mt-5">
    <input type="checkbox" id="togBtn" class="coupon_question" name="coupon_question" value="1" onchange="valueChanged()">
    <div class="slider round">
        <span class="on">ONLINE</span>
        <span class="off">&nbspOFFLINE</span>
    </div>
</label>


</center>
 <div class="pricing-table-area section-space--pb_70 bg-gradient offline">
            <div class="pricing-table-title-area position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                                    
                                <h5> <span class="text-color-primary">OFFLINE SOLUTION FOR<br> BEST PERFORMANCE AND PRIVACY</span> </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-table-content-area">
                <div class="container">
                    <div class="row pricing-table-one">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up package">
                            <div class="pricing-table__inner packagediv">
                                <div class="pricing-table__header">
                                    <h4 class="sub-title">BASIC<br><span class="sub-title-txt">1-3 DEVICES</span></h4>
                                    <div class="pricing-table__image">
                                        <img src="assets/images/icons/mitech-pricing-box-icon-01-90x90.png" class="img-fluid" alt="">
                                    </div>
                                    
                                    <div class="pricing-table__price-wrap">
                                        <h6 class="currency">₹</h6>
                                        <h6 class="price">20,000</h6>
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                        <p style="margin-top: 10px;"> <del> 25,000</del>&nbsp <b style="color:#388e3c;">20% off</b></p>
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                    </div>
                                </div>
                                <div class="pricing-table__body">
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-md ht-btn--outline">PURCHASE</a>
                                    </div>
                                    <ul class="pricing-table__list text-left">
                                        <li>APPOINTMENT</li>
                                        <li>RECEPTION</li>
                                        <li>CONSULT</li>
                                        <li>DIGITAL PRESCRIPTION</li>
                                        <li>IMAGES MODULE</li>
                                        <li>PRE-POST COLLAGE GENERATION</li>
                                        <li>MEDICAL CERTIFICATES GENERATION</li>
                                        <li>ADVANCED BILLING</li>
                                        <li>REPORTS & ANALYTICS</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular wow move-up package">
                            <div class="pricing-table__inner packagediv">
                                <div class="pricing-table__feature-mark">
                                    <span>PREMIUM</span>
                                </div>
                                <div class="pricing-table__header">
                                    <h4 class="sub-title">PREMIUM<br><span class="sub-title-txt">4-8 DEVICES</span></h4>
                                    <div class="pricing-table__image">
                                        <img src="assets/images/icons/mitech-pricing-box-icon-02-88x88.png" class="img-fluid" alt="">
                                    </div>
                                     <div class="pricing-table__price-wrap">
                                        <h6 class="currency">₹</h6>
                                        <h6 class="price">32,000</h6>
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                        <p style="margin-top: 10px;"> <del> 40,000</del>&nbsp <b style="color:#388e3c;">20% off</b></p>
                                    </div>
                                </div>
                                <div class="pricing-table__body">
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn  ht-btn-md ">PURCHASE</a>
                                    </div>
                                    <ul class="pricing-table__list text-left">
                                        <li>APPOINTMENT</li>
                                        <li>RECEPTION</li>
                                        <li>CONSULT</li>
                                        <li>DIGITAL PRESCRIPTION</li>
                                        <li>IMAGES MODULE</li>
                                        <li>PRE-POST COLLAGE GENERATION</li>
                                        <li>MEDICAL CERTIFICATES</li>
                                        <li>ADVANCED BILLING</li>
                                        <li>REPORTS & ANALYTICS</li>
                                        <li>PROCEDURE MODULE</li>
										<li>PACKAGE MANAGEMENT</li>
                                        <li>CONSENTS GENERATION</li>
                                        <li>PHARMACY MODULE</li>
                                        <li>WALLET FEATURE</li>
                                        <li>CRM DESK</li>
										<li>CUSTOMIZED EMAIL AND SMS TEMPLATES</li>
                                        <li>TELE-CONSULTATION</li>
                                        <li>DATA MIGRATION FROM YOUR EXISTING SOFTWARE</li>

                                        
										
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up package">
                            <div class="pricing-table__inner packagediv">
                                <div class="pricing-table__header">
                                    <h4 class="sub-title">ENTERPRISE<br><span class="sub-title-txt">9+ DEVICES</span></h4>
                                    <div class="pricing-table__image">
                                        <img src="assets/images/icons/mitech-pricing-box-icon-03-90x90.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                        
                                        <p style="font-size: 26px;width: 300;color: #333">GET A QUOTE</p>
                                        
                                    </div>
                                </div>
                                <div class="pricing-table__body" style="margin-top: 70px;">
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-md ht-btn--outline">CONTACT</a>
                                    </div>
                                    <ul class="pricing-table__list text-left">
                                        <li>APPOINTMENT</li>
                                        <li>RECEPTION</li>
                                        <li>CONSULT</li>
                                        <li>DIGITAL PRESCRIPTION</li>
                                        <li>IMAGES MODULE</li>
                                        <li>PRE-POST COLLAGE GENERATION</li>
                                        <li>MEDICAL CERTIFICATES</li>
                                        <li>ADVANCED BILLING</li>
                                        <li>REPORTS & ANALYTICS</li>
                                        <li>PROCEDURE MODULE</li>
                                        <li>PACKAGE MANAGEMENT</li>
                                        <li>CONSENTS GENERATION</li>
                                        <li>PHARMACY MODULE</li>
                                        <li>WALLET FEATURE</li>
                                        <li>CRM DESK</li>
                                        <li>CUSTOMIZED EMAIL AND SMS TEMPLATES</li>
                                        <li>TELE-CONSULTATION</li>
                                        <li>DATA MIGRATION FROM YOUR EXISTING SOFTWARE</li>
                                        <li>LABORATORY MODULE</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="pricing-table-area section-space--pb_70 bg-gradient online">
            <div class="pricing-table-title-area position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                                <br>
                                <h5> <span class="text-color-primary">GO ONLINE AND EXPLORE <br> WHOLE NEW EXPERIENCE</span> </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-table-content-area">
                <div class="container">
                    <div class="row pricing-table-one">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up package">
                            <div class="pricing-table__inner packagediv">
                                <div class="pricing-table__header">
                                    <h4 class="sub-title">INDIVIDUAL<br><span class="sub-title-txt">1-3 USERS</span></h4>
                                    <div class="pricing-table__image">
                                        <img src="assets/images/icons/mitech-pricing-box-icon-01-90x90.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                        <h6 class="currency">₹</h6>
                                        <h6 class="price">999</h6>
                                    </div>
                                </div>
                                <div class="pricing-table__body">
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-md ht-btn--outline">PURCHASE</a>
                                    </div>
                                    <ul class="pricing-table__list text-left">
                                        <li>APPOINTMENT</li>
                                        <li>RECEPTION</li>
                                        <li>CONSULT</li>
                                        <li>DIGITAL PRESCRIPTION</li>
                                        <li>IMAGES MODULE</li>
                                        <li>PRE-POST COLLAGE GENERATION</li>
                                        <li>MEDICAL CERTIFICATES</li>
                                        <li>REPORTS & ANALYTICS</li>
                                    </ul>
                                    <ul class="wrong_txt text-left">
                                        <li>
                                            <i class="fa fa-times" aria-hidden="true"></i> PROCEDURE MODULE
                                        </li>
                                        <li>
                                            <i class="fa fa-times" aria-hidden="true"></i> PACKAGE MANAGEMENT
                                        </li>
                                        <li>
                                            <i class="fa fa-times" aria-hidden="true"></i> CONSENTS  GENERATION
                                        </li>
                                        <li>
                                            <i class="fa fa-times" aria-hidden="true"></i> LOYALTI CARDS
                                        </li>
                                        <li>
                                            <i class="fa fa-times" aria-hidden="true"></i> CRM PANEL
                                        </li>
                                        <li>
                                            <i class="fa fa-times" aria-hidden="true"></i> LABORATORY
                                        </li>
                                        <li>
                                            <i class="fa fa-times" aria-hidden="true"></i> ADVANCED BILLING
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular wow move-up package">
                            <div class="pricing-table__inner packagediv">
                                <div class="pricing-table__feature-mark">
                                    <span>PREMIUM</span>
                                </div>
                                <div class="pricing-table__header">
                                    <h4 class="sub-title">PREMIUM<br><span class="sub-title-txt">4-8 USERS</span></h4>
                                    <div class="pricing-table__image">
                                        <img src="assets/images/icons/mitech-pricing-box-icon-02-88x88.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                        <h6 class="currency">₹</h6>
                                        <h6 class="price">1199</h6>
                                        
                                    </div>
                                </div>
                                <div class="pricing-table__body">
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn  ht-btn-md ">PURCHASE</a>
                                    </div>
                                    <ul class="pricing-table__list text-left">
                                        <li>APPOINTMENT</li>
                                        <li>RECEPTION</li>
                                        <li>CONSULT</li>
                                        <li>DIGITAL PRESCRIPTION</li>
                                        <li>IMAGES MODULE</li>
                                        <li>PRE-POST COLLAGE GENERATION</li>
                                        <li>MEDICAL CERTIFICATES</li>
                                        <li>REPORTS & ANALYTICS</li>
                                        <li>PROCEDURE MODULE</li>
                                        <li>PACKAGE MANAGEMENT</li>
                                        <li>CONSENTS  GENERATION</li>
                                        <li>LOYALTI CARDS</li>
                                        <li>CRM PANEL</li>
                                        <li>LABORATORY</li>
                                        <li>ADVANCED BILLING</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up package">
                            <div class="pricing-table__inner packagediv">
                                <div class="pricing-table__header">
                                    <h4 class="sub-title">ENTERPRISE<br><span class="sub-title-txt">UNLIMITED USERS</span></h4>
                                    <div class="pricing-table__image">
                                        <img src="assets/images/icons/mitech-pricing-box-icon-03-90x90.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="pricing-table__price-wrap">
                                        <h6 class="currency">₹</h6>
                                        <h6 class="price">1499</h6>
                                        
                                    </div>
                                </div>
                                <div class="pricing-table__body">
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-md ht-btn--outline">PURCHASE</a>
                                    </div>
                                    <ul class="pricing-table__list text-left">
                                        <li>ALL THE FEATURES +</li>
                                        <li>1 HOUR QUICK TECH SUPPORT</li>
                                        <li>IN DEPTH REPORTS</li>
                                        <li>ADVANCED CHARTS FOR ANALYSIS</li>
                                        <li>CUSTOM EMAIL NEWSLETTER THEMES</li>
                                        <li>NEW FEATURES EVERY YEAR</li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>


<script>


$(document).ready( function() {
    $(".online").hide();
    /*$(".on").text("offline");*/

});



 function valueChanged()
{
    if($('.coupon_question').is(":checked")) 
    {
        /*alert("abc");*/
         
        /*$(".slider").text("online");*/
        $(".online").show();   
        $(".offline").hide();   
    }  
        
    else
    {
/*        alert("no");*/
        /*$(".slider").text("offline");*/
        $(".online").hide();   
        $(".offline").show();
    }
}




/*$(".packagebtn").click(function () {
    var value = this.value;

    if (value == "offline") {
        this.value = "online"
        $(".online").show();   
        $(".offline").hide();   
    } else {
        this.value = "offline"
        $(".online").hide();   
        $(".offline").show();
    }
});*/


</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctors\vistadermsolutions\resources\views/pricing.blade.php ENDPATH**/ ?>