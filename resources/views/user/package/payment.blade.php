<div class="tabs choose-plan">
        <div class="choose-plan-nav mt-0 mb-0">
            <div class="plan-nav-text">
			<button type="button" class="primary-button" onclick="backToScreen('payment')"><i class="fa fa-chevron-left fa-arrow-icon fa-arrow-icon-back"></i> Back</button>
                <div class="title">
                    <h2>Checkout</h2>
                </div>
                <div class="text">
                    <p>Personalized health plans for every step of your journey.</p>
					
                </div>
            </div>
        </div>
    </div>
<form class="invoice-card-main" action="{{url('braintree-payment')}}" id="braintree-payment-submit" method="post">
    <div class="invoice-pay-with">
		
        <div class="left">
				
				<div class="test">
					{{ csrf_field() }}
					<input type="hidden" id="nonce" name="payment_method_nonce" />
					<input type="hidden" value="" name="plan" id="plan">
				</div>
				
                <div class="title">
                    <p>Payment information (Pay with Card)</p>
                </div>
				
				
				    


                <div class="card-image">
                    <img src="{{asset('assets/dashboard/htmlv/assets/images/visa-card.svg')}}" alt="card image" />
                </div>

                <div class="payment-card-form">
				
					
                    <div class="cust-form-group">
                        <label>Card Number</label>
                        <input name="card_number" id="card_number" class="form-control" type="number" placeholder="Card Number" onkeyup="validateCreditCard(this,'16')">
                    </div>
@php
    $currentMonth = now()->format('m');
@endphp
                    <div class="cust-form-group">
                        <label> Expiry Month</label>
                       
						<select id="exp_month" name="exp_month" class="form-control theme-select">
                                @for ($i = 1; $i <= 12; $i++)

                                    @php
                                        $month = str_pad($i, 2, '0', STR_PAD_LEFT);
                                    @endphp
                                    @if ($month > $currentMonth)
										
                                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                            {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                        </option>
                                        @endif    
                                @endfor
                            </select> 
						
                    </div>

                    <div class="cust-form-group">
                        <label>Expiry Year</label>
                        <select id="exp_year" name="exp_year" class="form-control theme-select" onchange="change_year(this.value)">
                            @for ($i = now()->year; $i <= now()->year + 9; $i++)
                                <option value="{{ substr($i, -2) }}" attr="{{ $i }}" >{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="cust-form-group">
                        <label>CVV</label>
                        <input class="form-control" type="text" id="ccv" name="ccv" placeholder="3-digit code on the back of your card" onkeyup="validateCreditCard(this,'3')">
                    </div>

                </div>

           

        </div>
        <div class="right">
            <div class="total-paying">
                
				<div class="payment">
                    <p>Total Price <span class="total-paying-amount">$0</span></p>
                </div>
				
				<div class="checkout-update checkout-section" style="display:none;">
                    
					
					
                </div>
				
                <div class="pay-securely">
                    <p><span class="icon"><img src="{{asset('assets/dashboard/htmlv/assets/images/pay-securely.svg')}}" alt="icon"></span><span class="secur">Pay Securely</span></p>
                </div>
				<div class="not-roobt mt-4 mb-4 text-center">
					<div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
					@error('g-recaptcha-response')
						<div class="text-danger failed">{{ $message }}</div>
					@enderror
				</div>
                <div class="cta">
                    <a href="javascript:void(0);" class="primary-button" onclick="place_order()">Secure Checkout</a>
                </div>
                <div class="paying-bottom-icon">
                    <img src="{{asset('assets/dashboard/htmlv/assets/images/PCI.png')}}" alt="icon">
                    <img src="{{asset('assets/dashboard/htmlv/assets/images/Norton.png')}}" alt="icon">
                </div>
            </div>
        </div>
		 
		
    </div>
	</form>
	
	
	
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@push('scripts')	
<script>
function place_order() {
	
	let card_number = $("#card_number").val().replace(/\D/g, ''); // Remove non-digits
    let ccv = $("#ccv").val().replace(/\D/g, ''); // Remove non-digits
	if(card_number.length < 16 ) {
		toastr.error('Card number must be 16 digits');
		return false;
	}
	if(ccv.length < 3 ) {
		toastr.error('CVV must be at least 3 digits');
		return false;
	}
	$("#place-order-btn").prop('disabled', true);


	

	$("#braintree-payment-submit").submit();
}
function validateCreditCard(input,max_number) {
    let value = input.value.replace(/\D/g, ''); // Remove any non-digit characters
    if (value.length > max_number) {
        value = value.substring(0, max_number); // Ensure the length doesn't exceed 10 digits
    }
    input.value = value; // Set the value back to the input
}
function change_year() {
	
	
	let exp_year = $("#exp_year option:selected").attr("attr");
	let currentYear = new Date().getFullYear();
	let currentMonth = new Date().getMonth() + 1;
	console.log(exp_year);
	console.log(currentYear);
	let monthSelect = $("#exp_month");
	monthSelect.empty(); 
	if (exp_year > currentYear) {
		for (let i = 1; i <= 12; i++) {
            monthSelect.append(
                `<option value="${String(i).padStart(2,'0')}">${String(i).padStart(2,'0')}</option>`
            );
        }
		
	} else {
		for (let i = currentMonth; i <= 12; i++) {
            monthSelect.append(
                `<option value="${String(i).padStart(2,'0')}">${String(i).padStart(2,'0')}</option>`
            );
        }
		
	}
}

change_year();
</script>
<style>
.checkout-section .custom-checkbox_new.mt-2 {
    display: none;
}
</style>

@if(config('constants.trial_days') > 0)
	@include('user.package.free-trial-modal-payment')
@endif
@endpush

	