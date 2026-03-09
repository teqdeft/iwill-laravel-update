@if($consultations)
	@foreach($consultations as $list)	
		<div class="dash_row">
			
								<div class="dash_cta">
									<p class="dash_care">{{$list['friendlySubTypeName']}}</p>
								</div>
								<div class="provider_name">
									<div class="dash_title">
										<p>Provider Name</p>
									</div>
									<div class="dash_text">
										<p>Michael McKee</p>
									</div>
								</div>
								<div class="patient">
									<div class="dash_title">
										<p>Patient</p>
									</div>
									<div class="dash_text">
										<p>
											{{$list['patient']['firstName']}}
											{{$list['patient']['middleName']}}
											{{$list['patient']['lastName']}}
										</p>
									</div>
								</div>
								
		</div>
		
	@endforeach
@else
	<div class="dash_row dash-no-record">	
		<p>Sorry No Records</p>		
	</div>
@endif