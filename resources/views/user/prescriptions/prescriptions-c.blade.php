<div class="main-title">
    <div class="title"><p>Welcome to iWILL ‘til i’mWELL</p></div>
    <div class="text"><p>Affordable Prescription Assistance Program</p></div>		
</div>
<div class="detail-main">

            <div class="main-row">
                <div class="left">
					<?php /*
                    <div class="min-left-title">
                        <p>WELCOME TO BESTCHOICE RX</p>
                    </div>
					*/ ?>
                    <div class="detail-text">
				
						<p>iWILL ‘til i’mWELL has partnered with BestChoiceRx to bring you the best prescription prices possible. As a member of iWILL ‘til i’mWELL, there is no need to worry about the high cost of over 1,000 commonly prescribed medications. That's because as a member of iWILL 'til i'm WELL, you get to take advantage of BestChoiceRx's $0 ENHANCED MEDICATION PROGRAM that includes 37 ACUTE and 95 ACA (Affordable Care Act) medications, plus over 1,000 routinely prescribed CHRONIC drugs at no cost to you.</p>
						
						<p>You can view all medications included in this program by logging into <b>BestChoiceRx.com.</b> Feel free to print and take this formulary to your physician so they can prescribe a listed medication and help you stay within your budget.</p>
					
						
						<?php if(!$prescription_c) { ?>
							<div class="paynow-button">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prescriptions-modal">Pay Now 
								</button>
							</div>
						<?php } ?>
                    </div>
                </div>
                <div class="right">
                    <div class="main-image">
                        <img src="{{ asset('assets/dashboard/assets/images/prescriptions-c.png')}}" alt="image" />
                    </div>
					
                    <div class="common prescrip_c">
                        <p><span>1000</span> Commonly Prescribed Medications</p>
                    </div>
					
				<?php 
				$plan_info = getMyCurrentPlanRecords(Auth::user()->id);
				?>
							
				<div class="price"><p>Just <span>${{$pay_amount}}!</span></p></div>
				
                </div>
            </div>

			<?php /*
            <div class="program-row mt-5">
                <div class="program-title">
                    <p>MEDICATIONS FOR</p>
                </div>
                <div class="program-list">
                    <ul>
                       
						<li>Allergy</li>
						<li>Arthritis/Pain</li>
						<li>Blood Pressure/Heart</li>
						<li>Cholesterol</li>
						<li>Cold/Cough</li>	
						<li>Diabetes</li>
						<li>Men/Women’s Health</li>
						<li>Mental Health</li>
						<li>Pink Eye</li>
						<li>and Much More!</li>
								
                    </ul>
                </div>
            </div>
			*/ ?>
			
			
            <div class="program-row mt-4">
                <div class="program-title">
                    <p>THIS PROGRAM IS EASY TO USE</p>
                </div>
            </div>
        
           

            <div class="easy-to-use">
                <div class="easy-detail">
				
					<p>You will receive an email from iWILL ‘til i’mWELL with your Member/Group ID so that you can set up your BestChoiceRx account. All further instructions can be found below. Just click on the "download PDF Now" button below.</p>
					
				<?php /*
                    <p>You will receive an email with a link to your personalized Rx Card and instructions on how to set up 
					your account. Your electronic Rx Card can also be found by logging onto our website. Just click on 
					your username in the upper-right and then click ‘Membership Card.’ This card may also be used for 
					everyone in your family/household.</p>

					<p>The Rx Card will display your BIN, PCN and Group Number to present to the pharmacist. You can 
					present this card to virtually any retail pharmacy (over 70,000 in network) and if on the formulary, 
					you’ll pay the listed co-pay. If your medication is not on the formulary, your out-of-pocket cost is 
					based on a deeply discounted price.</p>

					<p>We also offer a Prescription Assistance Program (PAP) for many medications over $200. If you are 
					on one of these costly drugs, visit BestChoiceRx.com and chat with our Customer Care team to get 
					the information you need. You could save hundreds, maybe thousands a year.</p> 
					
					<p>You can always expect the Best Savings and the Best Value with BestChoice Rx.</p> 
					*/ ?>
                </div>
            </div>
			
			<div class="add_pdf_main">
				<div class="download_pdf">
					<a class="btn btn-primary" download href="{{ asset('assets/pdf/prescriptions/platinum-prescriptions.pdf') }}" >download PDF Now 
						<i class="fas fa-cloud-download-alt"></i>
					</a>
				</div>
			</div>

        </div>