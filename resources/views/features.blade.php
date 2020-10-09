@extends('layouts.app')
@section('title')
Features
@endsection
@section('css')
<style type="text/css" media="screen">

.section-space--ptb_100
{
	padding-top: 44px;
}
.ht-tab-menu li a
{
	min-width: 0px;
	padding: 20px 10px 10px;
	background-color: transparent;
}
.ht-tab-menu li a
{
	line-height: 2.3;
	height: 103px;
}
.features-icon
{
    color: #3685f1;
    font-size: 35px;
}
.ht-tab-menu li a
{
	font-size: 12px;
	line-height: 1.55;
}

</style>
@endsection


@section('content')
{{-- 
@php
dd($id);
@endphp


 --}}
<div class="tabs-wrapper bg-gray section-space--ptb_100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
					<h3 class="heading"> <span class="text-color-primary">Everything you need to manage your Practice efficiently!!</span></h3>
					<h5>Comprehensive feature packed solution covers every need of your modern day practice.</h5>
					
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 ht-tab-wrap">
				<div class="text-center">
					<ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two" role="tablist" >
						<li class="tab__item nav-item active">
							<a class="nav-link active" id="nav-tab1" data-toggle="tab" href="#tab_list_01" role="tab" aria-selected="true">
								<i class="fa fa-coffee features-icon"></i><br>
							<span>Appointments</span>
							</a>
						</li>
						<li class="tab__item nav-item">
							<a class="nav-link" id="nav-tab2" data-toggle="tab" href="#tab_list_02" role="tab" aria-selected="false">
								<i class="fas fa-desktop features-icon"></i><br>
								<span>EMR Patient</span>
							</a>
						</li>
						<li class="tab__item nav-item ">
							<a class="nav-link" id="nav-tab3" data-toggle="tab" href="#tab_list_03" role="tab" aria-selected="false">
								<i class="fas fa-ghost features-icon"></i><br>
								<span>E-Prescription</span>
							</a>
						</li>
						<li class="tab__item nav-item ">
							<a class="nav-link" id="nav-tab4" data-toggle="tab" href="#tab_list_04" role="tab" aria-selected="false">
								<i class="fas fa-money-bill-alt features-icon"></i><br>
								<span>Billing</span>
							</a>
						</li>
						<li class="tab__item nav-item ">
							<a class="nav-link" id="nav-tab5" data-toggle="tab" href="#tab_list_05" role="tab" aria-selected="false">
								<i class="fas fa-paper-plane features-icon"></i><br>
								<span>Package Management</span>
							</a>
						</li>
						<li class="tab__item nav-item ">
							<a class="nav-link" id="nav-tab6" data-toggle="tab" href="#tab_list_06" role="tab" aria-selected="false">
									<i class="fa fa-camera features-icon"></i><br>
								<span>Laboratory Module</span>
							</a>
						</li>
						<li class="tab__item nav-item ">
							<a class="nav-link" id="nav-tab7" data-toggle="tab" href="#tab_list_07" role="tab" aria-selected="false">
								<i class="fa fa-tasks features-icon"></i><br>
								<span>Photos Management</span>
							</a>
						</li>
						<li class="tab__item nav-item ">
							<a class="nav-link" id="nav-tab8" data-toggle="tab" href="#tab_list_08" role="tab" aria-selected="false">
								<i class="fas fa-bullhorn features-icon"></i><br>
								<span>Marketing Campaigns</span>
							</a>
						</li>
						<li class="tab__item nav-item ">
							<a class="nav-link" id="nav-tab9" data-toggle="tab" href="#tab_list_09" role="tab" aria-selected="false">
								<i class="fas fa-desktop features-icon"></i><br>
								<span>Expense Management</span>
							</a>
						</li>
					</ul>
				</div>

				<div class="tab-content ht-tab__content">

					<div class="tab-pane fade show active" id="tab_list_01" role="tabpanel">
						<div class="tab-history-wrap section-space--mt_40">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h3 class="heading"> <span class="text-color-primary">Appointments</span></h3>
									<h7>Record complete interaction with patient in details. From complaint, to observations to investigations to<br> diagnosis & treatment. Store in depth clinical notes with extreme ease. </h7>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('assets/images/gallery/treatment_record_big.png') }}" alt="" style="width: 60%">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab_list_02" role="tabpanel">
						<div class="tab-history-wrap section-space--mt_40">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h3 class="heading"> <span class="text-color-primary">EMR / Patient Treatment Records</span></h3>
									<h7>Record complete interaction with patient in details. From complaint, to observations to investigations to<br> diagnosis & treatment. Store in depth clinical notes with extreme ease. </h7>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('assets/images/gallery/treatment_record_big.png') }}" alt="" style="width: 60%">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab_list_03" role="tabpanel">
						<div class="tab-history-wrap section-space--mt_40">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h3 class="heading"> <span class="text-color-primary">E-Prescription</span></h3>
									<h7>Record complete interaction with patient in details. From complaint, to observations to investigations to<br> diagnosis & treatment. Store in depth clinical notes with extreme ease. </h7>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('assets/images/gallery/treatment_record_big.png') }}" alt="" style="width: 60%">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab_list_04" role="tabpanel">
						<div class="tab-history-wrap section-space--mt_40">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h3 class="heading"> <span class="text-color-primary">Invoice & Billing</span></h3>
									<h7>Record complete interaction with patient in details. From complaint, to observations to investigations to<br> diagnosis & treatment. Store in depth clinical notes with extreme ease. </h7>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('assets/images/gallery/treatment_record_big.png') }}" alt="" style="width: 60%">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab_list_05" role="tabpanel">
						<div class="tab-history-wrap section-space--mt_40">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h3 class="heading"> <span class="text-color-primary">Procedure & Package Management</span></h3>
									<h7>Record complete interaction with patient in details. From complaint, to observations to investigations to<br> diagnosis & treatment. Store in depth clinical notes with extreme ease. </h7>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('assets/images/gallery/treatment_record_big.png') }}" alt="" style="width: 60%">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab_list_06" role="tabpanel">
						<div class="tab-history-wrap section-space--mt_40">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h3 class="heading"> <span class="text-color-primary">Laboratory Module</span></h3>
									<h7>Record complete interaction with patient in details. From complaint, to observations to investigations to<br> diagnosis & treatment. Store in depth clinical notes with extreme ease. </h7>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('assets/images/gallery/treatment_record_big.png') }}" alt="" style="width: 60%">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab_list_07" role="tabpanel">
						<div class="tab-history-wrap section-space--mt_40">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h3 class="heading"> <span class="text-color-primary">Photos Management</span></h3>
									<h7>Record complete interaction with patient in details. From complaint, to observations to investigations to<br> diagnosis & treatment. Store in depth clinical notes with extreme ease. </h7>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('assets/images/gallery/treatment_record_big.png') }}" alt="" style="width: 60%">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab_list_08" role="tabpanel">
						<div class="tab-history-wrap section-space--mt_40">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h3 class="heading"> <span class="text-color-primary">Marketing & Campaigns</span></h3>
									<h7>Record complete interaction with patient in details. From complaint, to observations to investigations to<br> diagnosis & treatment. Store in depth clinical notes with extreme ease. </h7>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('assets/images/gallery/treatment_record_big.png') }}" alt="" style="width: 60%">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab_list_09" role="tabpanel">
						<div class="tab-history-wrap section-space--mt_40">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h3 class="heading"> <span class="text-color-primary">Expense Management</span></h3>
									<h7>Record complete interaction with patient in details. From complaint, to observations to investigations to<br> diagnosis & treatment. Store in depth clinical notes with extreme ease. </h7>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('assets/images/gallery/treatment_record_big.png') }}" alt="" style="width: 60%">
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!--======== Tabs Wrapper End ======== -->



