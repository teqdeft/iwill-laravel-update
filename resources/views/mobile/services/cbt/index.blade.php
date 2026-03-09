@extends("mobile.layouts.dashboard")
@section("content")

<section class="msg-special-header">
        <div class="cust-container-md">
            <div class="rec-row">
                <div class="back">

                    <a 
                    @if(!empty($data['id']))
                        href="{{ route('cbt-therapy-list') }}" 
                    @else
                    href="{{ route('mobile-dashboard') }}" 
                    @endif
                        class="back-btn">
                        
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.875 16.0417L7.33334 10.5L12.875 4.95834" stroke="#222A3D"
                                stroke-width="1.58333" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
                <div class="top-title">
                    <h2 class="title" style="display:none;">CBT Therapy</h2>
                    <h2 class="title">My Thought Analysis</h2>
                </div>
            </div>
        </div>
</section>

@if(LoginUserBToBVerification())

<section class="cbd-therapy-main">
    <form id="cbt-therapy-id" action="" method="post">
        <div class="cust-container-md">
            <div class="cbd-top">
                <div class="title">
                    <p>Cognitive Behavioral Therapy</p>
                </div>
                <div class="view-log">
                    <a href="{{ route('cbt-therapy-list')}}" class="outline-button">View Log</a>
                </div>
            </div>

            <div class="cbd-the-form all-step  step_1">
                <div class="form-row">
                    <div class="col-100 form-group">
                        <label>Automatic thought <span class="required-ico">*</span></label>
                        <input type="hidden" value="{{$data['id']}}" name="id" />
                        <textarea rows="6" name="automatic_thought" id="automatic_thought">{{$data['automatic_thought']}}</textarea>
                    </div>
                    <div class="cta-save">
                        <button type="button" class="primary-button" onclick="nextTab(1)">Next</button>
                    </div>
                </div>
            </div>

            <div class="disabi-show all-step  step_2" style="display: none;";>
                <div class="top-title">
                    <p>Select any distortions that apply</p>
                </div>

                <div class="show-description">
                    

                    <div class="left">
                        <p>Show Detailed description</p>
                    </div>
                    <div class="togle">
                        <div class="custom-toggle-container">
                            <div class="custom-toggle">
                                <input type="checkbox" id="cbt-details-toggle" class="custom-toggle__checkbox" value="1" />
                                <label for="cbt-details-toggle" class="custom-toggle__label">
                                    <span class="custom-toggle__slider"></span>
                                </label>
                            </div>
                            <span class="custom-toggle-label"></span>
                        </div>
                    </div>
                </div>

                <div class="all-nothi patient-tab-content v2 h-100">

                    <div class="form-row">
                        
                    @foreach (Config('constants.CBT_DETAILS') as $key => $value )
                        <div class="col-100 form-group">
                            <div class="custom-checkbox">
                                
                                <input type="checkbox" value="{{$key}}" id="check-{{ $key }}" name="thought_details[]"  
                                @if (!empty($data['thought_details']) && in_array($key, json_decode($data['thought_details'])) )  checked  @endif>

                                
                                <label for="check-{{ $key }}" class="checkbox-label">
                                    <span class="checkbox-indicator"></span>
                                    <span class="w-80">
                                        <span class="title">{{ $value['title'] }}</span>
                                        <span class="long-text" style="display:none;"> <?= $value['long'] ?></span>
                                        <span class="b-title short-text">{{ $value['short'] }}</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        @endforeach
                       
                        <div class="col-100 cta">
                            <button type="button" class="outline-button" onclick="nextTab(0,'preview')">Previous</button>
                            <button type="button" class="primary-button" onclick="nextTab(2,'next')">Next</button>
                        </div>

                    </div>

                </div>

            </div>

            <div class="challenge-thought all-step step_3 " style="display: none;";>
                <div class="repeat">
                    <div class="challe-title">
                        <p>Challenge the thought <span class="required-ico">*</span></p>
                    </div>
                    <div class="challenge-form">
                        <div class="form-row">
                            <div class="col-100 form-group">
                                <textarea placeholder="Enter here" rows="5" name="challenge_thought" id="challenge_thought">{{$data['automatic_thought']}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-100 cta">
                    <button type="button" class="outline-button" onclick="nextTab(1,'preview')">Previous</button>
                    <button type="button" class="primary-button" onclick="nextTab(3,'next')">Next</button>
                </div>
            </div>

            <div class="challenge-thought all-step  step_4" style="display: none;";>
                <div class="repeat">
                    <div class="challe-title">
                        <p>Write an alternative thought <span class="required-ico">*</span></p>
                        <p>This is not challenge. it's a way to cement an alternative thought.</p>
                    </div>
                    <div class="challenge-form">
                        <div class="form-row">
                            <div class="col-100 form-group">
                                <textarea placeholder="Enter here" rows="5" name="alternative_thought" id="alternative_thought">{{$data['alternative_thought']}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-100 cta">
                    <button type="button" class="outline-button" onclick="nextTab(3,'preview')">Previous</button>
                    <button type="button" class="primary-button" onclick="nextTab(4,'next')">Save</button>
                </div>
            </div>

    

        </div>
    </form>
</section>

@include('mobile.includes.foooter-tab')
<script>
function nextTab(id,requst_type){
    $(".all-step").hide();
    if(id==0) {
        $(".step_1").show();
        $(".step_2").hide();
    } else if(id==1){

        let automatic_thought = $("#automatic_thought").val();
        if(automatic_thought==""){
            $(".step_1").show();
            toastr.error("Thought is Required");
            return false;
        }
        $(".step_2").show();
        
    } else if(id==2) {
        $(".step_3").show();   
        
    } else if(id==3) {
        if(requst_type=="preview") {
            $(".step_3").show(); 
            return false;
        }
        let challenge_thought = $("#challenge_thought").val();
        if(challenge_thought==""){
            toastr.error("Challenge the thought required");
            $(".step_3").show(); 
            return false;
        }
        $(".step_4").show();      
    } else if(id==4) {
        let alternative_thought = $("#alternative_thought").val();
        if(alternative_thought==""){
            toastr.error("Alternative Thought required");
            $(".step_4").show();      
            return false;
        }
        SaveRequestAjax();
    }
    
}   

function SaveRequestAjax() {

    toastr.info('Please wait...', 'Processing', {
            timeOut: 0,
            extendedTimeOut: 0,
        });
    let formData = new FormData($('#cbt-therapy-id')[0]); // Create FormData object
    formData.append("_token", $('meta[name="csrf-token"]').attr("content")); // Add CSRF token
    console.log(formData);
    
    
    $.ajax({
            url: "{{ route('cbt-therapy-save') }}",
            type: "POST",
            data: formData,
            processData: false, // Prevent jQuery from processing data
            contentType: false, // Prevent jQuery from setting content-type
            success: function(response) {

                @if(isset($data['id']) && $data['id'])
                    window.location.href='{{ route("cbt-therapy-list") }}';
                @else
                    location.reload();
                @endif

            },
            error: function(xhr) {
                console.log("Error:", xhr.responseText);
            }
        });


}

$(document).ready(function () {
    $('#cbt-details-toggle').on('change', function () {

        $(".short-text").show();
        $(".long-text").hide();
        let isChecked = $(this).is(':checked');
        let value = isChecked ? $(this).val() : 0;
        if(value==1){
            $(".short-text").hide();
            $(".long-text").show();
        } 
    });
});
</script>  

@else
<section class="written-journal">
    <div class="cust-container-md">
    {{ LoginUserBToBVerificationMSG() }}
    </div>
</section>    
@endif


@endsection 