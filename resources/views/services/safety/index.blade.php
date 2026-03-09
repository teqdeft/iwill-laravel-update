@extends('layouts.dashboard')
@section('content')
<div class="main-panel main-panel-for-modal-page">
<div class='content-wrapper'>
    <div class="card--white full-height">
        <div class='moodContainer safety-outer-wrapper'>
            <div class="card--white full-height safety-conent-wrap">
                

                <div class="cust-heading-wrap">
                    <h3 class="cust-heading cust-heading-view">SAFETY PLAN</h3>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs safety-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="plans-tab" data-bs-toggle="tab" data-bs-target="#plans"
                            type="button" role="tab" aria-controls="plans" aria-selected="true">Plan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Guide-tab" data-bs-toggle="tab" data-bs-target="#Guide"
                            type="button" role="tab" aria-controls="Guide" aria-selected="false">Guide</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Crisis-tab" data-bs-toggle="tab" data-bs-target="#Crisis"
                            type="button" role="tab" aria-controls="Crisis" aria-selected="false">Crisis</button>
                    </li>
                </ul>

                <!-- Tab panes -->

                <div class="tab-content safety-tab-content">

                    <div class="tab-pane active" id="plans" role="tabpanel" aria-labelledby="plans-tab">
                        <div class="safety-conent-inner">
                            <!-- <span>Press the ? icon in the upper right corner for instructions on how to fill out this safety plan.</span> -->
                            <div class="plans-row">
                                @if ( $safetyPlans )
                                    @foreach ($safetyPlans as $value )
                                        @if ( $value->type == 'plan' )
                                            <div class="plans-item">
										
											 <?php $datadb = getSafetyPlanData($value->title) ?>
                                                <i><img src="{{ config('app.IWILLTILL') }}/{{ $value->icon }}" alt=""></i>
                                                <div class="plans-content">
                                                    <h3 class="plans-heading"><?= ucfirst(html_entity_decode($value->title)) ?></h3>
                                                    <div class="mt-2"><?= ucfirst(html_entity_decode($value->description)) ?></div>

                                                    <div class="warning-signs-block plans-form-content">
                                                        <span><?= ucfirst(html_entity_decode($value->inner_description)) ?></span>
                                                        <h3><?= ucfirst(html_entity_decode($value->title)) ?></h3>
														
                                                    </div>
													
													<input type="hidden" value="<?php echo $datadb?>" class="db_content">
													
                                        
										
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <div class="plans-guide-block">
                                <a href="javascript:void();" class="back-arrow emptyAllField"> Back</a>
                                <div class="warning-signs-block plans-form-content">

                                </div>

                                <form class="custom-saf-plans-form" id="custom-saf-plans-form" action="{{ url('my-safety-plan-save') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="plan_type" id="safty_plan_type" value="">
                                    <div class="control-group">
                                        <div id="teamArea" class="controls custom-safe-field-control">
                                            
                                        </div>
                                        <div class="btn-box">
                                            <a id="addNewTeam" class="cust-dark-btn add-btn">Add another</a>
                                            <a id="removeLastTeam" style="display:none;"
                                                class="cust-dark-btn remove-btn">Remove
                                                Last</a>
                                        </div>

                                        <div class="btn-box custom-saf-plans-foot">
                                            <a class="cust-dark-btn cancel-safety-warning emptyAllField">Cancel</a>
                                            <input class="cust-dark-btn save-safety-warning" type="submit" value="Save">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Guide" role="tabpanel" aria-labelledby="Guide-tab">
                        <div class="guide-content">
                            <div class="plans-row">
                                 @if ( $safetyPlans )
                                    @foreach ($safetyPlans as $value )
                                        @if ( $value->type == 'guide' )
                                            <div class="plans-item">
                                                <i><img src="{{ config('app.IWILLTILL') }}/{{ $value->icon }}" alt=""></i>
                                                <div class="plans-content">
                                                    <h3 class="plans-heading">
													<?= ucfirst(html_entity_decode($value->title)) ?>
													</h3>
                                                </div>
                                                <div class="guide-detail-content">
                                                    <?= ucfirst(html_entity_decode($value->description)) ?>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div> 
                        </div>
                        <div class="guide-descrip-content">
                            <a href="javascript:void();" class="back-arrow"> Back</a>
                            <h3></h3>
                            <div class="guide-dynamic-box">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Crisis" role="tabpanel" aria-labelledby="Crisis-tab">
                        <div class="crisis-call-box">
                            <div class="plans-row">
                                 @if ( $safetyPlans )
										 <?php $counter=1; ?>
                                    @foreach ($safetyPlans as $value )
                                        @if ( $value->type == 'crisis' )
                                            <div class="plans-item">
                                                <i><img src="{{ config('app.IWILLTILL') }}/{{ $value->icon }}" alt=""></i>
                                                <div class="plans-content">

                                                    <a 
													
													
													@if($counter==9)
														
														href="sms:741741?body=The Trevor Project Text ( LGBTQ )"
													
													@elseif ( !empty( $value->number ) && str_contains($value->number,'tel:') !== true )
                                                         class="googleNearMe" href="javascript:;" data-link="<?= $value->number ?>" @else class="healthPhone" href="javascript:;" data-call="<?= $value->number ?>"
                                                    @endif ><h3 class="plans-heading"><?= html_entity_decode($value->title) ?></h3></a>
                                                </div>
                                            </div>
											<?php $counter++; ?>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    <div class="modal modal-safetyPhoneCenter fade safty-plan-call-model" id="safetyPhoneCenter" tabindex="-1" role="dialog" aria-labelledby="safetyPhoneCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>

            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-primary" id="callPopup" >Call</a>
            </div>
            </div>
        </div>
