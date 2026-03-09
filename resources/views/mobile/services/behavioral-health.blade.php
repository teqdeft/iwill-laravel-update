@extends("mobile.layouts.dashboard")
@section("content")

<section class="msg-special-header">
        <div class="cust-container-md">
            <div class="rec-row">

                <div class="back">
                    <a href="{{ route('mobile-dashboard') }}" class="back-btn">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.875 16.0417L7.33334 10.5L12.875 4.95834" stroke="#222A3D"
                                stroke-width="1.58333" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>

                <div class="top-title">
                    <h2 class="title">Talk to a Therapist</h2>
                </div>

            </div>
        </div>
</section>


<section class="care-cordin">
        <div class="cust-container-md">
            <div class="cordin">
			
			
			
			
			<div class="content">
                    <h2 class="top-title therap">
                        Behavioral Health Virtual Counseling PLUS
                    </h2>
                    <div class="detail-v1">
                        <p>Whether you have questions about handling stress at work or at home; parenting and/or child care; or managing money or health care, you can turn to your behavioral health virtual counseling team for a confidential service you can trust. Short-term therapy and behavioral health offers for your mental and emotional well-being.</p>
                    </div>

                    <div class="image therap">
                        <img src="{{ asset('assets/dashboard/assets/images/therapist.png') }}" alt="image" />
                    </div>

                    <div class="repeat-content">

                        <div class="title">
                            <p>When life gets complicated, let us help! Speak with a professional counselor via phone or video.</p>
                        </div>
	<?php /*
                        <div class="detail-v1">
                            <p>Mental health and well-being support program. Speak with a professional counselor via
                                phone or video</p>
                        </div>
					
                        <div class="contact-detail">
                            <div class="icon">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_155_1044)">
                                        <path d="M6 3V6H9" stroke="#8462A8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6 11C8.7615 11 11 8.7615 11 6C11 3.2385 8.7615 1 6 1C3.2385 1 1 3.2385 1 6C1 8.7615 3.2385 11 6 11Z"
                                            stroke="#8462A8" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_155_1044">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="value">
                                <p>Anytime</p>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.5 6.5C12.5 5.30653 12.0259 4.16193 11.182 3.31802C10.3381 2.47411 9.19347 2 8 2C6.80653 2 5.66193 2.47411 4.81802 3.31802C3.97411 4.16193 3.5 5.30653 3.5 6.5C3.5 8.346 4.977 10.752 8 13.634C11.023 10.752 12.5 8.346 12.5 6.5ZM8 15C4.333 11.667 2.5 8.833 2.5 6.5C2.5 5.04131 3.07946 3.64236 4.11091 2.61091C5.14236 1.57946 6.54131 1 8 1C9.45869 1 10.8576 1.57946 11.8891 2.61091C12.9205 3.64236 13.5 5.04131 13.5 6.5C13.5 8.833 11.667 11.667 8 15Z"
                                        fill="#8462A8" />
                                    <path
                                        d="M8 8C8.39782 8 8.77936 7.84196 9.06066 7.56066C9.34196 7.27936 9.5 6.89782 9.5 6.5C9.5 6.10218 9.34196 5.72064 9.06066 5.43934C8.77936 5.15804 8.39782 5 8 5C7.60218 5 7.22064 5.15804 6.93934 5.43934C6.65804 5.72064 6.5 6.10218 6.5 6.5C6.5 6.89782 6.65804 7.27936 6.93934 7.56066C7.22064 7.84196 7.60218 8 8 8ZM8 9C7.33696 9 6.70107 8.73661 6.23223 8.26777C5.76339 7.79893 5.5 7.16304 5.5 6.5C5.5 5.83696 5.76339 5.20107 6.23223 4.73223C6.70107 4.26339 7.33696 4 8 4C8.66304 4 9.29893 4.26339 9.76777 4.73223C10.2366 5.20107 10.5 5.83696 10.5 6.5C10.5 7.16304 10.2366 7.79893 9.76777 8.26777C9.29893 8.73661 8.66304 9 8 9Z"
                                        fill="#8462A8" />
                                </svg>
                            </div>
                            <div class="value">
                                <p>Anywhere</p>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="icon">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.939 1.7561L5.32955 1.9397C4.78689 2.10335 4.30227 2.41861 3.93274 2.84838C3.5632 3.27815 3.32413 3.80454 3.24365 4.3656C2.9912 6.1234 3.5556 8.1787 4.91645 10.5357C6.2739 12.8868 7.7682 14.4015 9.41295 15.0645C9.94142 15.2775 10.5199 15.3343 11.0797 15.2281C11.6395 15.1218 12.157 14.8571 12.5707 14.4653L13.0314 14.0284C13.3306 13.7453 13.5167 13.3632 13.5554 12.9531C13.594 12.543 13.4824 12.1328 13.2413 11.7988L12.0887 10.2008C11.9329 9.98511 11.7135 9.82355 11.4612 9.7388C11.2089 9.65404 10.9365 9.65036 10.682 9.72825L8.93865 10.2612L8.8936 10.2697C8.7015 10.2977 8.2578 9.8821 7.7053 8.925C7.1273 7.9237 7.0083 7.33805 7.16725 7.18675L8.0538 6.3597C8.37767 6.05728 8.5989 5.66117 8.68654 5.2268C8.77418 4.79244 8.72383 4.34154 8.54255 3.9372L7.97985 2.68685C7.81065 2.31059 7.51039 2.0087 7.13506 1.83745C6.75972 1.66621 6.33408 1.63729 5.939 1.7561ZM7.20635 3.03535L7.76735 4.2857C7.87622 4.52822 7.90656 4.7987 7.85414 5.05932C7.80171 5.31993 7.66913 5.55764 7.47495 5.7392L6.58585 6.5671C6.01635 7.106 6.20505 8.0257 6.97005 9.35C7.68915 10.5961 8.34535 11.2115 9.05085 11.1044L9.15625 11.0823L10.931 10.5408C11.0159 10.5148 11.1067 10.5159 11.1909 10.5441C11.275 10.5723 11.3483 10.6262 11.4002 10.6981L12.5528 12.2961C12.6735 12.4631 12.7295 12.6682 12.7102 12.8734C12.691 13.0785 12.5979 13.2697 12.4483 13.4113L11.9867 13.8482C11.6912 14.1279 11.3217 14.3168 10.9219 14.3926C10.5222 14.4684 10.1091 14.4278 9.7317 14.2757C8.2884 13.6943 6.92415 12.3114 5.6534 10.1107C4.37925 7.905 3.8633 6.02905 4.08515 4.4863C4.14258 4.08546 4.31333 3.70938 4.57732 3.40233C4.8413 3.09528 5.18751 2.87005 5.5752 2.75315L6.18465 2.56955C6.38224 2.51018 6.59468 2.52469 6.78235 2.6104C6.97003 2.6961 7.12012 2.84714 7.20465 3.03535"
                                        fill="#8462A8" />
                                </svg>
                            </div>
                            <div class="value">
                                <p><a href="tel:844200897">(24/7/365)</a></p>
                            </div>
                        </div>
						*/ ?>
                    </div>

                    <div class="repeat-content">
						
						<?php /*
                        <div class="title">
                            <p>Access line</p>
                        </div>
                        <div class="repeat-detail">
                            <p>To accesss your dedicated counseling service please call:</p>
                        </div>
						


                        <div class="contact-detail">
                            <div class="icon">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.939 1.7561L5.32955 1.9397C4.78689 2.10335 4.30227 2.41861 3.93274 2.84838C3.5632 3.27815 3.32413 3.80454 3.24365 4.3656C2.9912 6.1234 3.5556 8.1787 4.91645 10.5357C6.2739 12.8868 7.7682 14.4015 9.41295 15.0645C9.94142 15.2775 10.5199 15.3343 11.0797 15.2281C11.6395 15.1218 12.157 14.8571 12.5707 14.4653L13.0314 14.0284C13.3306 13.7453 13.5167 13.3632 13.5554 12.9531C13.594 12.543 13.4824 12.1328 13.2413 11.7988L12.0887 10.2008C11.9329 9.98511 11.7135 9.82355 11.4612 9.7388C11.2089 9.65404 10.9365 9.65036 10.682 9.72825L8.93865 10.2612L8.8936 10.2697C8.7015 10.2977 8.2578 9.8821 7.7053 8.925C7.1273 7.9237 7.0083 7.33805 7.16725 7.18675L8.0538 6.3597C8.37767 6.05728 8.5989 5.66117 8.68654 5.2268C8.77418 4.79244 8.72383 4.34154 8.54255 3.9372L7.97985 2.68685C7.81065 2.31059 7.51039 2.0087 7.13506 1.83745C6.75972 1.66621 6.33408 1.63729 5.939 1.7561ZM7.20635 3.03535L7.76735 4.2857C7.87622 4.52822 7.90656 4.7987 7.85414 5.05932C7.80171 5.31993 7.66913 5.55764 7.47495 5.7392L6.58585 6.5671C6.01635 7.106 6.20505 8.0257 6.97005 9.35C7.68915 10.5961 8.34535 11.2115 9.05085 11.1044L9.15625 11.0823L10.931 10.5408C11.0159 10.5148 11.1067 10.5159 11.1909 10.5441C11.275 10.5723 11.3483 10.6262 11.4002 10.6981L12.5528 12.2961C12.6735 12.4631 12.7295 12.6682 12.7102 12.8734C12.691 13.0785 12.5979 13.2697 12.4483 13.4113L11.9867 13.8482C11.6912 14.1279 11.3217 14.3168 10.9219 14.3926C10.5222 14.4684 10.1091 14.4278 9.7317 14.2757C8.2884 13.6943 6.92415 12.3114 5.6534 10.1107C4.37925 7.905 3.8633 6.02905 4.08515 4.4863C4.14258 4.08546 4.31333 3.70938 4.57732 3.40233C4.8413 3.09528 5.18751 2.87005 5.5752 2.75315L6.18465 2.56955C6.38224 2.51018 6.59468 2.52469 6.78235 2.6104C6.97003 2.6961 7.12012 2.84714 7.20465 3.03535"
                                        fill="#8462A8" />
                                </svg>
                            </div>
                            <div class="value">
                                <p><a href="tel:844200897">844-200-8975</a></p>
                            </div>
                        </div>
						*/ ?>
                    </div>
					
					<?php /*	
                    <div class="repeat-content">
                        <div class="title">
                            <p>Clinical services.</p>
                        </div>
                        <div class="repeat-detail">
                            <p>Behavioral Health Virtual Counseling Clinical, which gives you immediate access to
                                thousands of Masters – level professionals. Members are provided up to 5 counseling
                                visits per issue, which can be on the phone, via video, or face to face. Availability in
                                your area may vary due to COVID.</p>
                        </div>
                    </div>
					*/ ?>

                </div>
				
				
				
			
				<section class="support-section behavioral-health-web">
        <div class="container">
           
            <div class="row g-4">
                <!-- Telus -->
                <div class="col-lg-6">
                    <div class="card support-card p-4">
					
						<div class="support_head">
							<span class="badge bg-primary badge-title mb-3">Clinically-Determined Care</span>
							<a href="tel:8334266476">
							<span class="phone-icon">
							<?php if(ismobile()) {?>
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.82 10.1733L11.1267 9.98C10.9276 9.95662 10.7258 9.97866 10.5364 10.0445C10.347 10.1103 10.175 10.2182 10.0334 10.36L8.80669 11.5867C6.91429 10.624 5.37607 9.08574 4.41336 7.19334L5.64669 5.96C5.93336 5.67334 6.07336 5.27334 6.02669 4.86667L5.83336 3.18667C5.7957 2.8614 5.63967 2.56135 5.395 2.34373C5.15033 2.12611 4.83414 2.00613 4.50669 2.00667H3.35336C2.60003 2.00667 1.97336 2.63334 2.02003 3.38667C2.37336 9.08 6.92669 13.6267 12.6134 13.98C13.3667 14.0267 13.9934 13.4 13.9934 12.6467V11.4933C14 10.82 13.4934 10.2533 12.82 10.1733Z" fill="#8462A8"></path>
							</svg>
							<?php } else { ?>
							<i class="fas fa-phone-alt"></i>
							<?php } ?>
							</span>
						833-426-6476</a>
						</div>
                        
                        <div class="provider">
                            <h4>Providers</h4>
                            <p>Master’s Level Therapists</p>
                        </div>
						
						<div class="when_use type">
                            <h5 class="mt-4">Appointment Type:</h5>
                            <p><span>Phone</span>, <span>Video</span></p>
                        </div>
						
                        <div class="when_use">
                            <h5 class="mt-4">When to Use</h5>
							<?php /*
						   <p>Short-Term Therapy, Clinically Determined Sessions 
                            </p>
							*/ ?>
                        </div>
						
						
                        <ul class="list-unstyled">
						
                           <li><span class="check_circle"><i class="fas fa-check-circle"></i></span>When you would perfer flexible session limits.</li>
							
							<?php /*
                            <li><span class="check_circle"><i class="fas fa-check-circle"></i></span>When you need Clinically Determined Sessions – Together with your therapist, the number of sessions needed is determined by your presenting problem.</li>
							
                            <li><span class="check_circle"><i class="fas fa-check-circle"></i></span>Every New Issue starts a new Short-Term Therapy Cycle.</li>
							*/ ?>
								
								
                        </ul>
                    </div>
                </div>
                <!-- Lyric -->
                <div class="col-lg-6">
                    <div class="card support-card p-4">
						<div class="support_head">
							<span class="badge bg-success badge-title mb-3">Pre-Determined Session Limits</span>
							<a href="tel:8442008975"><span class="phone-icon">
							
							<?php if(ismobile()) {?>
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.82 10.1733L11.1267 9.98C10.9276 9.95662 10.7258 9.97866 10.5364 10.0445C10.347 10.1103 10.175 10.2182 10.0334 10.36L8.80669 11.5867C6.91429 10.624 5.37607 9.08574 4.41336 7.19334L5.64669 5.96C5.93336 5.67334 6.07336 5.27334 6.02669 4.86667L5.83336 3.18667C5.7957 2.8614 5.63967 2.56135 5.395 2.34373C5.15033 2.12611 4.83414 2.00613 4.50669 2.00667H3.35336C2.60003 2.00667 1.97336 2.63334 2.02003 3.38667C2.37336 9.08 6.92669 13.6267 12.6134 13.98C13.3667 14.0267 13.9934 13.4 13.9934 12.6467V11.4933C14 10.82 13.4934 10.2533 12.82 10.1733Z" fill="#8462A8"></path>
							</svg>
							<?php } else { ?>
							<i class="fas fa-phone-alt"></i>
							<?php } ?>
							
							</span>
						844-200-8975</a>
						</div>
                        
                        <div class="provider">
                            <h4>Providers</h4>
                            <p>Master’s Level Therapists Psychologists</p>
                        </div>
						
						<div class="when_use type">
                            <h5 class="mt-4">Appointment Type:</h5>
                            <p><span>Phone</span>, <span>Video</span></p>
                        </div>
						
                        <div class="when_use">
                            <h5 class="mt-4">When to Use</h5>
                            <p></p>
                        </div>
						
						
						
                        <ul class="list-unstyled">
						
							
							
                            <li><span class="check_circle"><i class="fas fa-check-circle"></i></span>When you would prefer highly structured sessions.</li>
							<?php /*
                            <li><span class="check_circle"><i class="fas fa-check-circle"></i></span>When you would like to possibly meet with a psychologist</li>
							
                            <li><span class="check_circle"><i class="fas fa-check-circle"></i></span>Every New Issue starts a new Short-Term Therapy Cycle</li>
							*/ ?>
                            
							
								
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

                
				
				
            </div>
			
			
			

            <div class="safety-plan-detail therap">

                <div class="safety-plan-card open-modal life-retire">
                    <div class="top">
                        <div class="icon">
                            <img src="{{asset('assets/dashboard/assets/images/life-retire.svg')}}" alt="icon">
                        </div>
                        <div class="title">
                            <p>Life</p>
                        </div>
                    </div>
                    <div class="life-row">
                        <ul>
                            <li>Retirement</li>
                            <li>Midlife</li>
                            <li>Student Life</li>
                            <li>Legal</li>
                            <li>Relationships</li>
                            <li>Disabilities</li>
                            <li>Crisis</li>
                            <li>Personal Issues</li>
                        </ul>
                    </div>
                </div>

                <div class="safety-plan-card open-modal life-retire">
                    <div class="top">
                        <div class="icon">
                            <img src="{{ asset('assets/dashboard/assets/images/reasons-to-svg.svg') }}" alt="icon">
                        </div>
                        <div class="title">
                            <p>Family</p>
                        </div>
                    </div>
                    <div class="life-row">
                        <ul>
                            <li>Parenting</li>
                            <li>Couples</li>
                            <li>Separation/Divorce</li>
                            <li>Older Relatives</li>
                            <li>Adoption</li>
                            <li>Death/Loss</li>
                            <li>Child Care</li>
                            <li>Education</li>
                        </ul>
                    </div>
                </div>

                <div class="safety-plan-card open-modal life-retire">
                    <div class="top">
                        <div class="icon">
                            <img src="{{ asset('assets/dashboard/assets/images/find-urgent-svg.svg') }}" alt="icon">
                        </div>
                        <div class="title">
                            <p>Health.</p>
                        </div>
                    </div>
                    <div class="life-row">
                        <ul>
                            <li>Mental Health</li>
                            <li>Addictions</li>
                            <li>Fitness</li>
                            <li>Managing Stress</li>
                            <li>Nutrition</li>
                            <li>Sleep</li>
                            <li>Smoking Cessation</li>
                            <li>Alternative Health</li>
                        </ul>
                    </div>
                </div>

                <div class="safety-plan-card open-modal life-retire">
                    <div class="top">
                        <div class="icon">
                            <img src="{{ asset('assets/dashboard/assets/images/warning-sign-svg.svg') }}" alt="icon">
                        </div>
                        <div class="title">
                            <p>Work.</p>
                        </div>
                    </div>
                    <div class="life-row">
                        <ul>
                            <li>Time Management</li>
                            <li>Career Development</li>
                            <li>Work Relationships</li>
                            <li>Work Stress</li>
                            <li>Managing People</li>
                            <li>Shift Work</li>
                            <li>Coping with Change</li>
                            <li>Communication</li>
                        </ul>
                    </div>
                </div>

                <div class="safety-plan-card open-modal life-retire">
                    <div class="top">
                        <div class="icon">
                            <img src="{{ asset('assets/dashboard/assets/images/dollar-outline-icon.svg') }}" alt="icon">
                        </div>
                        <div class="title">
                            <p>Money.</p>
                        </div>
                    </div>
                    <div class="life-row">
                        <ul>
                            <li>Saving</li>
                            <li>Investing</li>
                            <li>Budgeting</li>
                            <li>Managing Debt</li>
                            <li>Home Buying</li>
                            <li>Renting</li>
                            <li>Estate Planning</li>
                            <li>Bankruptcy</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="cordin">

                <div class="content">

                    <div class="repeat-content">
                        <div class="title">
                            <p>Clinical services</p>
                        </div>
                        <div class="repeat-detail">
                            <p>If you or someone you know has been a victim of sexual abuse, text "STRENGTH" to the crisis Text Line at 741-741 to be connected to a certified crisis counselor.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

@include('mobile.consultation.talk-therapist-popup')
@include('mobile.includes.foooter-tab')
@endsection