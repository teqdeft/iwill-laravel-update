<section class="msg-special-header">
        <div class="cust-container-md">
            <div class="rec-row">
                <div class="back">
                    <a href="{{url('mobile-dashboard')}}" class="back-btn">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.875 16.0417L7.33334 10.5L12.875 4.95834" stroke="#222A3D"
                                stroke-width="1.58333" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
                <div class="top-title">
                    <h2 class="title">Welcome to iWILL ‘til i’mWELL</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="prescription-main">

        <div class="main-title">
            <!-- <div class="title">
                <p>Welcome to iWILL ‘til i’mWELL</p>
            </div> -->
            <div class="text">
                <p>Discount Prescription Drug Program</p>
            </div>
        </div>

        <div class="detail-main">

            <div class="main-row">
                <div class="left">
                    <div class="min-left-title">
                        <p>Acute Medication Subscription Program</p>
                    </div>
                    <div class="detail-text">
                        <p>Consider us your Pharmacy Savings Advocate.</p>
                        <p>As a subscriber to <b>iWILL ‘til i’mWELL,</b> <span>you won’t have to worry about the
                                expensive cost of 37 commonly prescribed medications.</span></p>
                        <p><b>iWILL ‘til i’mWELL</b> has created an Acute Medication Subscription Program that provides
                            37 drugs at no charge just for you, plus great discounts on all other medications.</p>
                        <p>Our live Customer Care team is also here to help you find the lowest prices on medications
                            available.</p>
                    </div>
                </div>
                <div class="right">
                    <div class="main-image">
                        <img src="{{ asset('assets/dashboard/assets/images/prescriptions-b.jpg')}}"
                            alt="image" />
                    </div>
                    <div class="common">
                        <p><span>37</span> Common Medications</p>
                    </div>
					
				<?php 
				$plan_info = getMyCurrentPlanRecords(Auth::user()->id);
				?>
				<?php /*
				@if($plan_info && in_array($plan_info->plan_id, Config::get('constants.family_plan')))
					<div class="price"><p>Just <span>$20!</span></p></div>
				@else 
				@endif
			*/ ?>
					<div class="price"><p>Just <span>${{$pay_amount}}!</span></p></div>
				
				

                </div>
            </div>

			<div class="paynow-button">
				<button onclick="showPaymentScreen('payment-screen')" type="button" class="btn primary-button" data-toggle="modal" data-target="#prescriptions-modal">Pay Now</button>
			</div>
			
            <div class="program-row">
                <div class="program-title">
                    <p>Our Program Covers:</p>
                </div>
                <div class="program-list">
                    <ul>
                        <li>Antibiotics.</li>
                        <li>Bronchitis/Asthma.</li>
                        <li>Cough.</li>
                        <li>Ear Infections.</li>
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
                        <li>Azithromycin (Z-Pak) .</li>
                        <li>Ciprofloxacin.</li>
                        <li>Eye Infection/PinkEye.</li>
                        <li>Fever.</li>
                        <li>Headache/Migraine .</li>
                        <li>Pain Management .</li>
                        <li>Hydrocortisone .</li>
                        <li>Meclizine .</li>
                        <li>Naproxen.</li>
                        <li>Poison Ivy .</li>
                        <li>Sore Throat/Strep .</li>
                        <li>Prednisone.</li>
                        <li>Tessalon.</li>
                        <li>and More!.</li>
                    </ul>
                </div>
            </div>

            <div class="easy-to-use">
                <div class="easy-title">
                    <p>The Program is Easy to Use:</p>
                </div>
                <div class="easy-detail">
                    <p>You will receive an electronic membership card that can be presented at any retail pharmacy (over
                        70,000 in network) and, if on the formulary, you pay nothing. If it is not on the $0.00
                        formulary, your out-of-pocket cost will be based on a deeply discounted price.</p>

                    <p>Present your Rx Card to the pharmacy of your choice. Your Rx Card will display your BIN, Group
                        Number and PCN to present to the pharmacist. You will pay nothing at the pharmacy.</p>
                </div>
            
			
			<div class="add_pdf_main">
					<div class="download_pdf">
						<a class="btn primary-button" download href="{{ asset('assets/pdf/prescriptions/silver-prescriptions.pdf') }}" >download PDF Now 
							<i class="fas fa-cloud-download-alt"></i>
						</a>
					</div>
			</div>
			
			</div>

        </div>


    </section>