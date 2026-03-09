@php
    $userDetails = single_user_details();
@endphp

@php
	$dashboard_url = url('/dashboard');
	if($userDetails->user_role == "admin") {
		$dashboard_url = url('/admin/dashboard');
	}
@endphp
<nav class="sidebar sidebar-offcanvas {{ Auth::user()->payment_status == 0 ? 'all_service_lock' : '' }}" id="sidebar">

			
			
	<div class="sidebar_brand_logo">
	
		<a class="navbar-brand brand-logo" href="{{$dashboard_url}}"><img src="{{ asset(env('APP_LOGO_WEB')) }}"  alt="logo"/></a>
		
		
	</div>
	
   <ul class="nav">
   
      <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}">
               <i class="icon-grid menu-icon"></i>
               <span class="menu-title">Dashboard</span>
            </a>
      </li>
	  
	  <li class="nav-item 
		{{ 
			Request::is('consultation-type*') || 
			Request::is('schedule-consultation/*') ||
			Request::is('behavioral-health') || 
			Request::is('my-consultations') ||
			Request::is('my-consultations/*') ||
			Request::is('in-the-moment-care') ||
			Request::is('care-coordination') ||			
			Request::is('consultation-type') ? 'active' : '' }}">
         
		 <a class="nav-link" data-toggle="collapse" href="#form-consultation-1" 
		 aria-expanded="{{ 
				Request::is('consultation-type*') || 
				Request::is('behavioral-health') || 
				Request::is('in-the-moment-care') || 
				Request::is('my-consultations') || 
				Request::is('my-consultations/*') || 
				Request::is('in-the-moment-care') ||
				Request::is('care-coordination') ||
				Request::is('schedule-consultation/*') || 
				Request::is('consultation-type') ? 'true' : 'false' }}" aria-controls="form-consultation-1">
            <i class="fas fa-laptop-medical menu-icon"></i>
            <span class="menu-title"><span>Consultation</span></span>
            <i class="menu-arrow"></i>
         </a>
         <div class="collapse 
			{{ 
			Request::is('consultation-type*') || 
			Request::is('behavioral-health') || 
			Request::is('in-the-moment-care') ||
			Request::is('care-coordination') ||	
			Request::is('my-consultations') || 
			Request::is('my-consultations/*') || 
			Request::is('in-the-moment-care') ||
			Request::is('schedule-consultation/*') ||
			Request::is('consultation-type') ? 'show' : '' }}" id="form-consultation-1">
            <ul class="nav flex-column sub-menu">
			
               <li class="nav-item"><a class="nav-link {{ request('action') == 'urgentcare' ? 'active' : '' }}" href="{{url('consultation-type')}}?action=urgentcare">Urgent Care</a></li>
               <li class="nav-item"><a class="nav-link {{ request('action') == 'primarycare' ? 'active' : '' }}" href="{{url('consultation-type')}}?action=primarycare">Primary Care</a></li>
               <li class="nav-item"><a class="nav-link {{ request('action') == 'psychology' ? 'active' : '' }}" href="{{url('consultation-type')}}?action=psychology">Psychologist</a></li>
               <li class="nav-item"><a class="nav-link {{ request('action') == 'psychiatry' ? 'active' : '' }}" href="{{url('consultation-type')}}?action=psychiatry">Psychiatrist</a></li>
               <li class="nav-item"><a class="nav-link {{ request('action') == 'dermatology' ? 'active' : '' }}" href="{{url('consultation-type')}}?action=dermatology">Dermatology</a></li>
			   
			   <li class="nav-item"><a class="nav-link {{ Request::is('my-consultations') || Request::is('my-consultations/*') ? 'active' : '' }}" href="{{url('my-consultations')}}">My Consultations</a></li>
			   
			   <li class="nav-item"><a class="nav-link {{ Request::is('in-the-moment-care') ? 'active' : '' }}" href="{{ url('in-the-moment-care') }}">Behavioral Health</a></li>
			   
				<?php /*
				<li class="nav-item"><a class="nav-link {{ Request::is('in-the-moment-care') ? 'active' : '' }}" href="{{ url('in-the-moment-care') }}">Crisis Management</a></li>
				*/?>
				
				<li class="nav-item"><a class="nav-link {{ Request::is('care-coordination') ? 'active' : '' }}" href="{{url('care-coordination')}}">Care Coordination</a></li>
               
            </ul>
         </div>
      </li>


	  
	  <li class="nav-item 
		{{ 
			Request::is('message-a-specialist') || 
			 
			Request::is('personal-record') || 
			Request::is('medications') || 
			Request::is('medication-allergies') || 
			Request::is('medical-history') || 
			Request::is('document-manager') || 
			Request::is('lab-report')  ? 'active' : '' 
		}}
		"
		>
         <a class="nav-link" 
			data-toggle="collapse" 
			href="#form-medical-care-1" 
			aria-expanded="{{ 
				Request::is('message-a-specialist') || 
				 
				
				Request::is('personal-record') || 
				Request::is('medication-allergies') || 
				Request::is('document-manager') || 
				Request::is('lab-report') || 
				Request::is('medical-history') || 
				Request::is('medications') ? 'true' : 'false' 
				}}" 
			aria-controls="form-medical-care-1"> 
           
		<i class="fas fa-solid fa-hand-holding-medical menu-icon"></i>
			
            <span class="menu-title"><span>My Medical Care</span></span>
            <i class="menu-arrow"></i>
         </a>
         <div class="collapse 
			{{ 
				Request::is('message-a-specialist') || 
				 
				Request::is('personal-record') || 
				Request::is('medications') || 
				Request::is('medication-allergies') || 
				Request::is('document-manager') || 
				Request::is('medical-history') || 
				Request::is('lab-report') || 
				Request::is('surgical-conditions') ? 'show' : '' }}" id="form-medical-care-1">
            <ul class="nav flex-column sub-menu">
			
				
				
				<li class="nav-item mega-menu">
                    <a class="nav-link " data-toggle="collapse" data-target="#health-Record-menu" aria-expanded="{{ 
						Request::is('personal-record') || 
						Request::is('medications') || 
						Request::is('medication-allergies') || 
						Request::is('document-manager') || 
						Request::is('surgical-conditions') || 
						Request::is('medical-history') 
						? 'true' : 'false' 
					}}">
                                    <span class="menu-title">Health Record</span>
                                     <i class="menu-arrow"></i>                                 
					</a>
                    <div class="collapse
					
					{{ 
						Request::is('personal-record') || 
						Request::is('medications') || 
						Request::is('medication-allergies') || 
						Request::is('document-manager') || 
						Request::is('surgical-conditions') || 
						Request::is('medical-history') 
						? 'show' : '' 
					}}
					
					
					" id="health-Record-menu" style="">
                        <ul class="nav flex-column sub-menu v1">
                            
							<li class="nav-item">
                                <a class="nav-link {{ Request::is('personal-record') ? 'active' : '' }}" href="{{url('personal-record')}}">Personal Health Records</a>
                            </li>
							
							<li class="nav-item">
                                <a class="nav-link {{ Request::is('medications') ? 'active' : '' }}" href="{{url('medications')}}">Medications</a>
                            </li>
							
							<li class="nav-item">
                                <a class="nav-link {{ Request::is('medication-allergies') ? 'active' : '' }}" href="{{url('medication-allergies')}}">Medication Allergies</a>
                           </li>
						   
						    <li class="nav-item">
                                <a class="nav-link {{ Request::is('medical-history') ? 'active' : '' }}" href="{{url('medical-history')}}">Medical Conditions</a>
                            </li>
							
						    <li class="nav-item">
                                <a class="nav-link {{ Request::is('surgical-conditions') ? 'active' : '' }}" href="{{url('surgical-conditions')}}">Surgical Conditions</a>
                            </li>
							
							<li class="nav-item">
                                <a class="nav-link {{ Request::is('document-manager') ? 'active' : '' }}" href="{{url('document-manager')}}">Upload Documents</a>
                            </li>
												
											
                        </ul>
                    </div>
                </li>
															
			   
			   
               <li class="nav-item"><a class="nav-link {{ Request::is('message-a-specialist') ? 'active' : '' }}" href="{{url('message-a-specialist')}}">Message Specialist</a></li>
			   
               
			   
			   
               <li class="nav-item"><a class="nav-link {{ Request::is('lab-report') ? 'active' : '' }}" href="{{url('lab-report')}}">Lab Requests</a></li>
			   
               
			   
               
               
               
            </ul>
         </div>
      </li>
	  
	  
	 
	  
	 

