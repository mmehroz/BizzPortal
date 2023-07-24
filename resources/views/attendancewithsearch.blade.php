@extends('layout.apptheme')
@section('hr-HRM')



<style>

        #loader{
            display:none;
            position: fixed;
            height: 100%;
            width: 100%;
            top: 10px;
            bottom: 80px;
            left: 80px;
            background:url("https://mobilelinkusa.com/callingtree/public/images/loader1.gif");
            background-size: 10%;
            z-index: 1;
            background-color: #ffffff5c;
            background-repeat: no-repeat;
            background-position: 60% 80%;
        }
.div1{
	background: #fff;
    box-shadow: 0px 6px 16px rgb(0 0 0 / 20%);
    border-radius: 10px;
	padding: 10px;
	justify-content: space-around;
}
.span1{
	font-size: 16px;
    color: #000;
    font-weight: 800;
    font-family: 'Raleway', sans-serif;
}
.dash-widget-icons {
	background-color: #d5f3fe;
    border-radius: 100%;
    color: #101D3B;
    display: inline-block;
    font-size: 26px;
    height: 52px;
    line-height: 55px;
    /* margin-right: 10px; */
    text-align: center;
    width: 60px;
}
.form-control{
	background: #eee;
    border: #f9f9f9;
    color: #3c4858;
    font-family: 'Raleway', sans-serif;
}
label{
	color: #000;
    font-family: 'Raleway', sans-serif;
    font-size: 13px;
    font-weight: bold;
	display: block;
	text-align: center;
	padding-top: 10px;
}
select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 2px);
    text-align: center;
}
.submitbtns{
	background: #4caf50;
    color: #fff;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
	margin-top: 20px !important;
}
#field{
	display: flex;
	justify-content: center;
}
.div2{
	background: #fff;
    box-shadow: 0px 6px 16px rgb(0 0 0 / 20%);
    border-radius: 10px;
	padding: 10px;
}
.page-titleheading{
	font-family: 'Raleway', sans-serif;
	font-size: 35px;
	color: #000;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<!-- Page Wrapper -->
<div class="page-wrapper">
	<!-- Page Content -->
    <div class="content container-fluid">

		<div class="page-header">
			<div class="row">
				<div class="col-10">
					<div>
						<h5 class="page-titleheading text-center font-weight-bold">Daily BioMetric Attendance</h5> 
					</div>
				</div>
				@if(session()->get('batchid') == 1218 || session()->get('batchid') == 1071)
				<div class="col-2">
					<div>
					<span style="color: #121212 !important;
					font-weight: 600 !important;
					text-transform: capitalize !important;
					font-size: 19px !important;
					padding-right: 10px; !important">Switch Attendance Acknowledged</span>
					<label class="switch">
					<?php $settings = DB::connection('mysql')->table('settings')
					->select('settings_acknowledgedswitch')
					->first();?>
					@if($settings->settings_acknowledgedswitch == 0)
					<input type="checkbox" onclick="switchacknowledged();">
					@else
					<input type="checkbox" onclick="switchacknowledged();" checked>
					@endif
					<span class="slider round"></span>
					</label>
					<script>
					function switchacknowledged() {
						$.get('{{ URL::to("/switchacknowledged")}}');
					}
					</script>
					</div>
				</div>
				@endif
			</div>
		</div>
		<div class="row mt-2">

			<div class="col-lg-4">
				<div class="div1">
<div class="text-center"><span class="dash-widget-icons"><i class="fa fa-check-square-o"></i></span></div>
<div class="text-center" style="padding-top: 10px;"><span class="span1">Present Days</span>
	<h4 id='predays'>0</h4></div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="div1">
<div class="text-center"><span class="dash-widget-icons"><i class="fa fa-window-close"></i></span></div>
<div class="text-center" style="padding-top: 10px;"><span class="span1">OFF Days</span><h4 id='absdays'>0</h4></div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="div1">
<div class="text-center"><span class="dash-widget-icons"><i class="fa fa-star"></i></span></div>
<div class="text-center" style="padding-top: 10px;"><span class="span1">Leaves</span><h4 id='levdays'>0</h4></div>
				</div>
			</div>
</div>
		<br/>
		<!-- filter section start -->
		<div class="div2"  id="modals">
		<form id="frmeditstore">
		<div class="row">
			<div class="col-lg-3">
				<!-- <div class="div2"  id="modals"> -->
					<!-- <div> -->
					<label for="attyear">Select Year</label>
					<select id="attendanceyear" name="attendanceyear"   class="form-control" required >
						<option value="" selected="" disabled="">Select Year</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023" selected>2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
						<option value="2030">2030</option>
					</select>
				<!-- </div> -->
			</div>
			<div class="col-lg-3">
				<!-- <div> -->
					<label class="focus-label">Select Month</label>
					<select class="form-control" name="mydata" id="searchdrop">
						<option value="" selected="" disabled="">Select</option>
						<option value="01">January</option>
						<option value="02">Feburary</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
				<!-- </div> -->
			</div>
			<div class="col-lg-3">
				<?php
				if(session()->get("role") <= 2){
				$task =  DB::connection('mysql')->table('elsemployees')
				->where('elsemployees.elsemployees_status','=',2)
				->select('elsemployees.*')
				->get();
				// dd($task);
				}
				elseif(session()->get("role") == 4){
				$task =  DB::connection('mysql')->table('elsemployees')
				->where('elsemployees.elsemployees_status','=',2)
				->where('elsemployees.elsemployees_empid','=',session()->get("id"))
				->select('elsemployees.*')
				->get();
				// dd($task);
				}else{
				$task = DB::connection('mysql')->table('elsemployees')
				->where('elsemployees.elsemployees_status','=',2)
				->where('elsemployees.elsemployees_reportingto','=',session()->get("id"))
				->select('elsemployees.*')
				->get();

				}
				?>
				<!-- <div> -->
					<label class="focus-label">Select Employee</label>
					<style>
						:not(.input-group)>.bootstrap-select.form-control:not([class*=col-]) {
							width: 100% !important;
						}
					</style>
					<select class="form-control selectpicker" data-width="fit" id="addtm1" data-live-search="true" placeholder="Enter TM Name" name="emp_report"  required>
						@if(session()->get('role') == 3)
						<option value={{session()->get('batchid')}}>{{session()->get('name')}}-{{session()->get('batchid')}}</option>
						@endif
						@foreach($task as $mnger)
						<option value={{$mnger->elsemployees_batchid}}>{{$mnger->elsemployees_name}}-{{$mnger->elsemployees_batchid}}</option>
						@endforeach 
					</select>
				<!-- </div> -->
			</div>
			<div class="col-lg-3">
			<label class="focus-label"></label>
				<div id="field"></div>
			</div>
		</div>
		</form>
		
	</div>
		
		<!-- filter section end -->
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<div id="loader"></div>		
					<div id="dynamicdata">
						
					</div>
				</div>
			</div>
		</div>		
		</div>
		<!-- /Page Content -->

    </div>
	<!-- /Page Wrapper -->

</div>
<script>
	
	$('document').ready(function(){
		function showdata(){
					$("#loader").show();
					
					$.get('{{ URL::to("/attendancedashboarddata")}}',function(data){
						
						$('#dynamicdata').empty().append(data);
						
						$("#loader").hide();
						
						});
				}
				
		showdata();
		
		$('#searchdrop').on('change',function(){
					var dropdown = $(this).attr('name');
					var dropdownval = $(this).val();
					
					if(dropdownval){
						$("#field").html("<input class='btn submitbtns' type='submit'>");
					}else{
						$("#field").html("<div><h2>Invalid Type</h2></div>");
					}
			});
		
		$('#modals').on('submit','#frmeditstore',function(e){
				
				$("#loader").show();
				e.preventDefault();
				
				
				var $inputs = $('#frmeditstore :input');
				
				
				
				var values = {};
				$inputs.each(function() {
					values[this.name] = $(this).val();
				});
				
				console.log(values['emp_report']);
				
				
				dampa=values['mydata'];
				yampa=values['attendanceyear'];

				vampa=values['emp_report'];
				
				// console.log($(this).serialize());
				
				$.get('{{ URL::to("/attendancedashboardsearchmonth")}}/'+yampa+'/'+dampa+'/'+vampa,function(data){
					
					$('#dynamicdata').empty().append(data);
					
					$("#loader").hide();
					
				})
			});
		
		$("#dynamicdata").on('click','.pagination a ',function(e){
					$("#loader").show();
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.get(url,function(data){
                    $('#dynamicdata').empty().append(data);
					$("#loader").hide();
					});
				});
		
	});
</script>	
<!-- /Main Wrapper -->

@endsection