<!--========== Call to Action Area Start ============-->
<div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-8 col-lg-7">
				<div class="cta-content md-text-center">
					<h3 class="heading text-white">Assess your business potentials and find opportunities <span class="text-color-secondary">for bigger success</span></h3>
				</div>
			</div>
			<div class="col-xl-4 col-lg-5">
				<div class="cta-button-group--one text-center">
					<a href="#" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
					<a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--========== Call to Action Area End ============-->

</div>


<input type="hidden" id="id" value="{{$id}}">

@endsection
@section('script')
<script type="text/javascript">
	
$( document ).ready(function() {
   var value = $('#id').val()

 
  
   if(value == 'EMR')
   {
   	jQuery(function(){
   		jQuery('#nav-tab2').click();
   	});	
   }
   if(value == 'E-Prescription')
   {
   	jQuery(function(){
   		jQuery('#nav-tab3').click();
   	});	
   }
   if(value == 'Invoice_Billing')
   {
   	jQuery(function(){
   		jQuery('#nav-tab4').click();
   	});	
   }
   if(value == 'Procedure_&_Package_Management')
   {
   	jQuery(function(){
   		jQuery('#nav-tab5').click();
   	});	
   }
   if(value == 'Expense_Management')
   {
   	jQuery(function(){
   		jQuery('#nav-tab9').click();
   	});	
   }
   if(value == 'Photos_Management')
   {
   	jQuery(function(){
   		jQuery('#nav-tab7').click();
   	});	
   }
   if(value == 'marketing_&_Campaigns')
   {
   	jQuery(function(){
   		jQuery('#nav-tab8').click();
   	});	
   }
   if(value == 'Laboratory_Module')
   {
   	jQuery(function(){
   		jQuery('#nav-tab6').click();
   	});	
   }
   /*if(value == 'Pharmacy_Module')
   {
   	jQuery(function(){
   		jQuery('#nav-tab6').click();
   	});	
   }*/
   
   

   



   

});






</script>
@endsection
