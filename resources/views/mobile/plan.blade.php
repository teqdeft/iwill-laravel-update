@extends("mobile.layouts.auth")
@section("content")
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
var promo_data=""; 
</script>
    <div class="dashboard-steps step-package-dasboard" style="display: none;">
         @include('mobile.dashboardplanpayment.package-list')
    </div>     
    <div class="dashboard-steps step-invoice-dasboard" style="display: none;">
         @include('mobile.dashboardplanpayment.invoice-section')
    </div> 
    <div class="dashboard-steps step-payment-dasboard" style="display: none;">    
        @include('mobile.dashboardplanpayment.payment-section')
    </div>
  
   
<script>
$(function(){
    let currentRoute = @json(Route::currentRouteName());
    if(currentRoute=="MobileUserChangePlans") {
        var step_position = 2;
        $(".plan-name-show").html("Change Plan");
    } else {
       // var step_position = @json(Auth::user()->step_position);
        var step_position = 2;
        $(".plan-name-show").html("Choose Plan");
    }
    
    show_tabs(step_position)
    console.log(step_position);
});
function show_tabs(step_position){
        $(".dashboard-steps").hide();
        if(step_position==2){
            $(".step-package-dasboard").show();
        } else if(step_position==3){
            $(".step-invoice-dasboard").show();
        } else if(step_position==4){
            $(".step-payment-dasboard").show();
        }
}
@if(session('utm_source') && session('utm_medium') && session('utm_campaign'))
    document.getElementById('inputPromoCode').value = '{{ config("constants.signup-promo") }}';
    setTimeout(function(){  $(".promo-code-apply-btn").trigger("click"); }, 2000);
@endif


function validateCreditCard(input,max_number) {
    let value = input.value.replace(/\D/g, ''); // Remove any non-digit characters
    if (value.length > max_number) {
        value = value.substring(0, max_number); // Ensure the length doesn't exceed 10 digits
    }
    input.value = value; // Set the value back to the input
} 
$('#inputPromoCode').on('keydown', function(event) {
    const maxLength = 15;
    if (event.key === "Enter") {
        event.preventDefault();
        $('.promo-code-apply-btn').click();
    }
    if ($(this).val().length >= maxLength && event.key.length === 1 && !event.ctrlKey && !event.metaKey) {
        event.preventDefault();
        $(".promo-error").html('Maximum 15 characters allowed.').show();
    }
});
</script>


@endsection

@push('scripts')
    
    <script type="text/javascript" src="{{ asset('assets/js/mobile/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mobile/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mobile/datepickers.js') }}"></script>
	
<script>
$(document).on('submit','#invoice-form',function(e){
    e.preventDefault();
	showLoaderPageLoad('show');
    var formId = $("#invoice-form");
    $.ajax({
        method: "POST",
        url: formId.attr("action"),
        data: $(this).serialize(),
        dataType: "json",
        success: function(data) {
			showLoaderPageLoad('hide');
            if (data.original.status) {
                $("#package-free-trial-option").css("display","flex");
                show_tabs(4);
                $(".user_final_amount").html("$"+data.original.user_final_amount+"/mo");
                let res = data.original.data;
                setPaymentFields(res);
              
            } else {

                $("#res-msg").append(
                    '<div class="alert alert-danger" role="alert">' +
                    data.original.message +
                    "</div>"
                );
                $(".alert-danger").fadeOut(5000, function() {
                    $(this).remove();
                });
            }
        },
    });
});
function closepackagetermconditionmodal() {
	
	$("#packagetermconditionmodal").removeAttr("style");
	$("#agree_terms1").prop('checked', false);
	$("#agree_terms1").prop('disabled', false);
	
}
$(document).on('change', '#agree_terms1', function () {
	$("#packagetermconditionmodal").css("display","flex");
});
$(document).on('change', '#agree_term_condition_checkbox', function () {
	$("#packagetermconditionmodal").removeAttr('style');
	
	$("#agree_terms1").prop('checked', true);
	$("#agree_terms1").prop('disabled', true);
});
</script>	

<style>
.step-payment-dasboard .custom-checkbox_new.mt-4 {
    display: none;
}
</style>

<div id="packagetermconditionmodal" class="modal journal-modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closepackagetermconditionmodal();">
                <img src="{{ asset('assets/dashboard/assets/images/close.svg') }}" alt="Close Icon">
            </span>
            <div class="modal-body">
				
	
				@include('user.package.refund_policy_content',['page'=>'refund_policy'])	
				
				
            </div>
        </div>
</div>
@if(config('constants.trial_days') > 0)
	@include('user.package.free-trial-modal-payment')
@endif

@endpush