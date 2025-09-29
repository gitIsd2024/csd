@extends('layouts.index')

@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/daterangepicker.css') }}">

    <style>
        .btn-success[disabled]{
            background: #26B99A;
            border: 1px solid #169F85;
        }
    </style>
@endsection

@section('content')
{{-- CSRF TOKEN --}}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div>
    <div class="row">
         <div class="col-md-12">
                @if($distributed != "N/A")
               @else
               @endif


        </div>


        <div class="col-md-12">
            {{-- <div class="col-md-2">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Total Commitments</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content form-horizontal form-label-left">
                        <div class="row tile_count" style="margin: 0">
                            <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                                <div class="count" style="font-size:30px;">{{number_format($confirmed->commitment)}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     --}}

        
        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Total confirmed delivery</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row tile_count" style="margin: 0">
                        <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                            <div class="count" ><i class="fa fa-check-square-o" style="margin-right:3px;" aria-hidden="true"></i>{{number_format($confirmed->total_bag_count)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Total actual delivery (20kg/bags)</h2> 
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row tile_count" style="margin: 0;">
                        <div class="col-md-7 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0; ">
                            <div class="count"><i class="fa fa-truck"></i> {{number_format($actual->total_bag_count +  $transferred_2 )}}
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-12 col-xs-12" style="padding-bottom: 0;padding-left: 0;">
                            <div class="row ml-3">
                                <div class="col-md-12 col-sm-4 col-xs-4">
                                    <div class="sub-count" id=""> <i class="fa fa-eye"> Inspected: {{number_format($actual->total_bag_count - $paymaya_delivery)}}</i>
                                      </div>
                                </div>
                                <div class="col-md-12 col-sm-4 col-xs-4">
                                    <div class="sub-count" id=""> <i class="fa fa-refresh">   Transferred (PS): {{number_format($transferred_2)}}</i>
                                      </div>
                                </div>

                                <div class="col-md-12 col-sm-4 col-xs-4">
                                    <div class="sub-count" id="">
                                        <i class="fa fa-cube">   e-Binhi: {{number_format($paymaya_delivery)}} </i> </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
		
		@if($distributed != "N/A")
			<div class="col-md-4">
				<div class="x_panel">
					<div class="x_title">
                        @if(isset($distributed->date_generated))
                        <h2>Distributed (20kg/bags) - as of <i> {{date( 'm/d/y', strtotime($distributed->date_generated))}}  </i></h2>
                            @if(Auth::user()->roles->first()->name == "rcef-programmer")
                        <button onclick="refresh_national();" style="float:right; margin-bottom:0px;" class="btn btn-success btn-sm"> <i class="fa fa-refresh" aria-hidden="true" ></i> REFRESH DATA</button>
                            @endif

                        @else
                        <h2>Distributed (20kg/bags)</h2>
                        @endif


						
						<div class="clearfix"></div>
					</div>
					<div class="x_content form-horizontal form-label-left">
						<div class="row tile_count" style="margin: 0">
							<div class="col-md-7 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
								<div class="count"><i class="fa fa-check-circle"></i> {{number_format($distributed->total_bags + $paymaya_bags)}}</div>
							</div>

                            <div class="col-md-5 col-sm-12 col-xs-12" style="padding-bottom: 0;padding-left: 0;">
                                <div class="row ml-3">
                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id=""> <i class="fa fa-cubes"> Regular: {{number_format($distributed->total_bags)}}</i>
                                         </div>
                                    </div>

                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id="">
                                          <i class="fa fa-cube">  e-Binhi: {{number_format($paymaya_bags)}} </i> </div>
                                    </div>
                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id="">
                                        <i class="fa fa-registered" aria-hidden="true"> pre-registered: {{number_format($pre_registered_data->total_bags)}} </i></div>
                                    </div>
                                </div>
                            </div>


						</div>
					</div>
				</div>
			</div>






        </div>

        <div class="col-md-12">
			<div class="col-md-4">
				<div class="x_panel">
					<div class="x_title">
						<h2>Total seed beneficiaries</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content form-horizontal form-label-left">
						<div class="row tile_count" style="margin: 0">
							<div class="col-md-7 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
								<div class="count"><i class="fa fa-users"></i> {{number_format($distributed->total_farmers + $paymaya_beneficiaries)}}</div>
							</div>

                            <div class="col-md-5 col-sm-12 col-xs-12" style="padding-bottom: 0;padding-left: 0;">
                                <div class="row ml-3">
                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id="">
                                         <i class="fa fa-cubes">    Conventional (Regular): {{number_format($distributed->total_farmers)}} </i> </div>
                                    </div>

                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id="">
                                          <i class="fa fa-cube">   e-Binhi: {{number_format($paymaya_beneficiaries)}} </i></div>
                                    </div>
                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id="">
                                        <i class="fa fa-registered" aria-hidden="true"> pre-registered: {{number_format($pre_registered_data->total_farmers)}} </i></div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Total Male</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content form-horizontal form-label-left">
                        <div class="row tile_count" style="margin: 0">
                            <div class="col-md-7 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                                <div class="count"><i class="fa fa-users"></i> {{number_format($distributed->total_male)}}</div>
                            </div>

                            <div class="col-md-5 col-sm-12 col-xs-12" style="padding-bottom: 0;padding-left: 0;">
                                <div class="row ml-3">
                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id="">
                                           <i class="fa fa-cubes">  Conventional (Regular): {{number_format($distributed->total_male)}} </i> </div>
                                    </div>

                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id=""> <i class="fa fa-cube">  e-Binhi: - </i> </div>
                                    </div>
                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id="">
                                        <i class="fa fa-registered" aria-hidden="true"> pre-registered: {{number_format($pre_registered_data->total_male)}} </i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Total Female</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content form-horizontal form-label-left">
                        <div class="row tile_count" style="margin: 0">
                            <div class="col-md-7 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                                <div class="count"><i class="fa fa-users"></i> {{number_format($distributed->total_female)}}</div>
                            </div>

                            <div class="col-md-5 col-sm-12 col-xs-12" style="padding-bottom: 0;padding-left: 0;">
                                <div class="row ml-3">
                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id="">
                                           <i class="fa fa-cubes">  Conventional (Regular): {{number_format($distributed->total_female)}} </i> </div>
                                    </div>

                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id=""> <i class="fa fa-cube"> e-Binhi: - </i> </div>
                                    </div>
                                    <div class="col-md-12 col-sm-4 col-xs-4">
                                        <div class="sub-count" id="">
                                        <i class="fa fa-registered" aria-hidden="true"> pre-registered: {{number_format($pre_registered_data->total_female)}} </i></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-12">

			 <div class="col-md-4">
				<div class="x_panel">
					<div class="x_title">
						<h2>Estimated area planted (ha)</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content form-horizontal form-label-left">
						<div class="row tile_count" style="margin: 0">
							<div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
								<div class="count"><i class="fa fa-map-marker"></i> {{number_format($distributed->total_claimed_area,'2','.',',')}}</div>
							</div>
						</div>
					</div>
				</div>
			</div> 


            <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2> Yield t/ha (42 Provinces)</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row tile_count" style="margin: 0">
                      
                         <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                            <div class="count"><i class="fa fa-bar-chart"></i>
                                {{number_format($yield_data->yield,2)}}
                                 {{-- @if($distributed->yield_ws2021 <= 0) N/A @else {{$distributed->yield_ws2021}} @endif --}}
                                 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Yield t/ha (All Provinces)</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row tile_count" style="margin: 0">
                         <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                            <div class="count"><i class="fa fa-bar-chart"></i> 
                                {{number_format($yield_data_all->yield,2)}}
                                {{-- @if($distributed->yield <= 0) N/A @else {{$distributed->yield}} @endif --}}
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
		@else
			<div class="col-md-4">
				<div class="x_panel">
					<div class="x_title">
						<h2>Processing Status</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content form-horizontal form-label-left">
						<div class="row tile_count" style="margin: 0">
							<div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
								<div class="count"><i class="fa fa-check-circle"></i> <font color="green">{{$load}} %</font> </div>
							</div>
						</div>
					</div>
				</div>
			</div>

    </div>
    <div class="col-md-12">
			<div class="col-md-4">
				<div class="x_panel">
					<div class="x_title">
						<h2>Total seed beneficiaries</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content form-horizontal form-label-left">
						<div class="row tile_count" style="margin: 0">
							<div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
								<div class="count"><i class="fa fa-users"></i> N/A</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Total Male</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content form-horizontal form-label-left">
                        <div class="row tile_count" style="margin: 0">
                            <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                                <div class="count"><i class="fa fa-users"></i> N/A</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Total Female</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content form-horizontal form-label-left">
                        <div class="row tile_count" style="margin: 0">
                            <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                                <div class="count"><i class="fa fa-users"></i> N/A</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-md-12">            


			<div class="col-md-4">
				<div class="x_panel">
					<div class="x_title">
						<h2>Estimated area planted (ha)</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content form-horizontal form-label-left">
						<div class="row tile_count" style="margin: 0">
							<div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
								<div class="count"><i class="fa fa-map-marker"></i> N/A</div>
							</div>
						</div>
					</div>
				</div>
			</div> 


            <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2> Yield t/ha (42 Provinces)</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row tile_count" style="margin: 0">
                      
                         <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                            <div class="count"><i class="fa fa-bar-chart"></i>N/A </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Yield t/ha (All Provinces)</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row tile_count" style="margin: 0">
                         <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                            <div class="count"><i class="fa fa-bar-chart"></i>N/A</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
		@endif     

        
		
		
	
		
		
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2 style="margin-top: 10px;">Delivery Schedule</h2>
                    <div class="input-group pull-right" style="width: 500px;">
                        <input type="text" name="date_of_delivery" id="date_of_delivery" class="form-control" value="{{$filter_start}} - {{$filter_end}}" />
                        <div class="input-group-btn">
                            <button class="btn btn-success" id="load_schedule_btn" style="margin:0">LOAD DELIVERIEIS</button>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left" id="delivery_sched_div">
                    @if($delivery_regions != "no_deliveries")
                        @foreach ($delivery_regions as $row)
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0" style="margin:0">
                                        <button style="color: #7387a8;text-decoration:none;" class="btn btn-link">
                                            {{$row->region}}
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#show_region_sched" data-region="{{$row->region}}" class="btn btn-warning btn-xs pull-right" style="margin-top: 9px;margin-right: 10px;"><i class="fa fa-eye"></i> View Deliveries</a>
                                    </h5>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="no_delivery_wrapper" style="width:100%;height:400px;background-color:#d8d8d8;">
                            <img src="{{asset('public/images/no_delivery.png')}}" alt="" style="display: block;margin: auto;height: 300px;padding-top: 25px;">
                            <p style="text-align: center;font-size: 26px;color:black;">No seed deliveries found for the selected dates...</p>
                        </div>
                    @endif

                    <!--<div style="width:100%;height:500px;background-color:#d8d8d8;">
                        <img src="{{asset('public/images/load_del.gif')}}" alt="" style="display: block;margin: auto;width: 100%;height:100%">
                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Participating seed cooperatives</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row tile_count" style="margin: 0">
                        <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                            <div class="count"><i class="fa fa-building"></i> {{number_format($total_coops)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Participating seed growers</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row tile_count" style="margin: 0">
                        <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                            <div class="count"><i class="fa fa-users"></i> {{number_format($total_seed_growers)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Total seed tags</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row tile_count" style="margin: 0">
                        <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="padding-bottom: 0;padding-left: 0;">
                            <div class="count"><i class="fa fa-tags"></i> {{number_format($total_seed_tags)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--DELIVERY SUMMAR -->
    <div class="row">
        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Delivery Summary</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <select class="form-control" id="region_select" name="region_select" style="margin-bottom:10px;">
                        <option value="0">Please select a Region</option>
                        @foreach ($regions as $r_row)
                            <option value="{{$r_row->region}}">{{$r_row->region}}</option>
                        @endforeach
                    </select>

                    <select class="form-control" id="province_select" name="province_select" style="margin-bottom:10px;">
                        <option value="0">Please select a province</option>
                    </select>

                    <select class="form-control" id="municipality_select" name="municipality_select" style="margin-bottom:10px;">
                        <option value="0">Please select a municipality</option>
                    </select>

                    <button class="btn btn-success form-control" id="generate_delivery_btn"><i class="fa fa-bar-chart-o"></i> GENERATE DELIVERY DATA</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Generated `Delivery Summary` data</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content form-horizontal form-label-left">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped" id="delivery_summary_table">
                                <thead>
                                    <tr>
                                        <th style="width:250px; !important">Dropoff Point</th>
                                        <th>Expected (20kg/bag)</th>
                                        <th>Accepted (20kg/bag)</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


    <div id="show_region_sched" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" style="width: 1300px; margin: auto; position: relative; top: 10%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="region_sched_title">
                        {REGION}
                    </h4>
                    <!--<span id="coop_accreditation_title">{COOP_ACCREDITATION}</span>-->
                </div>
                <div class="modal-body" style="max-height: 500px;overflow: auto;">
                    <table class="table table-bordered table-striped" id="delivery_sched_tbl">
                        <thead>
                            <th>Cooperatives</th>
                            <th>Province</th>
                            <th>Municipality</th>
                            <th>Dropoff Point</th>
                            <th>Expected</th>
                            <th>Accepted</th>
                            <th>Date of delivery</th>
                            <th>Status</th>
                        </thead>
                    </table>        
                </div>
            </div>
        </div>
    </div>

</div>

@endsection()

@push('scripts')
@endpush

@push('scripts')
<script src=" {{ asset('public/js/jquery.inputmask.bundle.js') }} "></script>
<script src=" {{ asset('public/js/select2.min.js') }} "></script>
<script src=" {{ asset('public/js/parsely.js') }} "></script>
<script src=" {{ asset('public/js/daterangepicker.js') }} "></script>

<script>
    function refresh_national(){
       
       var data = "{{$_SERVER['REQUEST_URI']}}";
       data = data.replace("/rcef_", "");
       data = data.replace("/", "");
       var url = "https://rcef-checker.philrice.gov.ph/api/midnight/national/"+data;

        HoldOn.open(holdon_options);
       $.ajax({
            type: 'GET',
            url: url,
            data: {
            },
            success: function(data){
                HoldOn.close();
            }
        });
            
    
    }


    $('#delivery_summary_table').DataTable();
    $("#date_of_delivery").daterangepicker(null,function(a,b,c){
        //console.log(a.toISOString(),b.toISOString(),c)
    });

    $("#load_schedule_btn").on("click", function(e){
        var date_duration = $("#date_of_delivery").val();
        $("#delivery_sched_div").empty();
        var delivery_div = '';

        delivery_div = delivery_div + '<div style="width:100%;height:400px;background-color:#d8d8d8;">';
        delivery_div = delivery_div + '<img src="{{asset('public/images/load_del.gif')}}" alt="" style="display: block;margin: auto;width: 100%;height:100%">';
        delivery_div = delivery_div + '</div>';
        $("#delivery_sched_div").append(delivery_div)

        $.ajax({
            type: 'POST',
            url: "{{ route('dashboard.delivery_schedule.search_regions') }}",
            data: {
                _token: "{{ csrf_token() }}",
                date_duration : date_duration,
            },
            success: function(data){
                delivery_div = '';
                $("#delivery_sched_div").empty();
                if(data == "no_deliveries"){
                    delivery_div = delivery_div + '<div class="no_delivery_wrapper" style="width:100%;height:400px;background-color:#d8d8d8;">';
                    delivery_div = delivery_div + '<img src="{{asset('public/images/no_delivery.png')}}" alt="" style="display: block;margin: auto;height: 300px;padding-top: 25px;">';
                    delivery_div = delivery_div + '<p style="text-align: center;font-size: 26px;color:black;">No seed deliveries found for the selected dates...</p>';
                    delivery_div = delivery_div + '</div>';
                    $("#delivery_sched_div").append(delivery_div)
                }else{
                    jQuery.each(data, function(index, array_value){
                        delivery_div = delivery_div + '<div class="card">';
                        delivery_div = delivery_div + '<div class="card-header" id="headingOne">';
                        delivery_div = delivery_div + '<h5 class="mb-0" style="margin:0">';
                        delivery_div = delivery_div + '<button style="color: #7387a8;text-decoration:none;" class="btn btn-link">';
                        delivery_div = delivery_div + array_value;
                        delivery_div = delivery_div + '</button>';
                        delivery_div = delivery_div + '<a href="#" data-toggle="modal" data-target="#show_region_sched" data-region="'+array_value+'" class="btn btn-warning btn-xs pull-right" style="margin-top: 9px;margin-right: 10px;"><i class="fa fa-eye"></i> View Deliveries</a>';
                        delivery_div = delivery_div + '</h5>';
                        delivery_div = delivery_div + '</div>';
                        delivery_div = delivery_div + '</div>';
                    });
                    $("#delivery_sched_div").append(delivery_div)
                }
            }
        });
    }); 

    $('#show_region_sched').on('show.bs.modal', function (e) {
        var date_duration = $("#date_of_delivery").val();
        var region = $(e.relatedTarget).data('region');

        $("#region_sched_title").empty().html("Seed Deliveries for the region of: "+region);

        $("#delivery_sched_tbl").DataTable({
            "bDestroy": true,
            "autoWidth": false,
            "searchHighlight": true,
            "processing": true,
            "serverSide": true,
            "orderMulti": true,
            "order": [],
            "ajax": {
                "url": "{{ route('dashboard.delivery_schedule.custom') }}",
                "dataType": "json",
                "type": "POST",
                "data":{
                    "_token": "{{ csrf_token() }}",
                    date_duration : date_duration,
                    region: region
                }
            },
            "columns":[
                {data: 'coop_name'},
                {data: 'province'},
                {data: 'municipality'},
                {data: 'dropOffPoint'},
                {data: 'expected_delivery_volume'},
                {data: 'actual_delivery_volume'},
                {data: 'delivery_date'},
                {data: 'status'},
            ]
        });
    });

    $("#region_select").on("change", function(e){
        var region = $(this).val();

        $("#province_select").empty().append("<option value='0'>Loading provinces please wait...</option>");
        $.ajax({
            type: 'POST',
            url: "{{ route('delivery_summary.provinces') }}",
            data: {
                _token: "{{ csrf_token() }}",
                region: region
            },
            success: function(data){
                $("#province_select").empty().append("<option value='0'>Please select a province</option>");
                $("#province_select").append(data);
            }
        });
    });

    $("#province_select").on("change", function(e){
        var region = $("#region_select").val();
        var province = $(this).val();

        $("#municipality_select").empty().append("<option value='0'>Loading municipalities please wait...</option>");
        $.ajax({
            type: 'POST',
            url: "{{ route('delivery_summary.municipalities') }}",
            data: {
                _token: "{{ csrf_token() }}",
                region: region,
                province: province
            },
            success: function(data){
                $("#municipality_select").empty().append("<option value='0'>Please select a municipality</option>");
                $("#municipality_select").append(data);
            }
        });
    });


    
    $("#refresh_national_data").on("click", function(e){
            alert("National Data is now processing, Please Wait... \n Estimated time: 10 minutes");
           $.ajax({
            type: 'POST',
            url: "{{ route('rcef.national_refresh') }}",
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function(data){
               
            }
        });

           
           $("#refresh_national_data").attr("disabled", "true");
           window.location.replace("{{route('dashboard.index')}}")

    });


    $("#generate_delivery_btn").on("click", function(e){
        var region = $("#region_select").val();
        var province = $("#province_select").val();
        var municipality = $("#municipality_select").val();

        if(region != '' && region != '0' &&
           province != '' && province != '0' &&
           municipality != '' && municipality != '0'){
                $('#delivery_summary_table').DataTable().clear();
                $("#delivery_summary_table").DataTable({
                    "bDestroy": true,
                    "autoWidth": false,
                    "searchHighlight": true,
                    "processing": true,
                    "serverSide": true,
                    "orderMulti": true,
                    "order": [],
                    "ajax": {
                        "url": "{{ route('delivery_summary.datatable') }}",
                        "dataType": "json",
                        "type": "POST",
                        "data":{
                            "_token": "{{ csrf_token() }}",
                            region: region,
                            province: province,
                            municipality: municipality
                        }
                    },
                    "columns":[
                        {data: 'dropoff_point', name: 'dropoff_point'},
                        {data: 'confirmed_delivery', name: 'confirmed_delivery'},
                        {data: 'actual_delivery', name: 'actual_delivery'},
                    ]
                });
        }else{
            alert("Please select a region, province, and municipality");
        }        
    });

    
</script>
@endpush