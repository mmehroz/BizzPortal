<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="robots" content="noindex, nofollow">
        <title>PRE EMPLOYMENT APPLICATION FORM - HRMS</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{!! asset('public/assets/img/favicon.png') !!}">
		
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
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
		
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
    background-color: #101D3B;
    text-align: center;
    border-radius: 5px !important;
 
}
.card-header h4{
	font-family: 'Raleway', sans-serif;
    color: #fff;
    font-weight: 800;
    font-size: 25px;
    text-align: center;
	letter-spacing: 2px;
}
			.form-control {
    /* border-color: #101D3B; */
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
    background: #00A86B;
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
	background-color: #101D3B;
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
.table-responsive p{
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
}
.mainheader{
	background-color: #101D3B;
	padding-top: 15px;
	padding-bottom: 15px;
}
			</style>
    </head>
    <body>	
		<!-- Main Wrapper -->
        <div class="main-wrapper">		
			<!-- Header -->
            <div class="mainheader">			
				<!-- Logo -->
                <div class="header-left">
                    <a href="{{url('/canLogin')}}"class="logo">
						<img src="{!! asset('public/assets/img/final-logo.png') !!}" width="120" height="60" alt="">
					</a>
                </div>
				<!-- /Logo -->				
				<!-- Header Title -->
                <div class="headerheading">
					<h3>Human Resource Management</h3>
                </div>
				<!-- /Header Title -->				
				<!-- Header Menu -->
				<ul class="nav user-menu">				
					<!-- Search -->					
					<!-- /Search -->				
					<!-- Flag -->					
					<!-- /Flag -->					
					<li class="nav-item">
						<a class="nav-link" href="{{url('/canLogin')}}">Logout</a>
					</li>
				</ul>
				<!-- /Header Menu -->
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="{{url('/canLogin')}}">Logout</a>
					</div>
				</div>
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
				<div class="row">
					<div class="col-md-12">
						<div class="card flex-fill">
							<div class="card-header">
								<h4 class="card-title mb-0 text-center">PRE-EMPLOYMENT APPLICATION FORM</h4>
							</div>
							<form action="{{ URL::to('/submitjobapplicant')}}" method="POST" class="form-horizontal"enctype="multipart/form-data">
							@csrf
							<div class="card-body">
								<div class="row">
									<input type="hidden" name="can_log_id" value="{{ $data['userdata']->log_id }}" />
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Position Applied For.*</label>
											<select class="form-control selectpicker form-control" placeholder="Select Store Name" data-live-search ="true" id name="can_postionapppliedform"  required >
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
											</select> 
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Career Level.*</label>
											<select class="form-control selectpicker form-control" placeholder="Select Store Name" data-live-search ="true"  name="carlev"  required >
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
											<select class="form-control selectpicker form-control" onChange="getedit(this.value);" placeholder="Select Store Name" data-live-search ="true"  name="deptname" @if($data['userdata']->jobapplicant_department) readonly @else	 required @endif >
											<option value="" >Select the Following</option>
											@foreach($data['department'] as $val) 
												   <option value="{{ $val->dept_id }} "  @if( $data['userdata']->jobapplicant_department == $val->dept_id) {{ "selected"}} @endif >{{ $val->dept_name }}</option>
											@endforeach
											
											   <!--<option value="f&i" @if( $data['userdata']->jobapplicant_sub_department == "f&i") {{ "selected"}} @endif >Finance & Accounts</option>
											   <option value="hrm" @if( $data['userdata']->jobapplicant_sub_department == "hrm") {{ "selected"}} @endif >Human Resources Management</option>
											   <option value="admin" @if( $data['userdata']->jobapplicant_sub_department == "admin") {{ "selected"}} @endif >Administration</option>
											   <option value="surv" @if( $data['userdata']->jobapplicant_sub_department == "surv") {{ "selected"}} @endif >Surveillance</option>
											   <option value="mis" @if( $data['userdata']->jobapplicant_sub_department == "mis") {{ "selected"}} @endif >MIS</option>
											   <option value="m&s" @if( $data['userdata']->jobapplicant_sub_department == "m&s") {{ "selected"}} @endif >Maintenance & Support</option>
											   <option value="opr" @if( $data['userdata']->jobapplicant_sub_department == "opr") {{ "selected"}} @endif >Operations</option>
											   <option value="scm" @if( $data['userdata']->jobapplicant_sub_department == "scm") {{ "selected"}} @endif >Supply Chain Management</option>
											   <option value="web" @if( $data['userdata']->jobapplicant_sub_department == "web") {{ "selected"}} @endif >Web Development </option>
											   <option value="it" @if( $data['userdata']->jobapplicant_sub_department == "it") {{ "selected"}} @endif >Information Technology </option>
											   <option value="sales" @if( $data['userdata']->jobapplicant_sub_department == "sales") {{ "selected"}} @endif >Sales </option>
											   <option value="intaud" @if( $data['userdata']->jobapplicant_sub_department == "intaud") {{ "selected"}} @endif >Internal Audit</option>
											   <option value="mark" @if( $data['userdata']->jobapplicant_sub_department == "mark") {{ "selected"}} @endif >Marketing</option>
											   <option value="legal" @if( $data['userdata']->jobapplicant_sub_department == "legal") {{ "selected"}} @endif >Legal</option>
											   <option value="qc" @if( $data['userdata']->jobapplicant_sub_department == "qc") {{ "selected"}} @endif >Quality Control</option>
											   <option value="bd" @if( $data['userdata']->jobapplicant_sub_department == "bd") {{ "selected"}} @endif >Business Development</option>
											   <option value="r&d" @if( $data['userdata']->jobapplicant_sub_department == "r&d") {{ "selected"}} @endif >Research & Development</option>--->
											</select> 
										</div>
									</div>
								
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<div class='form-group' id="p">

											</div>
										
											<!--<label class="col-form-label">Sub Department.*</label>
											<select class="form-control selectpicker form-control" placeholder="Select Store Name" data-live-search ="true"  name="deptname"  required >
											
											
											  <option value="" >Select the Following</option>
											   <option value="tax" @if( $data['userdata']->jobapplicant_department == "tax") {{ "selected"}} @endif >Taxation</option>
											   <option value="pay" @if( $data['userdata']->jobapplicant_department == "pay") {{ "selected"}} @endif >Payable </option>
											   <option value="receive" @if( $data['userdata']->jobapplicant_department == "receive") {{ "selected"}} @endif >Receivable</option>
											   <option value="treasure" @if( $data['userdata']->jobapplicant_department == "treasure") {{ "selected"}} @endif >Treasury</option>
											   <option value="ficialrep" @if( $data['userdata']->jobapplicant_department == "ficialrep") {{ "selected"}} @endif >Financial Reporting</option>
											   <option value="fiana" @if( $data['userdata']->jobapplicant_department == "fiana") {{ "selected"}} @endif >Finance Analyst</option>
											   <option value="impexp" @if( $data['userdata']->jobapplicant_department == "impexp") {{ "selected"}} @endif >Export & Import</option>
											   <option value="proper" @if( $data['userdata']->jobapplicant_department == "proper") {{ "selected"}} @endif >Property</option>
											   <option value="rec&sel" @if( $data['userdata']->jobapplicant_department == "rec&sel") {{ "selected"}} @endif >Recruitment & Selection</option>
											   <option value="compbene" @if( $data['userdata']->jobapplicant_department == "compbene") {{ "selected"}} @endif >Compensation & Benefit</option>
											   <option value="tra&dev" @if( $data['userdata']->jobapplicant_department == "tra&dev") {{ "selected"}} @endif >Training & Development</option>
											   <option value="orgdev" @if( $data['userdata']->jobapplicant_department == "orgdev") {{ "selected"}} @endif >Organizational Development</option>
											   <option value="payman" @if( $data['userdata']->jobapplicant_department == "payman") {{ "selected"}} @endif >Payroll Management</option>
											   <option value="hrop" @if( $data['userdata']->jobapplicant_department == "hrop") {{ "selected"}} @endif >HR Operations</option>
											   <option value="secur" @if( $data['userdata']->jobapplicant_department == "secur") {{ "selected"}} @endif >Security</option>
											   <option value="geneadm" @if( $data['userdata']->jobapplicant_department == "geneadm") {{ "selected"}} @endif >General Administration</option>
											   <option value="ofcadm" @if( $data['userdata']->jobapplicant_department == "ofcadm") {{ "selected"}} @endif >Office Administration</option>
											   <option value="cctvop" @if( $data['userdata']->jobapplicant_department == "cctvop") {{ "selected"}} @endif >CCTV Operations</option>
											   <option value="cctvtech" @if( $data['userdata']->jobapplicant_department == "cctvtech") {{ "selected"}} @endif >CCTV Technicians</option>
											   <option value="inve" @if( $data['userdata']->jobapplicant_department == "inve") {{ "selected"}} @endif >Investigation</option>
											   <option value="dotnet" @if( $data['userdata']->jobapplicant_department == "dotnet") {{ "selected"}} @endif >DOT Net</option>
											   <option value="pyt" @if( $data['userdata']->jobapplicant_department == "pyt") {{ "selected"}} @endif >Python</option>
											   <option value="axdy" @if( $data['userdata']->jobapplicant_department == "axdy") {{ "selected"}} @endif >AX Dynamics</option>
											   <option value="share" @if( $data['userdata']->jobapplicant_department == "share") {{ "selected"}} @endif >Sharepoint</option>
											   <option value="sofeng" @if( $data['userdata']->jobapplicant_department == "sofeng") {{ "selected"}} @endif >Software Engineering</option>
											   <option value="ofcmaint" @if( $data['userdata']->jobapplicant_department == "ofcmaint") {{ "selected"}} @endif >Office Maintenance</option>
											   <option value="genmain" @if( $data['userdata']->jobapplicant_department == "genmain") {{ "selected"}} @endif >General Maintenance</option>
											   <option value="supser" @if( $data['userdata']->jobapplicant_department == "supser") {{ "selected"}} @endif >Support & Services</option>
											   <option value="genopera" @if( $data['userdata']->jobapplicant_department == "genopera") {{ "selected"}} @endif >General Operations</option>
											   <option value="genesupchan" @if( $data['userdata']->jobapplicant_department == "genesupchan") {{ "selected"}} @endif >General Supply Chain</option>
											   <option value="logis" @if( $data['userdata']->jobapplicant_department == "logis") {{ "selected"}} @endif >Logistics</option>
											   <option value="procu" @if( $data['userdata']->jobapplicant_department == "procu") {{ "selected"}} @endif >Procurements</option>
											   <option value="purcha" @if( $data['userdata']->jobapplicant_department == "purcha") {{ "selected"}} @endif >Purchase</option>
											   <option value="webdev" @if( $data['userdata']->jobapplicant_department == "webdev") {{ "selected"}} @endif >Web development General</option>
											   <option value="netwo" @if( $data['userdata']->jobapplicant_department == "netwo") {{ "selected"}} @endif >Network</option>
											   <option value="hard" @if( $data['userdata']->jobapplicant_department == "hard") {{ "selected"}} @endif >Hardware</option>
											   <option value="suppor" @if( $data['userdata']->jobapplicant_department == "suppor") {{ "selected"}} @endif >Support</option>
											   <option value="infra" @if( $data['userdata']->jobapplicant_department == "infra") {{ "selected"}} @endif >Infrastructure</option>
											   <option value="genesal" @if( $data['userdata']->jobapplicant_department == "genesal") {{ "selected"}} @endif >General Sales</option>
											   <option value="preaud" @if( $data['userdata']->jobapplicant_department == "preaud") {{ "selected"}} @endif >Pre Audit</option>
											   <option value="posaud" @if( $data['userdata']->jobapplicant_department == "posaud") {{ "selected"}} @endif >Post Audit</option>
											   <option value="genintaud" @if( $data['userdata']->jobapplicant_department == "genintaud") {{ "selected"}} @endif >General Internal Audit</option>
											   <option value="primark" @if( $data['userdata']->jobapplicant_department == "primark") {{ "selected"}} @endif >Print Marketing</option>
											   <option value="socia" @if( $data['userdata']->jobapplicant_department == "socia") {{ "selected"}} @endif >Social Marketing</option>
											   <option value="genemark" @if( $data['userdata']->jobapplicant_department == "genemark") {{ "selected"}} @endif >General Marketing</option>
											   <option value="genelegop" @if( $data['userdata']->jobapplicant_department == "genelegop") {{ "selected"}} @endif >General Legal Operations</option>
											   <option value="genepro" @if( $data['userdata']->jobapplicant_department == "genepro") {{ "selected"}} @endif >General Productions</option>
											   <option value="qualass" @if( $data['userdata']->jobapplicant_department == "qualass") {{ "selected"}} @endif >Quality Assurance</option>
											   <option value="qcaler" @if( $data['userdata']->jobapplicant_department == "qcaler") {{ "selected"}} @endif >Quality Control</option>
											   <option value="genebusidev" @if( $data['userdata']->jobapplicant_department == "genebusidev") {{ "selected"}} @endif >General Business Development</option>
											   <option value="r&dsub" @if( $data['userdata']->jobapplicant_department == "r&dsub") {{ "selected"}} @endif >R&D</option>
											   <option value="analys" @if( $data['userdata']->jobapplicant_department == "analys") {{ "selected"}} @endif >Analyst</option>
											</select>--->
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Current  Salary RS.*</label>
											<input type="number"  min='1' class="form-control" name="can_currentsalary" value="{{old('can_currentsalary', @$data['userdata']->jobapplicant_currentsalary)  }}" required />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Monthly Expected Salary RS.*</label>
												<input type="number"  min='1' class="form-control" name="can_monthlyexpectedsalary" value="{{old('can_monthlyexpectedsalary', @$data['userdata']->jobapplicant_monthlyexpectedsalary)  }}" required />
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
										    <label class="col-form-label">Select Condition.*</label>
											<div class="col-lg-9">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_negotiablesalary" id="Negotiable" value="Negotiable" checked="" @if(old('can_negotiablesalary', @$data['userdata']->jobapplicant_negotiablesalary == "Negotiable")) checked @endif required />
													<label class="form-check-label" for="Negotiable">
													Negotiable
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_negotiablesalary" id="Not Negotiable" value="NotNegotiable" @if(old('can_negotiablesalary', @$data['userdata']->jobapplicant_negotiablesalary == "NotNegotiable")) checked @endif required />
													<label class="form-check-label" for="Not Negotiable">
													Not Negotiable
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Reason To Left Last Job.*</label>
												<input type="text" class="form-control" name="can_reasonofleave" value="{{old('can_reasonofleave', @$data['userdata']->jobapplicant_reasonofleave)  }}" required />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Current Benefits.*</label>
											<input type="text" class="form-control" name="can_remarksofleave" value="{{old('can_remarksofleave', @$data['userdata']->jobapplicant_remarksofleave)  }}" required />
										</div>
									</div>
								
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class=" col-form-label">Comfortable / Agreed for Night Shift?*</label>
											<div class="col-lg-9">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_nightshift" id="Yes" value="Yes" checked="" required @if(old('can_nightshifts', @$data['userdata']->jobapplicant_nightshift == "Yes")) checked @endif />
													<label class="form-check-label" for="Yes">
													Yes
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_nightshift" id="No" value="No" required  @if(old('can_nightshift', @$data['userdata']->jobapplicant_nightshift == "No")) checked @endif />
													<label class="form-check-label" for="No">
													No
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class=" col-form-label">Communication Skills.*</label>
											<div class="col-lg-12">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_communicationskills" id="Poor" value="Poor"  required @if(old('can_communicationskills', @$data['userdata']->jobapplicant_communicationskills == "Poor")) checked @endif />
													<label class="form-check-label" for="Poor">
													Poor
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_communicationskills" id="Average" value="Average" required @if(old('can_communicationskills', @$data['userdata']->jobapplicant_communicationskills == "Average")) checked @endif  />
													<label class="form-check-label" for="Average">
													Average
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_communicationskills" id="Above Average" value="Above_Average"  required @if(old('can_communicationskills', @$data['userdata']->jobapplicant_communicationskills == "Above_Average")) checked @endif  />
													<label class="form-check-label" for="Above Average">
													Above Average
													</label>
												</div>
												<br>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_communicationskills" id="Good" value="Good" required  @if(old('can_communicationskills', @$data['userdata']->jobapplicant_communicationskills == "Good")) checked @endif  />
													<label class="form-check-label" for="Good">
													Good
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_communicationskills" id="V.Good" value="V_Good" required @if(old('can_communicationskills', @$data['userdata']->jobapplicant_communicationskills == "V_Good")) checked @endif  />
													<label class="form-check-label" for="V.Good">
													V.Good
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="can_communicationskills" id="Excellent" value="Excellent" required @if(old('can_communicationskills', @$data['userdata']->jobapplicant_communicationskills == "Excellent")) checked @endif  />
													<label class="form-check-label" for="Excellent">
													Excellent
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Period Required For Joining.*</label>
											<select class="form-control selectpicker form-control" placeholder="Select Store Name" data-live-search ="true" id="storeId" name="can_periodjoining"  required >
											   <option value="" >Select the Following</option>
											   <option value="imme" @if( $data['userdata']->jobapplicant_periodjoining == "imme") {{ "selected"}} @endif >Immediate</option>
											   <option value="twodays" @if( $data['userdata']->jobapplicant_periodjoining == "twodays") {{ "selected"}} @endif >Two Days</option>
											   <option value="threedays" @if( $data['userdata']->jobapplicant_periodjoining == "threedays") {{ "selected"}} @endif >Three Days</option>
											   <option value="fourday" @if( $data['userdata']->jobapplicant_periodjoining == "fourday") {{ "selected"}} @endif >Four Days</option>
											   <option value="fiveday" @if( $data['userdata']->jobapplicant_periodjoining == "fiveday") {{ "selected"}} @endif >Five Days</option>
											   <option value="sixday" @if( $data['userdata']->jobapplicant_periodjoining == "sixday") {{ "selected"}} @endif >Six Days</option>
											   <option value="oneweek" @if( $data['userdata']->jobapplicant_periodjoining == "oneweek") {{ "selected"}} @endif >One Week</option>
											   <option value="twoweek" @if( $data['userdata']->jobapplicant_periodjoining == "twoweek") {{ "selected"}} @endif >Two Weeks</option>
											   <option value="threeweek" @if( $data['userdata']->jobapplicant_periodjoining == "threeweek") {{ "selected"}} @endif >Three Weeks</option>
											   <option value="onemon" @if( $data['userdata']->jobapplicant_periodjoining == "onemon") {{ "selected"}} @endif >One Month</option>
											   <option value="onehalf" @if( $data['userdata']->jobapplicant_periodjoining == "onehalf") {{ "selected"}} @endif >One & Half Month</option>
											   <option value="twomon" @if( $data['userdata']->jobapplicant_periodjoining == "twomon") {{ "selected"}} @endif >Two Months</option>
											</select>
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Photograph(if available)</label>
											<input type="file" name="input" accept=".jpg, .jpeg, .png" class="form-control" />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Drop Your CV.*</label>
											<input type="file" accept=".doc,.pdf" class="form-control" name="input1" required >
										</div>
									</div>
								</div>
							</div>
	
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h4 class="card-title mb-0">EDUCATIONAL RECORD</h4>
							</div>
							<div class="card-body">
								<div id="msg5">
					                   <p class="msg4 alert"></p>
					            </div> 
					            <div class="text-right" style="margin-bottom : 2%">
					                <button type="button" onclick="addedudetails()" class="btn btn-primary">+ Add Education Record</button>
					             <br />
					            </div>
								<div class="table-responsive">
						            <table class="table table-bordered" id="preempform">
						                <thead>
				            			<p>EDUCATIONAL / PROFESSIONAL QUALIFICATIONS: (LIST THE LAST ONE FIRST)</p>
						                  <tr>
						                    <th  style="white-space: nowrap;">S.NO.</th>
						                    <th  style="white-space: nowrap;">CERTIFICATE/DEGREE</th>
						                    <th  style="white-space: nowrap;">Year</th>
						                    <th  style="white-space: nowrap;">REGULAR/ PRIVATE</th>
						                    <th  style="white-space: nowrap;">MAJOR SUBJECTS</th>
						                    <th  style="white-space: nowrap;">DIVISION/GRADE</th>
						                    <th  style="white-space: nowrap;">NAME OF INSTITUTION</th>
						                    <th>Action</th>
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
											<td><input type='text' step='any' name='can_edu_cerdeg[]'    class='form-control required_colom' value="{{ old('can_edu_cerdeg[$sjhd]', @$edu_edu_cerdeg[$sjhd] ) }}" required='required'></td>
											<td><input type='text' step='any' name='can_edu_year[]' id="can_edu_year"   class='form-control required_colom datepick' value="{{ old('can_edu_year[$sjhd]', @$edu_year[$sjhd] ) }}" placeholder="year" required='required'></td>
											<td><input type='text'  step='any' name='can_edu_regpri[]'   class='form-control required_colom address' value="{{ old('can_edu_regpri[$sjhd]', @$edu_regpri[$sjhd] ) }}" required='required'></td>
											<td><input type='text' step='any' name='can_edu_majsub[]'     class='form-control required_colom' value="{{ old('can_edu_majsub[$sjhd]', @$edu_majsub[$sjhd] ) }}" required='required'></td>
											<td><input type='text' step='any' name='can_edu_divgra[]'     class='form-control required_colom' value="{{ old('can_edu_divgrass[$sjhd]', @$edu_divgra[$sjhd] ) }}" required='required'></td>
											<td><textarea name='can_edu_institute[]'  class='form-control' required >{{old('can_edu_institute[$sjhd]', @$edu_institute[$sjhd] ) }}</textarea></td>
											<td>
											@if($cnt != 1)
											<button onclick="removeRow(1)"  type='button' class='btn btn-danger remove' >remove</button>
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
	
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h4 class="card-title mb-0">EMPLOYMENT RECORD</h4>
							</div>
							<div class="card-body">
								<div id="msg5">
					                   <p class="msg4 alert"></p>
					            </div> 
					            <div class="text-right" style="margin-bottom : 2%">
					                <button type="button" onclick="addempdetails()" class="btn btn-primary">+ Add Employment Record</button>
					             <br />
					            </div>
								<div class="table-responsive">
						             <table class="table table-bordered" id="preempformj">
						                <thead>
				            			<p>(LIST THE LAST ONE FIRST)</p>
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
						                    <th>Action</th>
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
											<td><input type='text' step='any' name='can_empreport_org[]'  class='form-control required_colom' value="{{ old('can_empreport_org[$sjhsdd]', @$empreport_org[$sjhsdd] ) }}" required='required' /></td>
											<td><input type='text' step='any' name='can_empreport_perfrom[]' id='can_empreport_perfrom'   class='form-control required_colom datepicker' value="{{ old('can_empreport_perfrom[$sjhsdd]', @$empreport_perfrom[$sjhsdd] ) }}" placeholder="year" required='required' /></td>
											<td><input type='text'  step='any' name='can_empreport_perto[]' id='can_empreport_perto'   class='form-control required_colom datepicker' placeholder="year" value="{{ old('can_empreport_perto[$sjhsdd]', @$empreport_perto[$sjhsdd] ) }}" required='required' /></td>
											<td><input type='text' step='any' name='can_empreport_posstart[]'  class='form-control required_colom' value="{{ old('can_empreport_posstart[$sjhsdd]', @$empreport_posstart[$sjhsdd] ) }}" required='required' /></td>
											<td><input type='text' step='any' name='can_empreport_last[]'  class='form-control required_colom' value="{{ old('can_empreport_last[$sjhsdd]', @$empreport_last[$sjhsdd] ) }}" required='required' /></td>
											<td><input type='number' step='any' name='can_empreport_grossalarystart[]'  class='form-control required_colom' value="{{ old('can_empreport_grossalarystart[$sjhsdd]', @$empreport_grossalarystart[$sjhsdd] ) }}" required='required' /></td>
											<td><input type='number' step='any' name='can_empreport_grossalarylast[]'  class='form-control required_colom' value="{{ old('can_empreport_grossalarylast[$sjhsdd]', @$empreport_grossalarylast[$sjhsdd] ) }}" required='required' /></td>
											<td><textarea name='can_empreport_reasoleave[]'  class='form-control'>{{ old('can_empreport_reasoleave[$sjhsdd]', @$empreport_reasoleave[$sjhsdd] ) }}</textarea></td>
											@if($cnt != 1)
											<td><button  type='button' class='btn btn-danger remove' >remove</button></td>
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
											<label class="col-form-label">Name.*</label>
											<input type="text" class="form-control" name="can_name" value="{{old('can_name', @$data['userdata']->jobapplicant_name)  }}" required  >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">FATHER'S/HUSBAND'S Name.*</label>
											<input type="text" class="form-control" name="can_fathername" value="{{old('can_fathername', @$data['userdata']->jobapplicant_fname)  }}" required >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Gender.*</label>
											<select class="form-control selectpicker form-control" placeholder="Select Store Name" data-live-search ="true" id="storeId" name="can_gender"  required >
											   <option value="" >Select the Following</option>
											   <option value="female" @if( $data['userdata']->jobapplicant_gender == "female") {{ "selected"}} @endif >Female</option>
											   <option value="male" @if( $data['userdata']->jobapplicant_gender == "male") {{ "selected"}} @endif >Male</option>
											   <option value="other" @if( $data['userdata']->jobapplicant_gender == "other") {{ "selected"}} @endif >Other</option>
											</select>
										</div>
									</div>
								</div>	
						
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">MOBILE #.*</label>
											<input type="tel" class="form-control" minlength="11" maxlength="11" min="0" name="can_mobileno" value="{{old('can_mobileno', @$data['userdata']->jobapplicant_contact ) }}" required>
											<span class="form-text text-muted">e.g(03001234567)</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">RES/OFFICE #</label>
											<input type="tel" class="form-control" minlength="11" maxlength="11" min="0" name="can_officeno" value="{{old('can_officeno', @$data['userdata']->jobapplicant_officeno ) }}" >
											<span class="form-text text-muted">e.g(02131234567)</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">DATE OF BIRTH.*</label>
											<input class="form-control " type="date" name="can_dob" value="{{old('can_dob', @$data['userdata']->jobapplicant_dob ) }}" required >
										</div>
									</div>
								
								</div>	
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">AGE.*</label>
											<input class="form-control" type="tel" minlength="2" maxlength="2" min="0" name="can_age" value="{{old('can_age', @$data['userdata']->jobapplicant_age ) }}" required >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">PLACE OF BIRTH.*</label>
											<input class="form-control " type="text" name="can_placeob" value="{{old('can_placeob', @$data['userdata']->jobapplicant_placeob ) }}" required >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">N.I.C NO.*</label>
											<input class="form-control " type="tel"  maxlength="13" minlength="13" min="0" name="can_nic" value="{{old('can_nic', @$data['userdata']->jobapplicant_cnic ) }}" required>
											<span class="form-text text-muted">e.g(4210112345671)</span>
										</div>
									</div>
								
								</div>	
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">EMAIL.*</label>
											<input class="form-control " type="email" name="can_email" value="{{old('can_email', @$data['userdata']->log_email ) }}" required  readonly >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Reference</label>
											<input type="text" class="form-control" name="can_reference" value="{{old('can_reference', @$data['userdata']->jobapplicant_reference ) }}"  >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">NATIONALITY.*</label>
											<input class="form-control" type="text" name="can_nationality" value="{{old('can_nationality', @$data['userdata']->jobapplicant_nationality  ) }}" required >
										</div>
									</div>
									
								</div>	
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">RELIGION.*</label> 
											<input class="form-control" type="text" name="can_religion" value="{{old('can_religion', @$data['userdata']->jobapplicant_religion)  }}" required >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">MARITAL STATUS.*</label>
											<input class="form-control" type="text" name="can_martialstatus" value="{{old('can_martialstatus', @$data['userdata']->jobapplicant_martialstatus ) }}" required >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">OCCUPATION.*</label>
											<input type="text" class="form-control" name="can_occupation" value="{{old('can_occupation', @$data['userdata']->jobapplicant_occupation ) }}" required >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">ADDRESS (Permanent).*</label>
											<input type="text" class="form-control" name="can_address" value="{{old('can_address', @$data['userdata']->jobapplicant_address)  }}" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">ADDRESS (Temporary)</label>
											<input type="text" class="form-control" name="can_addresstemporaray" value="{{old('can_addresstemporaray', @$data['userdata']->jobapplicant_addresstemporaray)  }}"  >
										</div>
									</div>
								</div>	
									<div class="">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>					
	            </div>
	            <br>
	        </div>
        </div>
		</div>
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
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

		<script type="text/javascript">
		$(".datepick").datepicker( {
				format: " yyyy", // Notice the Extra space at the beginning
				viewMode: "years", 
				minViewMode: "years"
			});
			$(".datepicker").datepicker( {
				format: " yyyy", // Notice the Extra space at the beginning
				viewMode: "years", 
				minViewMode: "years"
			});
			function addedudetails(){
              var table = document.getElementById("preempform");
              var rowCount = $('#preempform tr').length;
              var row = table.insertRow(rowCount);
              // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
              var hotelLocationId = "HotelLocation"+rowCount;
				
				
              var cell1 = row.insertCell(0);
              var cell2 = row.insertCell(1);
              var cell3 = row.insertCell(2);
              var cell4 = row.insertCell(3);
              var cell5 = row.insertCell(4);
              var cell6 = row.insertCell(5);
              var cell7 = row.insertCell(6);
              var cell8 = row.insertCell(7);
			  
			  var jaja = 1 ;
			  var pappu =  rowCount;
				var jhama = pappu -  jaja ;
					
					console.log(jhama) ;

              cell1.innerHTML = "<input type='number' step='any'  class='form-control required_colom' required='required' placeholder='' value="+ jhama +" readonly />";
              cell2.innerHTML = "<input type='text' step='any' name='can_edu_cerdeg[]'    class='form-control required_colom' required='required' />";
              cell3.innerHTML = "<input type='text' step='any' name='can_edu_year[]' id='can_edu_year'  class='form-control required_colom datepick' required='required' placeholder='year' />";
              cell4.innerHTML = "<input type='text' step='any' name='can_edu_regpri[]'   class='form-control required_colom address' required='required' />";
              cell5.innerHTML = "<input type='text' step='any' name='can_edu_majsub[]'     class='form-control required_colom' required='required' />";
              cell6.innerHTML = "<input type='text' step='any' name='can_edu_divgra[]'     class='form-control required_colom' required='required' />";
              cell7.innerHTML = "<textarea name='can_edu_institute[]'    class='form-control'></textarea>";
			    $("#can_edu_year").each(function() {
				$(".datepick").datepicker( {
				format: " yyyy", // Notice the Extra space at the beginning
				viewMode: "years", 
				minViewMode: "years"
			});
		});
			  if(jhama == 1){
					cell8.innerHTML = "<button  type='button' class='btn btn-danger ' >remove</button>";
			  }else{
				  cell8.innerHTML = "<button  type='button' class='btn btn-danger remove' >remove</button>";
			  }

            }

            function addempdetails(){
              var table = document.getElementById("preempformj");
              var rowCount = $('#preempformj tr').length;
              var row = table.insertRow(rowCount);
              // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
              var hotelLocationId = "HotelLocation"+rowCount;  

              var cell1 = row.insertCell(0);
              var cell2 = row.insertCell(1);
              var cell3 = row.insertCell(2);
              var cell4 = row.insertCell(3);
              var cell5 = row.insertCell(4);
              var cell6 = row.insertCell(5);
              var cell7 = row.insertCell(6);
              var cell8 = row.insertCell(7);
              var cell9 = row.insertCell(8);
              var cell10 = row.insertCell(9);
				
				var jaja = 1 ;
				var pappu =  rowCount;
				var jhama = pappu - jaja ;	
					
              cell1.innerHTML = "<input type='number' step='any'  class='form-control required_colom' required='required' placeholder='' value="+ jhama +" readonly />";
              cell2.innerHTML = "<input type='text' step='any' name='can_empreport_org[]'  class='form-control required_colom' required='required' />";
              cell3.innerHTML = "<input type='text' step='any' name='can_empreport_perfrom[]' id='can_empreport_perfrom'   class='form-control required_colom datepicker' placeholder='year' required='required' />";
              cell4.innerHTML = "<input type='text'  step='any' name='can_empreport_perto[]' id='can_empreport_perto'   class='form-control required_colom datepicker' placeholder='year' required='required' />";
              cell5.innerHTML = "<input type='text' step='any' name='can_empreport_posstart[]'  class='form-control required_colom' required='required' />";
              cell6.innerHTML = "<input type='text' step='any' name='can_empreport_last[]'  class='form-control required_colom' required='required' />";
              cell7.innerHTML = "<input type='number' step='any' name='can_empreport_grossalarystart[]'  class='form-control required_colom' required='required' />";
              cell8.innerHTML = "<input type='number' step='any' name='can_empreport_grossalarylast[]'  class='form-control required_colom' required='required' />";
              cell9.innerHTML = "<textarea name='can_empreport_reasoleave[]'  class='form-control'></textarea>";
			   $("#can_empreport_perfrom").each(function() {
				$(".datepicker").datepicker( {
				format: " yyyy", // Notice the Extra space at the beginning
				viewMode: "years", 
				minViewMode: "years"
			});
		});
				 $("#can_empreport_perto").each(function() {
				$(".datepicker").datepicker( {
				format: " yyyy", // Notice the Extra space at the beginning
				viewMode: "years", 
				minViewMode: "years"
			});
		});
			  if(jhama == 1){
				cell10.innerHTML = "<button  type='button' class='btn btn-danger ' >remove</button>";
			  }else{
				  cell10.innerHTML = "<button  type='button' class='btn btn-danger remove' >remove</button>";
			  }

            }

            $('#preempform').on('click', '.remove', function(e){
			   $(this).closest('tr').remove();
			})

			$('#preempformj').on('click', '.remove', function(e){
			   $(this).closest('tr').remove();
			})
			
			
		function getedit($id){

			$.get('{{ URL::to("/subdept")}}/'+$id,function(data){
					
				$('#p').empty().append(data);
				
			});
       
		}
			
		</script>

		<!-- for add rows -->
	<!--	<script>
		$(".datepick").datepicker( {
				format: " yyyy", // Notice the Extra space at the beginning
				viewMode: "years", 
				minViewMode: "years"
			});	
			$('.datepick').change(function(){
     var val = $(this).val();
    $('#changeyear').text(val);
});
		</script>
		-->
    </body>
</html>