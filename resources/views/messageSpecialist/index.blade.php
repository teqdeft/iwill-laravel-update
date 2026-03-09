@extends('layouts.v1.dashboard')
@section('content')
	<div class="content-wrapper">
	
		<div class="new-dashboard">

        <div class="dash-new message-sp-main">
            <div class="dash-row">
                <div class="dash-left">

                    <div class="dash-section message-specialist">
                        <div class="dashboard-title">
                            <div class="main-title">
                                <p>Message a Specialist</p>
                            </div>
                            <div class="title">
                                <p>What type of Specialist would you like to message?</p>
                            </div>
                        </div>
                        <div class="dash-row-v1">
						@if( $data )
                            @foreach ($data as $key => $value )
								<a href="javascript:void(0)" specialistId="{{ $value['idNo'] }}" data-toggle="modal" data-target="#message-smodal">
									<div class="dash-menu-card">
										<div class="icon">
											<img src="{{ $value['img'] }}">
										</div>
										<div class="title">
											<p>{{ $value['title'] }}</p>
										</div>
									</div>
								</a>
							@endforeach
						@endif
					
					
                        </div>
                    </div>

                </div>
                
                <div class="dash-right">
                    <div class="dash-filter">
                        <div class="tabs message-specia-tab"> 
                            <div class="tab active getMessageHeaders" passUrl="getMessageHeaders" pageId="1" data-tab="Recent-tab">Inbox  @if( isset($getInboxInfo['viewData']['UnreadCount']) && !empty($getInboxInfo['viewData']['UnreadCount']) ) ( {{ $getInboxInfo['viewData']['UnreadCount'] }}  ) @endif</div>
                            <div class="tab getMessageHeaders" passUrl="getMessageHeadersByView" pageId="1" data-tab="Pharmacy-tab">Archived</div>
                        </div>
                        <div class="content message-detal">
                            <div class="tab-content active" id="Recent-tab">
                                <div class="dash-card">
                                    <div class="card-title">
                                        <p>Inbox Messages </p>
                                    </div>
                                    <div class="content message-list">
										
										<div class="message-wrap">
											<div class="no-message-record">
													<p>No message record here.</p>
											</div>
										</div>
										
										<div class="inbox-list" style="display:none;">	
											<div class="message-wrap">
											
													 <div class="user-v1 toggle-btn">
														<div class="uer-detail">
															<div class="name">
																<p>Ethan Johnson</p>
															</div>
															<div class="text">
																<p>Hi, John! I hope this message finds you well.</p>
															</div>
														</div>
														<div class="message-time">
															<p>5m ago</p>
														</div>
													</div>
													
													<!-- Hidden Box -->
													<div class="hidden-box chat-body">
														<div class="message bot">
															<p>Hi, John! I hope this message finds you well. Hi, John! I hope this message finds you well.</p>
														</div>
														
														<div class="message user">
															<p>Hi, John! I hope this message finds you well.</p>
														</div>
													</div>
												
												
											</div>  
											<div class="message-wrap">
											
												 <div class="user-v1 toggle-btn">
													<div class="uer-detail">
														<div class="name">
															<p>Ethan Johnson</p>
														</div>
														<div class="text">
															<p>Hi, John! I hope this message finds you well.</p>
														</div>
													</div>
													<div class="message-time">
														<p>5m ago</p>
													</div>
												</div>
												
												<!-- Hidden Box -->
												<div class="hidden-box chat-body">
													<div class="message bot">
														<p>Hi, John! I hope this message finds you well. Hi, John! I hope this message finds you well.</p>
													</div>
													
													<div class="message user">
														<p>Hi, John! I hope this message finds you well.</p>
													</div>
												</div>
												
											</div>  
										</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="Pharmacy-tab">
                                <div class="dash-card">
                                    <div class="card-title">
                                        <p>Archived Messages</p>
                                    </div>
                                    <div class="content message-list">
                                        
										<div class="message-wrap">
											<div class="no-message-record">
												<p>No message recored here.</p>
											</div>
										</div>
										
										<div class="inbox-list" style="display:none;">	
											<div class="message-wrap">
											
												<div class="user-v1 toggle-btn">
													<div class="uer-detail">
														<div class="name">
															<p>Ethan Johnson</p>
														</div>
														<div class="text">
															<p>Hi, John! I hope this message finds you well.</p>
														</div>
													</div>
													<div class="message-time">
														<p>5m ago</p>
													</div>
												</div>
												
												<!-- Hidden Box -->
												<div class="hidden-box chat-body">
													<div class="message bot">
														<p>Hi, John! I hope this message finds you well. Hi, John! I hope this message finds you well.</p>
													</div>
													
													<div class="message user">
														<p>Hi, John! I hope this message finds you well.</p>
													</div>
												</div>
												
											</div> 
										</div>				
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    

	<script>
    // Select all toggle buttons
    const buttons = document.querySelectorAll(".toggle-btn");
    buttons.forEach(button => {
      button.addEventListener("click", function() {
        // Find the next sibling hidden box
        const hiddenBox = button.nextElementSibling;
        if (hiddenBox && hiddenBox.classList.contains("hidden-box")) {
          // Toggle the hidden box
          hiddenBox.classList.toggle("show");
          // Toggle open class on the clicked button
          button.classList.toggle("open", hiddenBox.classList.contains("show"));
        }
      });
    });
  </script>
	
	<script>
        const tabs = document.querySelectorAll('.tab');
        const contents = document.querySelectorAll('.tab-content');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                contents.forEach(c => c.classList.remove('active'));
                tab.classList.add('active');
                document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
            });
        });
    </script>



    <script>

        const openModalButtons = document.querySelectorAll('.open-modal');
        const closeModalButtons = document.querySelectorAll('.close-modal');
        const modals = document.querySelectorAll('.custom-modal');

        openModalButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const modalId = button.getAttribute('data-modal');
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.style.display = 'flex';
                }
            });
        });

        closeModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modal = button.closest('.custom-modal');
                modal.style.display = 'none';
            });
        });

        window.addEventListener('click', (e) => {
            modals.forEach(modal => {
                if (e.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });

    </script>
@include('messageSpecialist.postMessage')
@include('messageSpecialist.getMessageReply')	
<script>
function SendMessage() {
	
	const regex = /^[a-zA-Z\s]+$/;
	let Subject = $("#Subject").val();
	let Body = $("#Body").val();
	
	if(Subject=="") {
		toastr.error("Subject is Required");
		return false;
	} else if (!regex.test(Subject)) {
		toastr.error("Only Text allowed");
		return false;
    }
	if(Body=="") {
		toastr.error("Message is Required");
		return false;
	}
	return true;
}
</script>
@endsection
<?php /*
@extends('layouts.dashboard')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-6 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Message a Specialist</h3>
                        <h6 class="font-weight-normal mb-0">Secure, Confidential Messaging</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-box">
            <div class="card grid-margin stretch-card">
                <div class="card-body personal-info-card-box ">
                    <div class="row"> 
                        <div class="col-md-12">
                            <h3 class="mb-4">What type of Specialist would you like to message?</h3>
                            <div class="messageSepContainer specialist">
                                @if( $data )
                                @foreach ($data as $key => $value )
                                <div class="specialist-box pull-left" specialistId="{{ $value['idNo'] }}"
                                    data-toggle="modal" data-target="#message-smodal">
                                    <div class="specialist-img"><img src="{{ $value['img'] }}"></div>
                                    <div class="specialist-title"><p class="specialist-title">{{ $value['title'] }}</p></div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inboxContainer" style="padding-top: 3em;">
                                <button type="button" class="btn btn-primary mr-2 getMessageHeaders" passUrl="getMessageHeaders" title="Inbox" pageId="1">Show Inbox @if( isset($getInboxInfo['viewData']['UnreadCount']) && !empty($getInboxInfo['viewData']['UnreadCount']) ) ( {{ $getInboxInfo['viewData']['UnreadCount'] }} ) @endif </button>
                                <button type="button" class="btn btn-primary mr-2 getMessageHeaders" passUrl="getMessageHeadersByView" title="Archived" pageId="1">Show Archived</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="getMessageHeadersData">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('messageSpecialist.postMessage')
    @include('messageSpecialist.getMessageReply')

   
<script>
function SendMessage() {
	
	const regex = /^[a-zA-Z\s]+$/;
	let Subject = $("#Subject").val();
	let Body = $("#Body").val();
	
	if(Subject=="") {
		toastr.error("Subject is Required");
		return false;
	} else if (!regex.test(Subject)) {
		toastr.error("Only Text allowed");
		return false;
    }
	if(Body=="") {
		toastr.error("Message is Required");
		return false;
	}
	return true;
}
</script>	
@endsection
*/ ?>

