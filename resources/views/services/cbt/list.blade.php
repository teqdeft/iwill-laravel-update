@extends('layouts.v1.dashboard')
@section('content')


    <div class='moodContainer content-wrapper cbt-therapy-list-main'>				
	
	<div class="row">		  
	<div class="col-md-12 grid-margin">			
	<div class="row">			  
	<div class="col-12 col-xl-6 mb-4 mb-xl-0">				
	<div class="patient-details ">				  
	<div class="media">					
	<div class="title-heading-icon-box-cus">					  
	<i class="far fa-calendar-alt"></i>					
	</div>					
	<div class="media-body">					  
	<h3 class="font-weight-bold"> My Thought Analysis List</h3>					  
	<h6 class="font-weight-normal mb-0"></h6>					
	</div>				  
	</div>				
	</div>			  
	</div>			
	</div>		  
	</div>		
	</div>	
        <div class="card--white full-height feels-view">

            <div class="cust-head-center-wrap">
						<a  class="back-arrow btn btn-primary returnBackuser" href="{{ url('cbt-therapy')}}" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Back to home">Back</a>
						
			</div>
			<?php /*
            <div class="cust-heading-wrap">
                <h3 class="cust-heading cust-heading-view"></h3>
            </div>
			*/ ?>
            <div class="steps-outer jj">
                <div class="cust-container">
                    @if ( $dataArray )
                        @foreach ($dataArray as $header )
                            <h2>{{ $header['header'] }}</h2>
                            @foreach ($header['list'] as $value )
                                <div class="steps-inner">
                                    <a href="javascript:void(0)" class="cbtViewList" cbt-id="{{ $value->id }}">
                                        <div class="steps-left">
                                            <h3>
                                                <?php
                                                // echo '</pre>';
                                                // print_r($value);
                                                ?>
                                                @if( $value->automatic_thought )
                                                    {{ $value->automatic_thought }}
                                                @elseif ( $value->challenge_thought )
                                                    {{ $value->challenge_thought }}
                                                @elseif ( $value->alternative_thought )
                                                    {{ $value->alternative_thought }}
                                                @else
                                                    N/A
                                                @endif
                                            </h3>
                                        </div>
                                    </a>
                                    <div class="step-button">
                                        <a class="deleteByAjax" data-resource="" href="#!" number="{{ $value['id'] }}" data-url="{{ url('cbt-therapy-deleted') }}" data-toggle="tooltip" title="Delete">
                                            <div class="delete-button">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                        <a href='{{ url("cbt-therapy-edit?id={$value->id}") }}'>
                                            <div class="edit-button">
                                                <i class="fa fa-edit"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
        
        <div class="cognitive_modal">
        <div class="modal fade" id="cbtViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="modal-body">
                
                    </div>
                    <button type="button" class="btn btn-secondary pop-btn" data-dismiss="modal"><i class="fas fa-times" style='font-size:24px'></i></button>
                    
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
            </div>
        </div>
    @endsection
    @section('moduleScript')
            <script>
            $(document).on('click','.cbtViewList',function(){
                    let cbtId = $(this).attr('cbt-id');
                    $.ajax({
                        url:`${SITE_URL}/cbt/view`,
                            method:'GET',
                            data: {
                                "_token": $('#csrf-token')[0].content,
                                id:cbtId
                            },
                            error:() => console.log( error ),
                            success:(response) => {
                                // let htmlData = JSON.parse(response.data)
                                $('#cbtViewModal').modal('show');  
                                $('#cbtViewModal').find('.modal-body').html(response.data);
                                // $('#cbtViewModal').find('.modal-title').html(response.data);       
                            }
                    })
            })
            </script>

            
    @endsection
    