</div>

@push('scripts')
   



    <script>

$(document).on("click", ".save-safety-warning", function(e) {
    e.preventDefault(); // Prevent default behavior
    let isValid = false;
    $("#custom-saf-plans-form input[name='fields[]']").each(function() {
        if($(this).val().trim() !== "") {
            isValid = true;
            return false; 
        }
    });

    if (!isValid) {
        toastr.error("Please fill at least one field");
        return false;
    }
    $(this).closest('form').submit(); 
    /*
    var checkfields = false;

    $('.saftyplanfield').each(function() {
        if ($(this).val().trim() !== '') { // Use trim() to avoid spaces counting as value
            checkfields = true;
        }
    });
   
    if (checkfields) {
        $(this).closest('form').submit(); // Submit the closest form
    } else {
        toastr.error("Please fill at least one field");
    }
    */ 
});

function SafetyPlanModalFun(id) {
    var text = $("#plan-"+id+" .plans-heading").html();
    console.log($(text).text());
    // title  = $("<div>").html(title).find("p").text().trim();
    $("#safty_plan_type").val($(text).text().trim());

 }





    </script>

@endpush


    @endsection

<?php /*
@section('content')

@if(LoginUserBToBVerification())
<div class='content-wrapper'>
    <div class="card--white full-height">
        <div class='moodContainer content-wrapper'>
            <div class="card--white full-height safety-conent-wrap">

                <div class="cust-heading-wrap">
                    <h3 class="cust-heading cust-heading-view">SAFETY PLAN</h3>
                </div>
                <!-- Nav tabs -->


                 
                <ul class="nav nav-tabs safety-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="plans-tab" data-bs-toggle="tab" data-bs-target="#plans"
                            type="button" role="tab" aria-controls="plans" aria-selected="true">Plan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Guide-tab" data-bs-toggle="tab" data-bs-target="#Guide"
                            type="button" role="tab" aria-controls="Guide" aria-selected="false">Guide</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Crisis-tab" data-bs-toggle="tab" data-bs-target="#Crisis"
                            type="button" role="tab" aria-controls="Crisis" aria-selected="false">Crisis</button>
                    </li>
                </ul>

                <!-- Tab panes -->

                <div class="tab-content safety-tab-content">

                    <div class="tab-pane active" id="plans" role="tabpanel" aria-labelledby="plans-tab">
                        <div class="safety-conent-inner">
                            <!-- <span>Press the ? icon in the upper right corner for instructions on how to fill out this safety plan.</span> -->
                            <div class="plans-row">

                            @if ( $safetyPlans )
                    <?php $counter=1; ?>
                        @foreach ($safetyPlans as $value )
                            @if ( $value->type == 'plan' )
                                <div id="plan-<?php echo $counter ?>" class="plans-item" onclick="SafetyPlanModalFun('<?php echo $counter ?>')">
                                    <i>
                                    <img src="{{ asset($value->icon) }}" alt="icon" style="width: 100%;">
                                    </i>
                                    <div class="plans-content">

                                        
                                        <h3 class="plans-heading"><?= ucfirst(html_entity_decode($value->title)) ?></h3>
                                        <h4>{!! ucfirst(html_entity_decode($value->description)) !!}</h4>
                                        <div class="warning-signs-block plans-form-content">
                                        {!! ucfirst(html_entity_decode($value->description)) !!}
                                            
                                        </div>
                                    </div>
                                </div>

                                <?php $counter++; ?>        
                             @endif
                            @endforeach
                         @endif
                                
                            </div>

                            <div class="plans-guide-block">
                                <a href="javascript:void();" class="back-arrow"> Back</a>
                                <div class="warning-signs-block plans-form-content">

                                </div>

                                <form class="custom-saf-plans-form" id="custom-saf-plans-form" action="{{ url('my-safety-plan-save') }}" method="POST">
                                @csrf

                                <input type="hidden" name="plan_type" id="safty_plan_type" value="Warning Signs / Triggers">
                                    <div class="control-group">
                                        <div id="teamArea" class="controls custom-safe-field-control">
                                            <input type="text" name="fields[]" class="form-control">
                                            <input type="text" name="fields[]" class="form-control">
                                            <input type="text" name="fields[]" class="form-control">
                                        </div>
                                        <div class="btn-box">
                                            <a id="addNewTeam" class="cust-dark-btn add-btn">Add another</a>
                                            <a id="removeLastTeam" style="display:none;"
                                                class="cust-dark-btn remove-btn">Remove
                                                Last</a>
                                        </div>

                                        <div class="btn-box custom-saf-plans-foot">
                                            <a class="cust-dark-btn cancel-safety-warning emptyAllField">Cancel</a>
                                            <input class="cust-dark-btn save-safety-warning" type="button" value="Save">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Guide" role="tabpanel" aria-labelledby="Guide-tab">
                        <div class="guide-content">
                            <div class="plans-row">

                            @if ($safetyPlans)
    @foreach ($safetyPlans as $value)
        @if ($value->type == 'guide')
            <div class="plans-item">
                <i><img src="{{ config('app.IWILLTILL') }}/{{ $value->icon }}" alt=""></i>
                <div class="plans-content">
                    <!-- Decode HTML entities first, then remove HTML tags and capitalize first letter -->
                    <h3 class="plans-heading">{!! ucfirst(strip_tags(html_entity_decode($value->title))) !!}</h3>
                </div>
                <div class="guide-detail-content">
                    <!-- Decode HTML entities first, then remove HTML tags and capitalize first letter -->
                    {!! ucfirst(strip_tags(html_entity_decode($value->description))) !!}
                </div>
            </div>
        @endif
    @endforeach
@endif
                                
                            </div>
                        </div>

                        <div class="guide-descrip-content">
                            <a href="javascript:void();" class="back-arrow"> Back</a>
                            <h3></h3>
                            <div class="guide-dynamic-box">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Crisis" role="tabpanel" aria-labelledby="Crisis-tab">
                        <div class="crisis-call-box">
                            <div class="plans-row">
                              

                            @if ( $safetyPlans )
                                    @foreach ($safetyPlans as $value )
                                        @if ( $value->type == 'crisis' )
                                            <div class="plans-item">
                                                <i><img src="{{ config('app.IWILLTILL') }}/{{ $value->icon }}" alt=""></i>
                                                <div class="plans-content">

                                                    <a @if ( !empty( $value->number ) && str_contains($value->number,'tel:') !== true )
                                                         class="googleNearMe" href="javascript:void(0);" data-link="<?= $value->number ?>" @else class="healthPhone" href="javascript:;" data-call="<?= $value->number ?>"
                                                    @endif ><h3 class="plans-heading"><?= html_entity_decode($value->title) ?></h3></a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                            
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    @push('scripts')
   



    <script>

$(document).on("click", ".save-safety-warning", function(e) {
    e.preventDefault(); // Prevent default behavior
    let isValid = false;
    $("#custom-saf-plans-form input[name='fields[]']").each(function() {
        if($(this).val().trim() !== "") {
            isValid = true;
            return false; 
        }
    });

    if (!isValid) {
        toastr.error("Please fill at least one field");
        return false;
    }
    $(this).closest('form').submit(); 
    /*
    var checkfields = false;

    $('.saftyplanfield').each(function() {
        if ($(this).val().trim() !== '') { // Use trim() to avoid spaces counting as value
            checkfields = true;
        }
    });
   
    if (checkfields) {
        $(this).closest('form').submit(); // Submit the closest form
    } else {
        toastr.error("Please fill at least one field");
    }
    * 
});

function SafetyPlanModalFun(id) {
    var text = $("#plan-"+id+" .plans-heading").html();
    console.log($(text).text());
    // title  = $("<div>").html(title).find("p").text().trim();
    $("#safty_plan_type").val($(text).text().trim());

 }





    </script>

@endpush

<div class="modal modal-safetyPhoneCenter fade" id="safetyPhoneCenter" tabindex="-1" role="dialog" aria-labelledby="safetyPhoneCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 440px !important;">
            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>

            <div class="modal-body">
            </div>
            <div class="modal-footer" style="padding: 0;">
                <a href="" class="btn btn-primary" id="callPopup" >Call</a>
            </div>
            </div>
        </div>
    </div>

<style>
.moodContainer.content-wrapper {
    width: 100%;
}    
.modal.modal-safetyPhoneCenter .modal-dialog .modal-content .modal-footer .btn {
    width: 100% !important;
    display: block;
    margin: 0 !important;
    padding: 20px;
    border-radius: 0 0 0.3rem 0.3rem !important;
    font-size: 20px;
}

.modal-safetyPhoneCenter .close {
    position: absolute;
    right: 20px;
    top: 10px;
    font-weight: 300;
    font-size: 30px;
    z-index: 1;
}
.modal.modal-safetyPhoneCenter .modal-dialog .modal-content .modal-body {
    padding: 75px 26px;
}
.modal-safetyPhoneCenter .modal-body p {
    font-size: 28px !important;
    text-align: center;
}
</style>    
@else
<div class="main-panel">
    <div class="content-wrapper                    ^“AG  Ž    Ø$W4²²‚ E Úû©@ €Èæ
  DBâI,æªŠÕÑôž$PÿÿŠ_  ">
		<div class="row">
        <div class="col-12 grid-margin stretch-card btob-admin">
                <div class="card card-body">
                 {{ LoginUserBToBVerificationMSG() }}
             </div>
        </div>
    </div>
@endif	
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script> 

$(document).on('click', '.healthPhone', function() {
    
    let phoneNumber = $(this).attr('phoneNo');
    let textdata = $(this).children('.plans-heading').text();
    $('#safetyPhoneCenter').find('.modal-body').html(`<p>Are you sure ?</p>`);
    $('#safetyPhoneCenter').modal('show');
    $('#safetyPhoneCenter').find('#callPopup').attr('href', $(this).attr('data-call'));
    //window.open(`tel:${phoneNumber}`, '_self');
})

$(document).on('click', '.healthPhoneCall', function() {
    let phoneNumber = $(this).attr('phoneNo');
    window.open(`tel:${phoneNumber}`, '_self');
});

$(document).on("click", ".googleNearMe", function(e) {
    e.preventDefault();
    var hrefLink = $(this).attr("data-link");
    if (hrefLink == 'javascript') {
        return false;
    } else {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        }

        function showPosition(position) {
            window.open(`${hrefLink}/@${position.coords.latitude},${posi
			
			*/ ?>