<li class="nav-item {{ Request::is(
               
               'my-safety-plan', 
               'my-mood-feeling', 
               'what-is-mood',  
               'my-mood-feeling-history-graph',
               'my-screening-history-graph',
               'my-journal-written',
               'my-journal-audio',
               'journal',
               'view-journal-log',
               'mental-health-screening',
               'requested-affirmation',
               'cbt-therapy') ? 'active' : '' }}">
   <a class="nav-link" data-toggle="collapse" href="#my-mental-health" aria-expanded="{{ Request::is(
               'behavioral-health', 
               'my-safety-plan', 
               'my-mood-feeling', 
               'what-is-mood',  
               'my-mood-feeling-history-graph',
               'my-screening-history-graph',
               'my-journal-written',
               'my-journal-audio',
               'journal',
               'view-journal-log',
               'mental-health-screening',
               'requested-affirmation',
               'cbt-therapy') ? 'true' : 'false' }}" aria-controls="my-mental-health">
      
	  <i class="fas fa-solid fa-brain menu-icon"></i>
      <span class="menu-title">My Mental Health</span>
      <i class="menu-arrow"></i>
   </a>
   <div class="collapse {{ Request::is(
                
               'my-safety-plan', 
               'my-mood-feeling', 
               'what-is-mood',  
               'my-mood-feeling-history-graph',
               'my-screening-history-graph',
               'journal',
               'view-journal-log',
               'mental-health-screening',
               'my-journal-audio',
               'requested-affirmation',
               'cbt-therapy') ? 'show' : '' }}" id="my-mental-health">
      <ul class="nav flex-column sub-menu">
	  
		
