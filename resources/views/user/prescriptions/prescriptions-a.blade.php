<div class="main-title">
            <div class="title">
                <p>Welcome to iWILL ‘til i’mWELL</p>
            </div>
			
            <div class="text">
                <p>Easiest Way to Save on Your Medications</p>
            </div>
			
        </div>

@php
$pay_amount_prescriptions = $pay_amount;
if($plan_info && in_array($plan_info->plan_id, Config::get('constants.family_plan'))) {
		
}
@endphp
			

        <div class="detail-main">

            <div class="main-row">
                <div class="left">
					
					
                    <div class="detail-text">
                        <p>As a subscriber to <b>iWILL ‘til i’mWELL</b>, <span>you won’t have to worry about the expensive cost of 200 common medications.</span></p>
						
                        <p>That’s because <b>iWILL ‘til i’mWELL</b> has created a <span>medication subscription program that provides 200 meds at just $<?php echo $pay_amount_prescriptions?>.00</span>, plus great discounts on all other medications.</p>
                        <p>Consider us your pharmacy savings advocate. Our live Customer Care team is here to help you find the lowest prices on medications available.</p>
						
						<?php if(!$prescription_a) { ?>
						<div class="paynow-button">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prescriptions-modal">Pay Now</button>
						</div>
						<?php } ?>
                    </div>
                </div>
                <div class="right">
                    <div class="main-image">
                        <img src="{{ asset('assets/dashboard/assets/images/prescriptions-a-new-v1.png')}}" alt="image" />
                    </div>
					
                    <div class="common">
                        <p><span>200</span> Common Medications</p>
                    </div>
					
				
				<div class="price"><p>Just <span>${{$pay_amount}}!</span></p></div>	
                    
					
                </div>
            </div>

            <div class="program-row">
                <div class="program-title">
                    <p>Our Program Covers:</p>
                </div>
                <div class="program-list">
                    <ul>
                        <li>Allergy.</li>
                        <li>Arthritis/Pain.</li>
                        <li>Asthma.</li>
                        <li>Blood Pressure/Heart.</li>
                        <li>Cholesterol.</li>
                        <li>Cold/Cough.</li>
                        <li>Diabetes.</li>
                        <li>Men’s/Women’s Health.</li>
                        <li>Mental Health.</li>
                        <li>Pink Eye.</li>
                        <li>Poison Ivy and More!.</li>
                    </ul>
                </div>
            </div>
        
            <div class="program-row">
                <div class="program-title">
                    <p>Drugs Like:</p>
                </div>
                <div class="program-list">
                    <ul>
                        <li>Amoxicillin.</li>
                        <li>Azithromycin (Z–pak).</li>
                        <li>Cialis (generic).</li>
                        <li>Glipizide.</li>
                        <li>Omeprazole.</li>
                        <li>Sprintec.</li>
                        <li>Viagra (generic).</li>
                        <li>Warfarin.</li>
                        <li>And much more!.</li>
                    </ul>
                </div>
            </div>

            <div class="easy-to-use">
                <div class="easy-title">
                    <p>The Program is Easy to Use:</p>
                </div>
                <div class="easy-detail">
                    <p>You will receive an electronic member card that can be presented at any retail pharmacy (over 70,000 in network) and if on the formulary, you only pay $5.00. If it is not on the $5.00 formulary, your out-of-pocket cost will be based on a deeply discounted price.</p>

                    <p>All future chronic or recurring medications will be mailed directly to you for just ${{$pay_amount}} (see subscription details). Plus, get discounts on diabetic supplies, pet meds, and other prescription medication saving options.</p>
                </div>
            </div>
			
			<div class="add_pdf_main">
				<div class="download_pdf">
					<a class="btn btn-primary" download href="{{ asset('assets/pdf/prescriptions/gold-prescriptions.pdf') }}" >Download PDF Now 
						<i class="fas fa-cloud-download-alt"></i>
					</a>
				</div>
			</div>

        </div>