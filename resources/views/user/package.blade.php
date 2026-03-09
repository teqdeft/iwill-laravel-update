<div class="tabs choose-plan">
@php
    $include_list = getPackageIncludeList();
@endphp
<script> 
var promo_data=""; 
</script>

<?php 
$plan_info = getMyCurrentPlanRecords(Auth::user()->id);
//echo config('constants.billing-cycle-date');
?>

        <div class="choose-plan-nav mt-0 mb-0">
            <div class="plan-nav-text">
                <div class="title">
                    <h2>Choose your plan</h2>
                </div>
                <div class="text">
                    <p>Personalized health plans for every step of your journey.</p>
                </div>
            </div>
			<div class="enter_p_code">
                <div class="title">
                    <p>Enter Your  Promo Code</p>
                </div>
                <form class="code_row">
                    <div class="input">
                        
						<input type="text" name="inputPromoCode" id="inputPromoCode" maxlength="15">
					    <input type="hidden" name="promo_code_id" value="">

                    </div>
                    <div class="code-validate">
                        <button type="button" class="promo-code-apply-btn primary-button" style="width: auto;">Apply</button>
                    </div>
                    
                </form>
                <div class="code_row"> <span class="promo-error" style="display:none;color:red;">Please fill your promo code</span></div>
            </div>
            <div class="tab-buttons">
                <button class="tab-button plan-tab active self-tab" data-tab="self">Self</button>
                <button class="tab-button plan-tab self-family-tab" data-tab="self-family">Self + Family</button>
            </div>
        </div>

        <div class="choose-plan-detail">
            <div class="tab-content">
                <div class="tab-panel active allUserPlan" id="self">

					@include('user.package.package-name',['member_type' => 1])
                    

                    <section class="all-feature-detail">
                        <div class="left">
                            <div class="plan-detail-title">
                                <div class="table-title">
                                    <p>Compare features by plan</p>
                                </div>
                            </div>
                            <div class="comp-fiture">
                                <div class="table-responsive">
									@include('user.package.package-details',['p_type'=>'package'])
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="plan-detail-title">
                                <div class="table-title optional-per-month">
                                    <p>Optional Add Ons</p>
									<p class="package-pm">Per Month</p>
                                </div>
                            </div>
                            <div class="pricing-pln-v4">
								@include('user.package.optional-service',['member_type' => 1,'p_type'=>'package'])
                            </div>
							<div class="cta">
                                <button class="medicine-detail-btn get-started-button">Subscribe Now <i class="fa fa-chevron-right fa-arrow-icon"></i></button>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="tab-panel allUserPlan" id="self-family">

                    @include('user.package.package-name',['member_type' => 2])

                    <section class="all-feature-detail">
                        <div class="left">
                            <div class="plan-detail-title">
                                <div class="table-title">
                                    <p>Compare features by plan</p>
                                </div>
                            </div>
                            <div class="comp-fiture">
                                <div class="table-responsive">
                                    @include('user.package.package-details',['p_type'=>'package'])
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="plan-detail-title">
                                <div class="table-title optional-per-month">
                                    <p>Optional Add Ons</p>
									<a class="package-pm">Per Month</p>
                                </div>
                            </div>
                            <div class="pricing-pln-v4">
                                @include('user.package.optional-service',['member_type' => 2,'p_type'=>'package'])
                            </div>
							<div class="cta">
                                <button class="medicine-detail-btn get-started-button payBtn-subscribe">Subscribe Now <i class="fa fa-chevron-right fa-arrow-icon"></i></button>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
</div>

@push('scripts')
<script>

$(document).on('change', '.user_agree_term_condition', function () {
	$("#packagetermconditionmodal").modal({backdrop: 'static',keyboard: false}).modal("show");
});
$(document).on('change', '#agree_term_condition_checkbox', function () { 
	$("#packagetermconditionmodal").modal('hide');
	$('.user_agree_term_condition').prop('checked', true);
	$(".user_agree_term_condition").prop('disabled', true);
});

function close_modal() {
	$('.user_agree_term_condition').prop('checked', false);
	$('.agree_term_condition_checkbox').prop('checked', false);
}
</script>

<div class="modal fade search_medications" id="packagetermconditionmodal" tabindex="-1" aria-labelledby="packagetermconditionmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Refund & Subscription Policy</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="close_modal()">
                      <span aria-hidden="true">×</span>
            </button>
      </div>
      <div class="modal-body">
	  
		@include('user.package.refund_policy_content',['page'=>'refund_policy'])	
    	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="close_modal()">Close</button>
      </div>
    </div>
  </div>
</div>


@endpush
