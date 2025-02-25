<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="robots" content="noindex, nofollow">
	<title>PRE EMPLOYMENT APPLICATION FORM - HRMS</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&amp;family=Raleway&amp;family=Roboto:wght@500&amp;display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{!! asset('public/favicon/favicon.png') !!}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{!! asset('public/assets/css/bootstrap.min.css') !!}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{!! asset('public/assets/css/font-awesome.min.css') !!}">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="{!! asset('public/assets/css/line-awesome.min.css') !!}">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="{!! asset('public/assets/css/dataTables.bootstrap4.min.css') !!}">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{!! asset('public/assets/css/select2.min.css') !!}">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{!! asset('public/assets/css/bootstrap-datetimepicker.min.css') !!}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{!! asset('public/assets/css/style.css') !!}">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
		rel="stylesheet" />

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
			.card{
				box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
				margin: 35px 72px;
    border-radius: 15px !important;
	border: none;
			}
			select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 2px);
    height: 55px;
    font-family: 'Raleway', sans-serif;
	
}
.card-body{
	background: #edf2f5;
}
.card-header {
    background-color: #ebebeb;
    text-align: center;
    border-radius: 5px !important;
 
}
.card-header h4{
	font-family: 'Raleway', sans-serif;
    color: #000;
    font-weight: 800;
    font-size: 25px;
    text-align: center;
	letter-spacing: 2px;
}
			.form-control {
    /* border-color: #0f1431; */
    border: none;
    border-radius: 5px;
    color: black;
    background-color: white;
    box-shadow: none;
    font-size: 14px;
    font-weight: 700;
    height: 55px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
    color: #4c4c4c;
    font-size: 15px;
    
    font-family: 'Raleway', sans-serif;
    /* font-family: poppins; */
    /* font-weight: 500; */
}
.form-check-label{
	font-size: 16px;
    color: #121212;
    font-weight: 600;
    font-family: 'Raleway', sans-serif;
}
button.btn.mybtn {
    background: #9A192E;
    COLOR: #FFF;
    font-family: 'Raleway', sans-serif;
    font-size: 16px;
    font-weight: bold;
}
input[type="file"] {
    height: 65px;
    padding-top: 18px;
}
.form-control:disabled, .form-control[readonly] {
    background-color: #fff;
    opacity: 1;
}
.submitbtn{
	background-color: #9A192E;
    color: #fff;
    width: 15%;
    height: 50px;
    margin-top: 25px;
}
.table {
    color: #4c4c4c;
    text-transform: capitalize;
	font-family: 'Raleway', sans-serif;
}
.tablep{
	color: #121212;
    text-transform: capitalize;
    font-family: 'Raleway', sans-serif;
    font-size: 18px;
    font-weight: 600;
}
.page-title-box {
 text-align: center !important;
 float: none !important;
}
.headerheading{
	text-align: center !important;
	color: #fff;
	font-family: 'Raleway', sans-serif;
	padding-top:5px
}
.mainheader{
	background-image: linear-gradient(to right bottom, #6416ec, #33e0e0) !important;
	padding-top: 10px;
	padding-bottom: 10px;
	position: sticky;
    position: -webkit-sticky;
    top: 0;
	z-index: 999;
}
.maincontainer{
	margin-top: 20px;
}
.logo img{
	width:35%
}
.logouttext{
	font-size: 17px;
						
						font-family: 'Raleway', sans-serif;
}
@media only screen and (max-width: 720px) {
	.maincontainer{
	margin-top: 0px;
}
.card{
				
				margin: 5px 2px;
	
}
.headerheading{
	font-size: 14px;
	margin-top: 15px;
	text-align: left !important;
    font-weight: bold;
}
.logo img{
	width:30%
}
.logouttext{
	font-size: 15px;
	font-weight: bold;
}
.logoutcolum{
	margin-top: 12px;
}
.submitbtn {
    width: 100%;
}
.tablep{
	font-size: 12px;
}
}
			</style>
</head>
    <body>	
		<!-- Main Wrapper -->
        <div class="main-wrapper">		
			<!-- Header -->
           <div class="mainheader">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-12">
							<a href="{{url('/canLogin')}}" class="logo">
								<img src="{!! asset('public/images/logo.svg') !!}">
							</a>
						</div>
						<div class="col-lg-6 col-9 pt-1">
							<h3 class="headerheading">Human Resource Management</h3>
						</div>
						<!-- <div class="col-lg-3 text-right col-3 pt-1 logoutcolum">
							<a class="text-white logouttext" href="{{url('/canLogin')}}">Logout</a>
						</div> -->
					</div>
					
				</div>
				<!-- Logo -->
			
				<!-- /Logo -->
				<!-- Header Title -->
		
			
				<!-- /Header Title -->
				<!-- Header Menu -->
				
				<!-- /Header Menu -->
				<!-- Mobile Menu -->
		
				<!-- /Mobile Menu -->
			</div>
			<!-- /Header -->			
            <div class="content container-fluid">
            	<div class="page-header">
					<div class="row">
						<div class="col">
							
							
							@if(session('message'))
								<div class="alert alert-success" ><h4>{!!session('message')!!}</h4></div> 
						  
							@endif
							
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<div><h4><li>{{ $error }}</li></h4> </div>
									@endforeach
								</ul>
							</div>
							@endif
						</div>
					</div>
				</div>
				<form action="{{ URL::to('')}}" method="POST" class="form-horizontal"enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-12">
						<div class="card flex-fill">
							<div class="card-header">
								<h4 class="card-title mb-0 text-center">Employment Application Form</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<input type="hidden" name="can_id" value="{{ $data['userdata']->jobapplicant_id }}" />
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Position Applied For</label>
											<input type="text" class="form-control" name="can_postionapppliedform" value="{{old('can_postionapppliedform', @$data['userdata']->jobapplicant_postionapppliedform)  }}" readonly />
												<!-- <select class="form-control selectpicker form-control" placeholder="Select Store Name" data-live-search ="true"  readonly >
												<option value="" >Select the Following</option>
											   <option value="hrheadus" @if( $data['userdata']->jobapplicant_postionapppliedform == "hrheadus") {{ "selected"}} @endif >Head of HR (US Operation)</option>
											   <option value="manhrus" @if( $data['userdata']->jobapplicant_postionapppliedform == "manhrus") {{ "selected"}} @endif >Manager HR (US Operation)</option>
											   <option value="shapoidev" @if( $data['userdata']->jobapplicant_postionapppliedform == "shapoidev") {{ "selected"}} @endif >Share Point Developer</option>
											   <option value="dotnetdev" @if( $data['userdata']->jobapplicant_postionapppliedform == "dotnetdev") {{ "selected"}} @endif >Dot Net Developer</option>
											   <option value="axdyndev" @if( $data['userdata']->jobapplicant_postionapppliedform == "axdyndev") {{ "selected"}} @endif >AX Dynamic Developer</option>
											   <option value="fiexe" @if( $data['userdata']->jobapplicant_postionapppliedform == "fiexe") {{ "selected"}} @endif >Finance Executive</option>
											   <option value="fiaman" @if( $data['userdata']->jobapplicant_postionapppliedform == "fiaman") {{ "selected"}} @endif >Finance Manager</option>
											   <option value="treamana" @if( $data['userdata']->jobapplicant_postionapppliedform == "treamana") {{ "selected"}} @endif >Treasury Manager</option>
											   <option value="intaudmana" @if( $data['userdata']->jobapplicant_postionapppliedform == "intaudmana") {{ "selected"}} @endif >Internal Audit Manager</option>
											   <option value="hrexe" @if( $data['userdata']->jobapplicant_postionapppliedform == "hrexe") {{ "selected"}} @endif >HR Executive</option>
											   <option value="recurus" @if( $data['userdata']->jobapplicant_postionapppliedform == "recurus") {{ "selected"}} @endif >Recruiter (US Operation)</option>
											   <option value="mainsup" @if( $data['userdata']->jobapplicant_postionapppliedform == "mainsup") {{ "selected"}} @endif >Maintenance & Support Executive</option>
											   <option value="hedsur" @if( $data['userdata']->jobapplicant_postionapppliedform == "hedsur") {{ "selected"}} @endif >Head of Surveillance </option>
											   <option value="hdofad" @if( $data['userdata']->jobapplicant_postionapppliedform == "hdofad") {{ "selected"}} @endif >Head of Administration</option>
											   <option value="genecvsub" @if( $data['userdata']->jobapplicant_postionapppliedform == "genecvsub") {{ "selected"}} @endif >General/ CV Submission</option>
											   <option value="ushrpayspea" @if( $data['userdata']->jobapplicant_postionapppliedform == "ushrpayspea") {{ "selected"}} @endif >US HR Payroll Specialist</option>
											</select>  -->
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Career Level.*</label>
											<select class="form-control selectpicker form-control" placeholder="Select Store Name" data-live-search ="true"  	 readonly >
											   <option value="" >Select the Following</option>
											   <option value="stusclcol" @if( $data['userdata']->jobapplicant_careerlevel == "stusclcol") {{ "selected"}} @endif >Student (School/College)</option>
											   <option value="undgra" @if( $data['userdata']->jobapplicant_careerlevel == "undgra") {{ "selected"}} @endif >Student (Undergrad./Grad.)</option>
											   <option value="entlev" @if( $data['userdata']->jobapplicant_careerlevel == "entlev") {{ "selected"}} @endif >Entry Level</option>
											   <option value="expnomana" @if( $data['userdata']->jobapplicant_careerlevel == "expnomana") {{ "selected"}} @endif >Experienced (Non-Managerial)</option>
											   <option value="manasup" @if( $data['userdata']->jobapplicant_careerlevel == "manasup") {{ "selected"}} @endif >Manager/Supervisor</option>
											   <option value="hod" @if( $data['userdata']->jobapplicant_careerlevel == "hod") {{ "selected"}} @endif >Head of Department</option>
											   <option value="srexe" @if( $data['userdata']->jobapplicant_careerlevel == "srexe") {{ "selected"}} @endif >Sr. Executive (CEO/President)</option>
											</select> 
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Department.*</label>
											<select class="form-control selectpicker form-control" placeholder="Select Store Name" data-live-search ="true"  name="subdeptname"  readonly >
											<option value="" >Select the Following</option>
											@foreach($data['department'] as $val) 
												   <option value="{{ $val->dept_id }} "  @if( $data['userdata']->jobapplicant_department == $val->dept_id) {{ "selected"}} @endif >{{ $val->dept_name }}</option>
											@endforeach
											</select>
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Sub Department.*</label>
											<input type="text"  min='1' class="form-control"  value="-" readonly />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Current  Salary RS.</label>
											<input type="number"  min='1' class="form-control"  value="{{old('can_currentsalary', @$data['userdata']->jobapplicant_currentsalary)  }}" readonly />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Monthly Expected Salary RS.</label>
												<input type="number"  min='1' class="form-control"  value="{{old('can_monthlyexpectedsalary', @$data['userdata']->jobapplicant_monthlyexpectedsalary)  }}" readonly />
											</div>
										</div>
									
								
									
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Reason To Left Last Job</label>
												<input type="text" class="form-control"  value="{{old('can_reasonofleave', @$data['userdata']->jobapplicant_reasonofleave)  }}" readonly />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Current Benefits</label>
											<input type="text" class="form-control"  value="{{old('can_remarksofleave', @$data['userdata']->jobapplicant_remarksofleave)  }}" readonly />
										</div>
									</div>	
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Period Required For Joining</label>
											<input type="text" class="form-control"  value="{{old('can_periodjoining', @$data['userdata']->jobapplicant_periodjoining ) }}" readonly />
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
										    <label class="col-form-label">Select Condition</label>
											<div class="col-lg-9">
												<p class="form-check form-check-inline form-check-label" >{{ $data['userdata']->jobapplicant_negotiablesalary }} </p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class=" col-form-label">Comfortable / Agreed for Night Shift?</label>
											<div class="col-lg-9">
												<div class="form-check form-check-inline">
													
												<p class="form-check form-check-inline form-check-label">{{ $data['userdata']->jobapplicant_nightshift }} </p>
													
												</div>
											</div>
										</div>
									</div>
																 
									<div class="col-md-4">
										<div class="form-group">
											<label class=" col-form-label">Communication Skills</label>
											<div class="col-lg-12">
												<p class="form-check form-check-inline form-check-label">{{ $data['userdata']->jobapplicant_communicationskills }} </p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
								
									<div class="col-md-4">
										<label class="col-form-label">Candidate C.V</label><br/>
										<a href="{{ URL::to('public/file/')}}/{{$data['userdata']->jobapplicant_cv}}" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Download</a>
									</div>
									<div class="col-md-4">
										<label class="col-form-label">Candidate Picture</label><br/>
										<div class="">
											<div class="">
												<img src="{{ URL::to('public/img/')}}/{{$data['userdata']->jobapplicant_picture}}" style="width: 60px; height: 60px; border-radius: 45px;" />
											</div>
										</div>
									</div>
								</div>
							</div>
			        	</div>
			    	</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h4 class="card-title mb-0">Educational Record</h4>
							</div>
							<div class="card-body">
								<div id="msg5">
					                   <p class="msg4 alert"></p>
					            </div> 
					            
								<div class="table-responsive">
						            <table class="table table-bordered" id="preempform">
						                <thead>
				            			<p class="tablep">EDUCATIONAL / PROFESSIONAL QUALIFICATIONS: (LIST THE LAST ONE FIRST)</p>
						                  <tr>
						                    <th  style="white-space: nowrap;">S.NO.</th>
						                    <th  style="white-space: nowrap;">CERTIFICATE/DEGREE</th>
						                    <th  style="white-space: nowrap;">Year</th>
						                    <th  style="white-space: nowrap;">REGULAR/ PRIVATE</th>
						                    <th  style="white-space: nowrap;">MAJOR SUBJECTS</th>
						                    <th  style="white-space: nowrap;">DIVISION/GRADE</th>
						                    <th  style="white-space: nowrap;">NAME OF INSTITUTION</th>
						                    
						                  </tr>
						                  <tr>
						                  </tr>
						                </thead>
						                <tbody>
											
										<?php
												
												
												
				
												$edu_edu_cerdeg = explode("~",$data['userdata']->jobapplicant_edu_cerdeg);
												
												$edu_sno = explode("~",$data['userdata']->jobapplicant_edu_sno);
												
												$edu_year = explode("~",$data['userdata']->jobapplicant_edu_year);
												
												$edu_regpri = explode("~",$data['userdata']->jobapplicant_edu_regpri);
												
												$edu_majsub = explode("~",$data['userdata']->jobapplicant_edu_majsub);
												
												$edu_divgra = explode("~",$data['userdata']->jobapplicant_edu_divgra);
												
												$edu_institute = explode("~",$data['userdata']->jobapplicant_edu_institute);
												
												$sjhd = 0 ; 
												
												$vals = count($edu_edu_cerdeg);
												
												
											?>
											
										
											@if($edu_edu_cerdeg)
											
											@for($cnt = 1; $cnt <= $vals; $cnt++)
											<tr>
											<td><input type='number' step='any' class='form-control required_colom' required='required' placeholder='' value="{{$cnt}}" readonly /></td>
											<td><input type='text' step='any'     class='form-control required_colom' value="{{ old('can_edu_cerdeg[$sjhd]', @$edu_edu_cerdeg[$sjhd] ) }}" readonly /></td>
											<td><input type='text' step='any'   class='form-control required_colom' value="{{ old('can_edu_year[$sjhd]', @$edu_year[$sjhd] ) }}" readonly /></td>
											<td><input type='text' id='' step='any'   class='form-control required_colom address' value="{{ old('can_edu_regpri[$sjhd]', @$edu_regpri[$sjhd] ) }}" readonly /></td>
											<td><input type='text' step='any'     class='form-control required_colom' value="{{ old('can_edu_majsub[$sjhd]', @$edu_majsub[$sjhd] ) }}" readonly /></td>
											<td><input type='text' step='any'      class='form-control required_colom' value="{{ old('can_edu_divgrass[$sjhd]', @$edu_divgra[$sjhd] ) }}" readonly /></td>
											<td><textarea   class='form-control' readonly >{{old('can_edu_institute[$sjhd]', @$edu_institute[$sjhd] ) }}</textarea></td>
											
											@if($cnt != 1)
											
											@endif
											</tr>
											<?php  $sjhd++ ; ?>
											@endfor
										@else
										@endif
										
						              	</tbody>
						            </table>
					            </div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h4 class="card-title mb-0">Employment Record</h4>
							</div>
							<div class="card-body">
								<div id="msg5">
					                   <p class="msg4 alert"></p>
					            </div> 
									
								<div class="table-responsive">
						             <table class="table table-bordered" id="preempformj">
						                <thead>
				            			<p class="tablep">(LIST THE LAST ONE FIRST)</p>
						                  <tr>
						                    <th  style="white-space: nowrap;">S.NO.</th>
						                    <th  style="white-space: nowrap;">NAME OF ORGANIZATION</th>
						                    <th  style="white-space: nowrap;">PERIOD FROM</th>
						                    <th  style="white-space: nowrap;">PERIOD TO</th>
						                    <th  style="white-space: nowrap;">POSITION START</th>
						                    <th  style="white-space: nowrap;">POSITION LAST</th>
						                    <th  style="white-space: nowrap;">GROSS SALARY START</th>
						                    <th  style="white-space: nowrap;">GROSS SALARY LAST</th>
						                    <th  style="white-space: nowrap;">REASON(S) FOR LEAVING</th>
						                    
						                  </tr>
						                  <tr>
						                  </tr>
						                </thead>
						                <tbody>
										<?php
												
												
												
				
												$empreport_org = explode("~",$data['userdata']->jobapplicant_empreport_org);
												
												$empreport_sno = explode("~",$data['userdata']->jobapplicant_empreport_sno);
												
												$empreport_perfrom = explode("~",$data['userdata']->jobapplicant_empreport_perfrom);
												
												$empreport_perto = explode("~",$data['userdata']->jobapplicant_empreport_perto);
												
												$empreport_posstart = explode("~",$data['userdata']->jobapplicant_posstart);
												
												$empreport_last = explode("~",$data['userdata']->jobapplicant_last);
												
												$empreport_grossalarystart = explode("~",$data['userdata']->jobapplicant_grossalarystart);
												
												$empreport_grossalarylast = explode("~",$data['userdata']->jobapplicant_grossalarylast);
												
												$empreport_reasoleave = explode("~",$data['userdata']->jobapplicant_reasoleave);
												
												$sjhsdd = 0 ; 
												
												$val = count($empreport_org);
												
												
											?>
											
										
											@if($empreport_org)
											
											@for($cnt = 1; $cnt <= $val ; $cnt++)
											<tr>
											<td><input type='number' step='any' class='form-control required_colom' required='required' placeholder='' value="{{$cnt}}" readonly /></td>
											<td><input type='text' step='any'   class='form-control required_colom' value="{{ old('can_empreport_org[$sjhsdd]', @$empreport_org[$sjhsdd] ) }}" readonly /></td>
											<td><input type='text' step='any'    class='form-control required_colom' value="{{ old('can_empreport_perfrom[$sjhsdd]', @$empreport_perfrom[$sjhsdd] ) }}" readonly /></td>
											<td><input type='text' id='' step='any'    class='form-control required_colom address' value="{{ old('can_empreport_perto[$sjhsdd]', @$empreport_perto[$sjhsdd] ) }}" readonly /></td>
											<td><input type='text' step='any'   class='form-control required_colom' value="{{ old('can_empreport_posstart[$sjhsdd]', @$empreport_posstart[$sjhsdd] ) }}" readonly /></td>
											<td><input type='text' step='any'   class='form-control required_colom' value="{{ old('can_empreport_last[$sjhsdd]', @$empreport_last[$sjhsdd] ) }}" readonly /></td>
											<td><input type='number' step='any'   class='form-control required_colom' value="{{ old('can_empreport_grossalarystart[$sjhsdd]', @$empreport_grossalarystart[$sjhsdd] ) }}" readonly /></td>
											<td><input type='number' step='any'   class='form-control required_colom' value="{{ old('can_empreport_grossalarylast[$sjhsdd]', @$empreport_grossalarylast[$sjhsdd] ) }}" readonly /></td>
											<td><textarea  class='form-control' readonly >{{ old('can_empreport_reasoleave[$sjhsdd]', @$empreport_reasoleave[$sjhsdd] ) }}</textarea></td>
											@if($cnt != 1)
											
											@endif
											</tr>
											<?php  $sjhsdd++ ; ?>
											@endfor
										@else
										@endif
										
						              </tbody>
						            </table>
					            </div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="card flex-fill">
							<div class="card-header">
								<h4 class="card-title mb-0">Personal Details</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Name</label>
											<input type="text" class="form-control"  value="{{old('can_name', @$data['userdata']->jobapplicant_name)  }}" readonly  />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">FATHER'S/HUSBAND'S Name</label>
											<input type="text" class="form-control"  value="{{old('can_fathername', @$data['userdata']->jobapplicant_fname)  }}" readonly />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Gender</label>
											<input type="text" class="form-control"  value="{{old('can_fathername', @$data['userdata']->jobapplicant_gender)  }}" readonly />
										</div>
									</div>
								</div>
							
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">MOBILE #</label>
											<input type="tel" class="form-control" minlength="11" maxlength="11" min="0"  value="{{old('can_mobileno', @$data['userdata']->jobapplicant_contact ) }}" readonly />
											
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">RES/OFFICE #</label>
											<input type="tel" class="form-control" minlength="11" maxlength="11" min="0"  value="{{old('can_officeno', @$data['userdata']->jobapplicant_officeno ) }}" readonly />
											
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">DATE OF BIRTH</label>
											<input class="form-control " type="date"  value="{{old('can_dob', @$data['userdata']->jobapplicant_dob ) }}" readonly >
										</div>
									</div>
								
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">AGE</label>
											<input class="form-control " type="number" min="1"  value="{{old('can_age', @$data['userdata']->jobapplicant_age ) }}" readonly >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">PLACE OF BIRTH</label>
											<input class="form-control " type="text"  value="{{old('can_placeob', @$data['userdata']->jobapplicant_placeob ) }}" readonly >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">N.I.C NO</label>
											<input class="form-control " type="number" minlength="13" maxlength="13" min="13"  value="{{old('can_nic', @$data['userdata']->jobapplicant_cnic ) }}" readonly>
											
										</div>
									</div>
								
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">EMAIL</label>
											<input class="form-control " type="email"  value="{{old('can_email', @$data['userdata']->log_email ) }}" readonly   >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Reference</label>
											<input class="form-control" type="text"  value="{{old('can_nationality', @$data['userdata']->jobapplicant_reference  ) }}" readonly >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">NATIONALITY</label>
											<input class="form-control" type="text"  value="{{old('can_nationality', @$data['userdata']->jobapplicant_nationality  ) }}" readonly >
										</div>
									</div>
								
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="col-form-label">RELIGION</label> 
													<input class="form-control" type="text" value="{{old('can_religion', @$data['userdata']->jobapplicant_religion)  }}" readonly >
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="col-form-label">MARITAL STATUS</label>
													<input class="form-control" type="text"  value="{{old('can_martialstatus', @$data['userdata']->jobapplicant_martialstatus ) }}" readonly >
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="col-form-label">OCCUPATION</label>
													<input type="text" class="form-control"  value="{{old('can_occupation', @$data['userdata']->jobapplicant_occupation ) }}" readonly >
												</div>
											</div>
											<div class="col-md-4">
													<div class="form-group">
														<label class="col-form-label">Employee Status</label>
														<input type="text" class="form-control"  value="{{old('can_occupation', @$data['userdata']->jobapplicant_status ) }}" readonly >
													</div>
												</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="col-form-label">Social Media Links</label>
													<input type="text" class="form-control"  value="{{old('jobapplicant_socialmedialinks', @$data['userdata']->jobapplicant_socialmedialinks ) }}" readonly >
												</div>
											</div>
									</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="col-form-label">ADDRESS (Permanent)</label>
													<input type="text" class="form-control"  value="{{old('can_address', @$data['userdata']->jobapplicant_address)  }}" readonly />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="col-form-label">ADDRESS (Temporary)</label>
													<input type="text" class="form-control"  value="{{old('can_addresstemporaray', @$data['userdata']->jobapplicant_addresstemporaray)  }}" readonly />
												</div>
											</div>
										</div>
								</form>
								</div>
							
						</div>
					</div>					
	            </div>
	            <br>
		<!-- /Main Wrapper -->
		<!-- jQuery -->
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/popper.min.js"></script>
        <script src="https://dreamguys.co.in/smarthr/maroon/assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/select2.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/jquery.dataTables.min.js"></script>
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/moment.min.js"></script>
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Custom JS -->
		<script src="https://dreamguys.co.in/smarthr/maroon/assets/js/app.js"></script>


		<!-- for add rows -->

		

		<!-- for add rows -->
		
    </body>


</html>