<li class="nav-item"><a class="nav-link {{ Request::is('my-mood-feeling') ? 'active' : '' }}" href="{{ url('my-mood-feeling') }}">My Moods</a></li>
		
		<li class="nav-item mega-menu">
            <a class="nav-link" data-toggle="collapse" href="#my-journal" aria-expanded="{{ Request::is('journal', 'my-journal-audio', 'requested-affirmation','view-journal-log') ? 'true' : 'false' }}">
               <span class="menu-title">My Journal</span>
               <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is('journal', 'my-journal-audio', 'requested-affirmation','view-journal-log') ? 'show' : '' }}" id="my-journal">
               <ul class="nav flex-column sub-menu v1">
                  
				  <li class="nav-item"><a class="nav-link {{ Request::is('journal') || Request::is('view-journal-log') ? 'active' : '' }}" href="{{ route('journal') }}">My Written Journal</a></li>
                  
				  <li class="nav-item"><a class="nav-link {{ Request::is('my-journal-audio') ? 'active' : '' }}" href="{{ route('my-journal-audio') }}">My Audio Journal <span class="cust-audio185 pl-2"><i class="fas fa-volume-up"></i></span></a></li>
                  
				  <li class="nav-item"><a class="nav-link {{ Request::is('requested-affirmation') ? 'active' : '' }}" href="{{ route('requested-affirmation') }}">Requested Affirmation</a></li>
				  
               </ul>
            </div>
        </li>
		 
<li class="nav-item"><a class="nav-link {{ Request::is('my-safety-plan') ? 'active' : '' }}" href="{{ url('my-safety-plan') }}">My Safety Plan</a></li>		
<li class="nav-item"><a class="nav-link {{ Request::is('cbt-therapy') ? 'active' : '' }}" href="{{ url('cbt-therapy') }}">My Thought Analysis</a></li>
<li class="nav-item"><a class="nav-link {{ Request::is('mental-health-screening') ? 'active' : '' }}" href="{{ url('mental-health-screening') }}">Mental Health Screenings</a></li>
<li class="nav-item"><a class="nav-link {{ Request::is('my-screening-history-graph') ? 'active' : '' }}" href="{{ url('my-screening-history-graph') }}"> My Screening History</a></li>
<li class="nav-item"><a class="nav-link {{ Request::is('my-mood-feeling-history-graph') ? 'active' : '' }}" href="{{ url('my-mood-feeling-history-graph') }}"> Personal Analytics</a></li>
      
	 
      </ul>
   </div>
