@if(!Auth::user()->parentId)
<div id="dependents" class=" tab-pane fade">
                                <br>
                                <div class="dependents-top-content">
                                    <h3 class="mb-1"> Manage Dependents and other Household users</h3>
                                    <p>Here you can add and edit your dependent information.</p>
                                    <p>You may add up to 7 dependents. Your spouse and any dependents over 18 years of
                                        age will receive a registration email and must register to use the system. Your
                                        spouse will have access to all of your dependents records who are under
                                        the age of 18 but will not have access to your records or any dependents records
                                        who are over the age of 18.
                                    </p>
                                </div>
								

				
								@if($plan_info && in_array($plan_info->plan_id, Config::get('constants.family_plan')))
                           
                                @if($user->total_dependents < Config::get('constants.allowed_dependents') && (!$user->
                                    parentId)) 
									<div class=" add_dependent my-4 ">
									
                                        <button onclick="addNewDependent()" type="button" class="btn btn-primary mr-3 add-new-dependent">
											<i class="fas fa-plus mr-1"></i>
                                            Add A Dependent
										</button>
                                    </div>
                                    @endif
                                    <div class="viewing-records-box">
                                        <div class="tabs-new-dependent">
                                            <div class="inner mb-2">
                                                <h3>Viewing Records For:</h3>
                                            </div>
											
											<div class="depen_over mt-3">
												<p>
												Note:- 
												<span class="depen_over_span">* Dependent is over 18 and must manage their own records.</span> 
												</p>
											</div>
											 
                                            <ul class="nav nav-tabs mt-3" id="myTabs" role="tablist">
												
														
                                                @if($allDependent)
                                                @foreach($allDependent as $key => $dependent)
                                                <li class="nav-item">
                                                    <a class="nav-link " data-toggle="tab"
                                                        href="#dependent-{{ $dependent->id }}" role="tab"
                                                        aria-controls="dependent-{{ $dependent->id }}"
                                                        aria-selected="false">{{ ucfirst($dependent->fname) }} {{ ucfirst($dependent->lname) }}</a>
                                                </li>
                                                @endforeach
                                                @endif
                                                <li class="nav-item">
                                                    <a class="nav-link active add-new-dependent-tab"
                                                        id="new-dependent-tab" data-toggle="tab" href="#new-dependent"
                                                        role="tab" aria-controls="new-dependent" aria-selected="false"
                                                        style="display:none">New dependent</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content pt-0 dependent-content-cnt" id="myTabContent">
                                                @if($allDependent)
                                                @foreach($allDependent as $key => $dependent)
                                                @if($key==0)
                                                <?php $active_class = "active show"; ?>
                                                @else
                                                <?php $active_class = ""; ?>
                                                @endif
                                                @if(getAge($dependent->dob) < Config::get('constants.minor_age')) <div
                                                    class="tab-pane fade {{ $active_class }}"
                                                    id="dependent-{{ $dependent->id }}" role="tabpanel"
                                                    aria-labelledby="dependent-{{ $dependent->id }}-tab">
                                                    <form class="row personal-info-value-box" id="update-dependent-form"
                                                        action="{{ route('update-dependent', $dependent->id) }}"
                                                        method="post"
														enctype="multipart/form-data"
														>
                                                        @csrf
                                                        <input type="hidden" name="dependent-id"
                                                            value="{{ $dependent->id }}" />
                                                        <div class="col-md-12 grid-margin stretch-card">
                                                            <div class="card theme-border-0">
                                                                <div class="card-body px-0 pt-0">
                                                                    <div class="row">
                                                                        <div class="col-xl-4">
                                                                            <div class="inner-details-box">
                                                                                <label for="fname">First
                                                                                    Name 
                                                                                </label>
                                                                                <h3
                                                                                    class="text-primary fs-20 font-weight-medium">
                                                                                    {{ ucfirst($dependent->fname) }}</h3>
																					
																				<input type="hidden" name="fname" value="{{$dependent->fname}}"/>	
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <div class="inner-details-box">
                                                                                <label for="lname">Last
                                                                                    Name</label>
                                                                                <h3
                                                                                    class="text-primary fs-20 font-weight-medium">
                                                                                    {{ ucfirst($dependent->lname) }}</h3>
																					
																				<input type="hidden" name="lname" value="{{$dependent->lname}}"/>	
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <div class="inner-details-box ">
                                                                                <label for="dob">Date of
                                                                                    Birth </label>
                                                                                <h3
                                                                                    class="text-primary fs-20 font-weight-medium">
                                                                                    {{ $dependent->dob }}</h3>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                        <div class="col-sm-4">
                                                                            <div
                                                                                class="main-phone-box viewing_records_phone_box">
                                                                                <label for="exampleInputWeight">Primary
                                                                                    Phone <span class="fs-12 d-none">(
                                                                                        011
                                                                                        is a required prefix when
                                                                                        dialing
                                                                                        from the U.S. Do not add that
                                                                                        into
                                                                                        this field, it is
                                                                                        automatic.)</span>
                                                                                </label>
                                                                                <div class="inputWithIcon ">
                                                                                    <input type="tel"
                                                                                        class="form-control" id="phone"
                                                                                        name="primaryPhone"
                                                                                        value="{{ $dependent->primaryPhone }}"
																						onkeyup="validLength(this,'10')"
																						
																						>
																					<!--	
                                                                                    <i class="fas fa-phone-alt"
                                                                                        aria-hidden="true"></i>
                                                                                      <a href="#0"
                                                                                    class="fs-12 w-100 theme-link-txt1 click-here1 click-here">Click
                                                                                    here to add an International Phone
                                                                                    Number</a> -->
                                                                                    <a href="#0"
                                                                                        class="fs-12   theme-link-txt1 click-here2 d-none click-here">Click
                                                                                        here to add a U.S. Phone
                                                                                        Number</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="exampleInputWeight">Secondary
                                                                                    Phone</label>
                                                                                <input type="tel" class="form-control"
                                                                                    id="exampleInputWeight"
                                                                                    placeholder="Secondary Phone"
                                                                                    name="secondaryPhone"
                                                                                    value="{{ $dependent->secondaryPhone }}"
																					onkeyup="validLength(this,'10')"
																					>
                                                                            </div>
                                                                        </div>
																		
																		 <div class="col-xl-4">
                                                                            <div class="inner-details-box">
                                                                                <label for="exampleInputWeight">Gender
                                                                                </label>
                                                                                <div class="d-flex">
                                                                                    <div class="form-check mr-4">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="gender"
                                                                                                id="optionsRadios1"
                                                                                                value="m"
                                                                                                {{ ($dependent->gender=="m") ? "checked" : ""}}>
                                                                                            Male
                                                                                            <i
                                                                                                class="input-helper"></i></label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input "
                                                                                                name="gender"
                                                                                                id="optionsRadios1"
                                                                                                value="f"
                                                                                                {{ ($dependent->gender=="f") ? "checked" : ""}}>
                                                                                            Female
                                                                                            <i
                                                                                                class="input-helper"></i></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="addressInputWeight">Address</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="addressInputWeight"
                                                                                    placeholder="Address" name="address"
                                                                                    value="{{ $dependent->address }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <label for="addresssInputWeight">Address
                                                                                    Line
                                                                                    2</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="addresssInputWeight"
                                                                                    placeholder="Address"
                                                                                    name="address2"
                                                                                    value="{{ $dependent->address2 }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <label>City</label>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="City" name="city"
                                                                                    value="{{ $dependent->city }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <label for="">State</label>
                                                                                <select
                                                                                    class="form-control theme-select"
                                                                                    name="stateid">
                                                                                    <option value="">Please select state
                                                                                    </option>
                                                                                    @foreach ($states as $state)
                                                                                    <option value="{{ $state->id }}"
                                                                                        {{ ($state->id == $dependent->stateid) ? 'selected' : '' }}>
                                                                                        {{ $state->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <label>Zip Code</label>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Zip Code"
                                                                                    name="zipCode"
                                                                                    value="{{ $dependent->zipCode }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <label>Time Zone</label>
                                                                                <select
                                                                                    class="form-control theme-select"
                                                                                    name="timezoneId">
                                                                                    <option value=""> -- SELECT TIMEZONE
                                                                                        --
                                                                                    </option>
                                                                                    @foreach ($timezones as $timezone)
                                                                                    <option value="{{ $timezone->id }}"
                                                                                        {{ ($timezone->id == $dependent->timezoneId) ? 'selected' : '' }}>
                                                                                        {{ $timezone->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
																		
																		
									<div class="col-sm-4">
										<div class="form-group input-with-img">
											<label>Upload Profile Image<span class="required-ico">*</span></label>
											<input type="file" class="form-control upload_img-v1" name="profile_image"
																	placeholder="Profile">  
										
											@if(!empty($dependent->profile_image) && file_exists(public_path('profiles/' . $dependent->profile_image)))
											<div class="img-close-icon">
												<div class="img-box">
													<img src="{{ asset('profiles/' . $dependent->profile_image) }}" width="100" alt="Profile Image">
												</div>	
												<a class="deleteByAjax" data-url="{{ route('profile-img-deleted')}}" number="{{$dependent->id}}">X</a>
											</div>	
											@endif
										</div>
									</div>
									
									<?php 
										/* echo "<pre>";
										print_r($dependent->profile_image);
										echo "</pre>"; */
									
									?>
									
									
																		
                                                                        <div class="col-sm-12  ">
                                                                            <button type="submit"
                                                                                class="btn btn-primary mr-3">Save</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                            </div>
                                            @else
                                            <div class="tab-pane fade {{ $active_class }}"
                                                id="dependent-{{ $dependent->id }}" role="tabpanel"
                                                aria-labelledby="dependent-{{ $dependent->id }}-tab">
                                                <div class="row personal-info-value-box">
                                                    <div class="col-md-12 grid-margin stretch-card dependent-detail-v1">
                                                        <div class="card theme-border-0">
                                                            <div class="card-body px-0 pt-0">
															<div class="detail-title">
                                                                <p>This dependent is over the age of 18. Below is the
                                                                    email address associated with their account.</p>
																</div>
																<div class="detail-collapse">
																	<a data-toggle="collapse" href="#collapseExample"
                                                                    role="button" aria-expanded="false"
                                                                    aria-controls="collapseExample"> <i
                                                                        class="fas fa-leaf"></i> I am the legal guardian
                                                                    for this adult dependent and would like to manage
                                                                    their care.</a>
																</div>
																	
                                                                <div class="collapse" id="collapseExample">
                                                                    <div class="card mt-3">
                                                                        <div class="blockquote blockquote-primary">
																			<div class="block-content">
																				<p>To manage care for an adult dependent under your guardianship we would need either a COURT-SIGNED <span>Legal Proof of Guardianship</span> or a <span>Durable Power of Attorney for Healthcare.</span>
																				</p>
																				
																				<p>Please fax all required documents to <span>210-963-8780</span> including a Cover Sheet with the following information:
																				</p>
																			</div>
																			
																			<div class="contnt-ul">
																				<ul>
																					<li><span>ATTN:</span>Privacy and Compliance Team</li>
																					<li><span>SUBJECT:</span>Care management approval for adult
																						dependent</li>
																					<li><span>PRIMARY:</span>kulwant singh (ID: 3742821)</li>
																					<li><span>ADULT DEPENDENT:</span>[DEPENDENT LEGAL NAME. MUST MATCH
																						THE NAME IN THE COMPANION LEGAL DOCUMENTS]</li>
																				</ul>
																			</div>
																			<div class="block-detail-footer">
																				<p>Please allow up to 5 business days for your case to be reviewed and approved by our compliance team.</p>
																			</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
																
                                                                <div class="mt-3 relac-records-for">

                                                                    <div class="form-inline user-name-form">
                                                                        <div class="form-group">
                                                                            <div class="rel-content rel_rel_jon">
																				<div class="rel-title">
																					<h3>Relationship to</h3>
																				</div>
																				<div class="rel-text">
																					<p>{{ ucfirst($user->fname) }} {{ ucfirst($user->lname) }}</p>
																				</div>
                                                                            </div>
																			<div class="rel-form">
																				<form class="form-group"
																					id="update-relatioship" method="post"
																					action="{{ route('update.relatioship', $dependent->id) }}">
																					@csrf
																					<div class="select-box-and-button">
																						<?php $relationship = Config::get('constants.relationship'); ?>
																						<select
																							class="form-control theme-select"
																							name="relationship">
																							@foreach ($relationship as $key
																							=> $relation)
																							<option value="{{ $key }}"
																								{{ showSelectedValue($key, @$dependent->relationship) }}>
																								{{ $relation }}</option>
																							@endforeach
																						</select>
																						<button type="submit"
																							class="btn btn-primary mb-0">Save</button>
																					</div>
																				</form>
																			</div>
                                                                        </div>
                                                                    </div>
																	
                                                                    <div class="form-inline resend-and-change">
																		<div class="resend-form">
																			<form class="form-group"
																				id="resend-register-email" method="post"
																				action="{{ route('resend.dependent.email', $dependent->id) }}">
																				@csrf
																				<div class="form-group">
																					<label
																						class="w-100 d-block ">Email:</label>
																					<div class="email-text-box mr-3">
																						<div class="inner-text-email-box">
																							<p>{{ $dependent->email }}</p>
																						</div>
																					</div>
																					<button type="submit"
																						class="btn btn-primary mb-0">Resend
																						Registration Email</button>
																				</div>
																			</form>
																		</div>
																		
												
																	@include('auth.dependent-email-update')	
												
												
                                                                    </div>
																	
                                                                    <div class="form-inline update-status">
                                                                        <form class="form-group" id="update-user-status"
                                                                            method="post"
                                                                            action="{{ route('update.status', $dependent->id) }}">
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="w-100 d-block ">Status</label>
                                                                                <div class="status-box mr-3">
                                                                                    <div class="inner-status-box">
                                                                                        <?php $user_status = Config::get('constants.user_status'); ?>
                                                                                        <select
                                                                                            class="form-control theme-select"
                                                                                            name="status">
                                                                                            @foreach ($user_status as
                                                                                            $key => $status)
                                                                                            <option value="{{ $key }}"
                                                                                                {{ ($key == $dependent->status) ? 'selected': '' }}>
                                                                                                {{ $status }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary mb-0">Save</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endif
                                            <div class="tab-pane fade active show add-new-dependent-content"
                                                id="new-dependent" role="tabpanel" aria-labelledby="new-dependent-tab"
                                                style="display:none">
                                                <div class="row personal-info-value-box">
                                                    <div class="col-md-12 grid-margin stretch-card">
                                                        <div class="card theme-border-0">
                                                            <div class="card-body px-0 pt-0">
                                                                <!-- <div class="row"> -->
                                                                <form class="row" method="post" id="add-dependent-form"
                                                                    action="{{ route('add-dependent') }}"
																	enctype="multipart/form-data"
																	
																	>
                                                                    @csrf
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputWeight">Relationship
                                                                                to
                                                                                {{ $user->name}}</label>
                                                                            <?php $relationship = Config::get('constants.relationship'); ?>
                                                                            <select class="form-control theme-select"
                                                                                name="relationship">
                                                                                @foreach ($relationship as $key
                                                                                => $relation)
                                                                                <option value="{{ $key }}">
                                                                                    {{ $relation }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>First Name</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="First Name" name="fname">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Last Name</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Last Name" name="lname">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Date of Birth</label>
                                                                            <div class="dob-cal-box">
                                                                                <input id="date_of_birth"
                                                                                    class="form-control dependent_dob"
                                                                                    name="dob" required="required"
                                                                                    autocomplete="off"
                                                                                    placeholder="mm / dd / yyyy"
                                                                                    onkeydown="event.preventDefault()"
                                                                                    readonly />
                                                                                <i
                                                                                    class="far fa-calendar-alt date-icon"></i>
                                                                            </div>
                                                                            <span><b>Note:</b> <span
                                                                                    class="text-dark">please select your
                                                                                    date of birth from calendar
                                                                                    .</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Gender</label>
                                                                            <div class="d-flex">
                                                                                <div class="form-check mr-4">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio"
                                                                                            class="form-check-input"
                                                                                            name="gender"
                                                                                            id="optionsRadios1"
                                                                                            value="m">
                                                                                        Male
                                                                                        <i
                                                                                            class="input-helper"></i></label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio"
                                                                                            class="form-check-input "
                                                                                            name="gender"
                                                                                            id="optionsRadios1"
                                                                                            value="f">
                                                                                        Female
                                                                                        <i
                                                                                            class="input-helper"></i></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div
                                                                            class="main-phone-box viewing_records_phone_box">
                                                                            <label for="exampleInputWeight">Primary
                                                                                Phone <span class="fs-12 d-none">( 011
                                                                                    is a required prefix when dialing
                                                                                    from the U.S. Do not add that into
                                                                                    this field, it is automatic.)</span>
                                                                            </label>
                                                                            <div class="inputWithIcon inputIconBg ">
                                                                                <input type="tel" class="m-0 d-block"
                                                                                    id="phone" 
																					name="primaryPhone"
																					onkeyup="validLength(this,'10')"
																					>
                                                                                <i class="fas fa-phone-alt"
                                                                                    aria-hidden="true"></i>
                                                                                <!--  <a href="#0"
                                                                                    class="fs-12 w-100 theme-link-txt1 click-here1 click-here">Click
                                                                                    here to add an International Phone
                                                                                    Number</a> -->
                                                                                <a href="#0"
                                                                                    class="fs-12   theme-link-txt1 click-here2 d-none click-here">Click
                                                                                    here to add a U.S. Phone Number</a>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputWeight">Secondary
                                                                                Phone</label>
                                                                            <input type="tel" class="form-control"
                                                                                id="exampleInputWeight"
                                                                                placeholder="Secondary Phone"
                                                                                name="secondaryPhone"
																				onkeyup="validLength(this,'10')"
																				
																				>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="exampleInputWeight">Status</label>
                                                                            <?php $user_status = Config::get('constants.user_status'); ?>
                                                                            <select class="form-control theme-select"
                                                                                name="status">
                                                                                @foreach ($user_status as
                                                                                $key => $status)
                                                                                <option value="{{ $key }}">
                                                                                    {{ $status }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="exampleInputWeight">Address</label>
                                                                            <input type="text" class="form-control"
                                                                                id="exampleInputWeight"
                                                                                placeholder="Address" name="address">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputWeight">Address Line
                                                                                2</label>
                                                                            <input type="text" class="form-control"
                                                                                id="exampleInputWeight"
                                                                                placeholder="Address" name="address2">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="City" name="city">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label for="">State</label>
                                                                            <select class="form-control theme-select"
                                                                                name="stateid">
                                                                                <option value="">Please select state
                                                                                </option>
                                                                                @foreach ($states as $state)
                                                                                <option value="{{ $state->id }}">
                                                                                    {{ $state->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Zip Code</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Zip Code" name="zipCode">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Time Zone</label>
                                                                            <select class="form-control theme-select"
                                                                                name="timezoneId">
                                                                                <option value=""> -- SELECT TIMEZONE --
                                                                                </option>
                                                                                @foreach ($timezones as $timezone)
                                                                                <option value="{{ $timezone->id }}">
                                                                                    {{ $timezone->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
																	
																	
																	<div class="col-sm-4">
																		<div class="form-group input-with-img">
																		<label>Upload Profile Image<span class="required-ico">*</span></label>
																		<input type="file" class="form-control upload_img-v1" name="profile_image"
																								placeholder="Profile">  
																	
																		
																		</div>
																	</div>
																	
                                                                    <div class="col-sm-4 dependent-email-cnt"
                                                                        style="display:none">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="EmaildexampleInputWeight">Email</label>
                                                                            <input type="email" class="form-control"
                                                                                id="EmaildexampleInputWeight"
                                                                                placeholder="Email" name="email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12  ">
                                                                        <button type="submit"
                                                                            class="btn btn-primary mr-3">Save</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
						 @else
							 
							<div class="alert alert-info custom-alert-info">
							  <strong>Info!</strong> Please Purchase Family Plan.
							</div>
							
						 @endif	
							
</div>
@endif