</li>

<li class="nav-item {{ Request::is('pets*') || Request::is('pet-consultations*') ? 'active' : '' }}">
    <a class="nav-link {{ Request::is('pets*') || Request::is('pet-consultations*') ? 'show' : '' }}" 
       data-toggle="collapse" 
       href="#form-elements-1" 
       aria-expanded="{{ Request::is('pets*') || Request::is('pet-consultations*') ? 'true' : 'false' }}" 
       aria-controls="form-elements-1">
       
        <i class="fas fa-solid fa-paw menu-icon"></i>
        <span class="menu-title"><span>My Pet Health</span></span>
        <i class="menu-arrow"></i>
    </a>

    <div class="collapse {{ Request::is('pets*') || Request::is('pet-consultations*') ? 'show' : '' }}" id="form-elements-1">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link pets-menu {{ Request::is('pets') ? 'active' : '' }}" href="{{ url('pets') }}">My Pets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pet-consultations') || Request::is('pet-consultations/*') ? 'active' : '' }}" href="{{ url('pet-consultations') }}">My Pet History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pets#pets-listing-sec') ? 'active' : '' }}" href="{{ url('pets#pets-listing-sec') }}">Talk to a Veterinarian</a>
            </li>
        </ul>
    </div>
</li>

<?php /*
@php
	$plan_info = getMyCurrentPlanRecords(Auth::user()->id);
    $pay_amount_a = ($plan_info && in_array($plan_info->plan_id, Config::get('constants.family_plan')))? 15 : 10;
	$pay_amount_b = ($plan_info && in_array($plan_info->plan_id, Config::get('constants.family_plan')))? 20 : 15;
@endphp
*/?>

	  
      <li class="nav-item {{ Request::is('prescriptions*') || Request::is('prescriptions') ? 'active' : '' }}">
         <a class="nav-link {{ Request::is('prescriptions*') || Request::is('prescriptions') ? 'show' : '' }}" data-toggle="collapse" href="#form-prescriptions-1" aria-expanded="{{ Request::is('prescriptions*') || Request::is('prescriptions') ? 'true' : 'false' }}" aria-controls="form-prescriptions-1">
          
			<i class="fas fa-solid fa-prescription menu-icon"></i>
            <span class="menu-title"><span>Prescriptions</span></span>
            <i class="menu-arrow"></i>
         </a>
         <div class="collapse {{ Request::is('prescriptions-a-type*') || Request::is('prescriptions-b-type') || Request::is('prescriptions-c-type') ? 'show' : '' }}" id="form-prescriptions-1">
            <ul class="nav flex-column sub-menu">
			
               <li class="nav-item"><a class="nav-link {{ Request::is('prescriptions-a-type') ? 'active' : '' }}" href="{{url('prescriptions-a-type')}}">Silver Prescription Plan</a></li>
			   
               <li class="nav-item"><a class="nav-link {{ Request::is('prescriptions-b-type') ? 'active' : '' }}" href="{{url('prescriptions-b-type')}}">Gold Prescription Plan</a></li>
			   
               <li class="nav-item"><a class="nav-link {{ Request::is('prescriptions-c-type') ? 'active' : '' }}" href="{{url('prescriptions-c-type')}}">Platinum Prescription Plan</a></li>
			   
               <li class="nav-item"><a class="nav-link" href="javascript:void(0)"  data-toggle="modal" data-target="#pre-search-dash-model" onclick="prescriptionsearchmodal()">Prescription Search</a></li>
         
            </ul>
         </div>
      </li>
	  
      

      <li class="nav-item">
         <a class="nav-link" href="{{ url('my-account') }}">
            <i class="far fa-user menu-icon"></i>
            <span class="menu-title">My Account</span>
         </a>
      </li>
   </ul>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash === "#pets-listing-sec") {
        const link = document.querySelector('a[href$="#pets-listing-sec"]');
        if (link) {
			$(".pets-menu").removeClass('active');
            link.classList.add("active");
            const parentCollapse = document.querySelector('#form-elements-1');
            if (parentCollapse && !parentCollapse.classList.contains('show')) {
                parentCollapse.classList.add('show');
            }
        }
    }
});
</script>
