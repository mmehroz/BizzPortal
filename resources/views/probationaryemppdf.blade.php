<!DOCTYPE html>
<html>
	<head>
		<title>PROBATIONARY EMPLOYEE FORM</title>
	  	
			<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style>
			label
			{
			text-align:justify;
			font-weight:500;
			font-family: Verdana;
			font-size:14px;
			color: #333;
			}
			hr
			{
			border:1px solid #4a4a4a;
			}
			table
			{
			font-size:9px;
			}
			.table.table-bordered td, .table.table-bordered th
			{
			width:auto;
			}
			.col-md-2 {
			    flex: 0 0 16.666667%;
			    max-width: 15.666667%;
			    position: relative;
			    width: 100%;
			    padding-right: 15px;
			    padding-left: 15px;
			}
			.col-md-3 {
			    flex: 0 0 25%;
			    max-width: 24%;
			}
			.col-md-4 {
			    flex: 0 0 33.333333%;
			    max-width: 32.333333%;
			}
			.col-md-5 {
			    flex: 0 0 41.6666666%;
			    max-width: 40.6666666%;
			}
			.col-md-6 {
			    flex: 0 0 50%;
			    max-width: 49%;
			}
			.col-md-12 {
			    flex: 0 0 100%;
			    max-width: 100%;
			}
			.form-group {
			    margin-bottom: 1rem;
			}
			.col-form-label {
				color:#85152d;
			    padding-top: calc(.375rem + 1px);
			    padding-bottom: calc(.375rem + 1px);
			    margin-bottom: 0;
			    font-size: inherit;
			    line-height: 1.5;
			}
			textarea.form-control {
			    resize: vertical;
			    height: auto;
			}
			p {
			    margin-top: 0;
			    margin-bottom: 1rem;
			}
			.custom-table tr {
			    background-color: #4a4a4a;
			    box-shadow: 0 0 3px #2c3325;
			}
			.custom-table tbody tr {
			    background-color: #b1b1b1;
			    box-shadow: 0 0 3px #2c3325;
			}
			.table-striped > tbody > tr:nth-of-type(2n+1) {
			    background-color: #f6f6f6;
			}
			table.dataTable {
			    border-collapse: separate !important;
			    border-spacing: 0!important;
			}
			.table-striped tbody tr:nth-of-type(odd) {
			    background-color: rgba(0,0,0,.05);
			}
			/*.form-check-inline {
			    display: inline-flex;
			    align-items: center;
			    padding-left: 0;
			    margin-right: .75rem;
			}*/
		</style>
	</head>
	<body>
		<div class="content container-fluid">
			<img height="100%;" width="100%;" style="padding-top: 60px; padding-bottom: 0px;" src="http://209.182.216.71/hrm/public/img/probationaryemp.jpg"/>
			<div class="page-header" style="border-bottom:1px solid #4a4a4a;">
				<div class="row">
					<div class="col">
						<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
							<strong>
								<u><span style="font-size:19px;line-height:107%;">
									<img height="100px;" width="200px;" src="http://209.182.216.71/hrm/public/assets/img/final-logo.png"/>
								</span></u>
							</strong>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card flex-fill" style="border:2px solid #4a4a4a;">
						<div class="card-header" style="box-sizing:border-box;padding-top:.75rem;padding-bottom:.75rem;padding-right:1.25rem;padding-left:1.25rem;margin-bottom:0;background-color:#4a4a4a;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:rgba(0,0,0,.125);border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0;">
							<h3 class="card-title mb-0 text-center" style="box-sizing:border-box;margin-top:0;margin-bottom:0!important;font-weight:500;line-height:1.2;font-size:20px;orphans:3;widows:3;page-break-after:avoid;font-family:CircularStd;color:#fff;text-align:center!important;">Bizz World Communication</h3>
						</div>
						<div class="card-body" style="padding:1.25rem;">
							<!-- <div class=""> -->
					            <h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">PROBATIONARY EMPLOYEE FORM</h4>

					            <div class="row" style="display: flex; margin-top: -180px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Employee Batch ID</label>
											<input type="text" class="form-control" value="{{$datas['probdata']->probationary_form_empbatchid}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:33.333333%;">
										<div class="form-group">
											<label class="col-form-label">Employee Name</label>
											<input type="text" class="form-control" name="can_company" value="{{$datas['probdata']->probationary_form_empname}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:66.666666%;">
										<div class="form-group">
											<label class="col-form-label">Designation</label>
											<input type="text" class="form-control" value="{{$datas['empdata']->DESG_NAME}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-top: -170px; margin-right: -15px; margin-left: -15px;">									
								    <div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Department</label>
											<input type="text" class="form-control" value="{{$datas['empdata']->dept_name}}" readonly="">
											
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:33.333333%;">
										<div class="form-group">
											<label class="col-form-label">Evaluator</label>
											<input type="text" class="form-control" value="{{$datas['probdata']->probationary_form_empevaluator}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:66.666666%;">
										<div class="form-group">
											<label class="col-form-label">Date</label>
											<input type="text" class="form-control" name="Test" value="{{$datas['probdata']->probationary_form_date}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-top: -170px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Months Review</label>
											<input type="text" class="form-control" readonly="" @if($datas['probdata']->probationary_form_empmonthsreview == "3" )  value = "Three Months"
																					@elseif($datas['probdata']->probationary_form_empmonthsreview == "6" ) value = "Six Months"
																					@elseif($datas['probdata']->probationary_form_empmonthsreview == "12" )  value = "Twelve Months"
																					@endif >
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:33.333333%;">
										<div class="form-group">
											<label class="col-form-label">Months Review Comment</label>
											<input type="text" class="form-control" value="{{$datas['probdata']->probationary_form_empmonthsreviewcomment}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:66.666666%;">
										<div class="form-group">
											<label class="col-form-label">Quality and accuracy of work</label>
											<input type="text" readonly="" class="form-control"  @if($datas['probdata']->probationary_form_empqualitywork == "1" )  value = "Improvement required"
																					@elseif($datas['probdata']->probationary_form_empqualitywork == "2" ) value = "Satisfactory"
																					@elseif($datas['probdata']->probationary_form_empqualitywork == "3" )  value = "Good"
																					@elseif($datas['probdata']->probationary_form_empqualitywork == "4" )  value = "Excellent"
																					@endif >									
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-top: -170px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Efficiency / Productivity</label>
											<input type="text" class="form-control" readonly="" @if($datas['probdata']->probationary_form_empefficiency == "1" )  value = "Improvement required"
																					@elseif($datas['probdata']->probationary_form_empefficiency == "2" ) value = "Satisfactory"
																					@elseif($datas['probdata']->probationary_form_empefficiency == "3" )  value = "Good"
																					@elseif($datas['probdata']->probationary_form_empefficiency == "4" )  value = "Excellent"
																					@endif >
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:33.333333%;">
										<div class="form-group">
											<label class="col-form-label">Attendance / Punctuality</label>
											<input type="text" class="form-control" readonly="" @if($datas['probdata']->probationary_form_empattenpunctuality == "1" )  value = "Improvement required"
																					@elseif($datas['probdata']->probationary_form_empattenpunctuality == "2" ) value = "Satisfactory"
																					@elseif($datas['probdata']->probationary_form_empattenpunctuality == "3" )  value = "Good"
																					@elseif($datas['probdata']->probationary_form_empattenpunctuality == "4" )  value = "Excellent"
																					@endif >
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:66.666666%;">
										<div class="form-group">
											<label class="col-form-label">Time Management</label>
											<input type="text" class="form-control" readonly="" @if($datas['probdata']->probationary_form_emptimemang == "1" )  value = "Improvement required"
																					@elseif($datas['probdata']->probationary_form_emptimemang == "2" ) value = "Satisfactory"
																					@elseif($datas['probdata']->probationary_form_emptimemang == "3" )  value = "Good"
																					@elseif($datas['probdata']->probationary_form_emptimemang == "4" )  value = "Excellent"
																					@endif >
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-top: -90px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Work Relationship & Team Management skills</label>
											<input type="text" class="form-control" readonly="" @if($datas['probdata']->probationary_form_empworkskills == "1" )  value = "Improvement required"
																					@elseif($datas['probdata']->probationary_form_empworkskills == "2" ) value = "Satisfactory"
																					@elseif($datas['probdata']->probationary_form_empworkskills == "3" )  value = "Good"
																					@elseif($datas['probdata']->probationary_form_empworkskills == "4" )  value = "Excellent"
																					@endif >
										</div>
									</div>
								    <div class="col-md-6" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">Competency in the Role</label>
											<input type="text" class="form-control" name="Test" readonly="" @if($datas['probdata']->probationary_form_empcompetency == "1" )  value = "Improvement required"
																					@elseif($datas['probdata']->probationary_form_empcompetency == "2" ) value = "Satisfactory"
																					@elseif($datas['probdata']->probationary_form_empcompetency == "3" )  value = "Good"
																					@elseif($datas['probdata']->probationary_form_empcompetency == "4" )  value = "Excellent"
																					@endif >
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-top: 0px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Have the objectives identified for the probationary period been met?</label>
											<input type="text" id="p1" class="form-control" name="Test" value="{{$datas['probdata']->probationary_form_empobjectives}}" readonly="">
										</div>
									</div>
								</div>
								<div id="p1v" class="row" style="display: flex; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">If NO, please provide details </label>
											<input type="text" class="form-control" name="htoppbm_ifnoc" value="{{$datas['probdata']->probationary_form_empnoobjectivescomment}}" readonly />
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Have the training / development needs identified for the probationary period been addressed? </label>
											<input id="p2" type="text" class="form-control"  name="httppba" value="{{$datas['probdata']->probationary_form_emptraining}}" readonly>
										</div>
									</div>
								</div>
								<div id="p2v" class="row" style="display: flex; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">If NO, please provide details</label>
											<input type="text" class="form-control" name="httppba_ifnoc" value="{{$datas['probdata']->probationary_form_empnotrainingcomment}}" readonly />
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Summarize the employee’s performance and progress over the period.</label>
											<input type="text" class="form-control" name="sepp" value="{{$datas['probdata']->probationary_form_empsummarizeperformance}}" readonly>
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Has the employee successfully completed the probationary period?</label>
											<input id="p3" type="text" class="form-control"  name="successcom" value="{{$datas['probdata']->probationary_form_empsuccesscompleted}}" readonly>
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-right: -15px; margin-left: -15px;">
								    <div id="p3v" class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">If NO, please provide reasons below and summarize the action (s) taken to address any difficulties that have arisen during the probationary period.</label>
											<input type="text" class="form-control" name="successcom_ifno" value="{{$datas['probdata']->probationary_form_empsuccesscompletedcomment}}" readonly />
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Do you recommend that the employee’s probationary period be extended?</label>
											<input id="p4" type="text" class="form-control"  name="recommendext" value="{{$datas['probdata']->probationary_form_emprecommendextended}}" readonly>
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-right: -15px; margin-left: -15px;">
								    <div id="p4v" class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">If YES, please provide reasons and, where appropriate, specify any areas of improvement required and how these will be monitored.</label>
											<input type="text" class="form-control" name="recommendext_ifyes" value="{{$datas['probdata']->probationary_form_empyesrecommendextendedcomment}}" readonly />
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-top: -90px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Length of the extension (max 3 months):</label>
											<input type="date" class="form-control" name="extensiondate" value="{{$datas['probdata']->probationary_form_empextentiondate}}" readonly required/>
										</div>
									</div>
								    <div class="col-md-6" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">New Probation Period completion date:</label>
											<input type="date" class="form-control" name="npropcd" value="{{$datas['probdata']->probationary_form_empnewprobcompdate}}" readonly required/>
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-top: 0px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Manager’s Date:</label>
											<input type="date" class="form-control" name="empmdate" value="{{$datas['probdata']->probationary_form_empmangerdate}}" readonly />
										</div>
									</div>
								</div>
					            <h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">Employee</h4>
					            <div class="row" style="display: flex; margin-bottom: 0px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Employee Name</label>
											<input type="text" class="form-control" name="empnamec" value="{{$datas['probdata']->probationary_form_empname}}" readonly />
										</div>
									</div>
								</div>
					            <div class="row" style="display: flex; margin-bottom: 0px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">The employee may provide any comments about their experience of the probationary process here.
												 Employee’s Comments:</label>
											<input type="text" class="form-control" name="empnamecom" value="{{$datas['probdata']->probationary_form_empnamecomment}}" readonly />
										</div>
									</div>
								</div>
								<h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">Chief Operations Officer</h4>
								<div class="row" style="display: flex; margin-top: 0px; margin-bottom:-50px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Chief Operations Officer Name</label>
											<input type="text" class="form-control" name="cooname" value="{{$datas['probdata']->probationary_form_empcooname}}" readonly />
										</div>
									</div>
								    <div class="col-md-6" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">Chief Operations Officer Date </label>
											<input type="date" class="form-control" name="coodate" value="{{$datas['probdata']->probationary_form_empcoodate}}" readonly />
										</div>
									</div>
								</div>
					            <div class="row" style="display: flex; margin-top: 0px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Chief Operations Officer Remarks </label>
											<input type="text" class="form-control" name="coocom" value="{{$datas['probdata']->probationary_form_empcoocomment}}" readonly />
										</div>
									</div>
								</div>
					            <h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">Human Resource Department</h4>
								<div class="row" style="display: flex; margin-top: -90px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Confirmation letter to employee</label>
											<input id="p5" type="text" class="form-control" name="cltm" value="{{$datas['probdata']->probationary_form_empconfirmationletter}}" readonly />
										</div>
									</div>
								    <div class="col-md-6" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">Employee Status</label>
											<input type="text" class="form-control" name="empstatus" value="{{$datas['probdata']->probationary_form_empstatus}}" readonly />
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-right: -15px; margin-left: -15px;">
								    <div id="p5v" class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Reason if Pending.</label>
											<input type="text" class="form-control" name="rifp" value="{{$datas['probdata']->probationary_form_empconfirmationlettercomment}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-top: -90px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Payroll Advised (where applicable)</label>
											<input type="text" class="form-control" name="pawa" value="{{$datas['probdata']->probationary_form_emppayrolladvised}}" readonly="">
										</div>
									</div>
								    <div class="col-md-6" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">Extension in Probationary Period</label>
											<input type="text" class="form-control" name="extproper" value="{{$datas['probdata']->probationary_form_empextentionprobperiod}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style="display: flex; margin-top: -90px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Senior Manager HR Date </label>
											<input type="date" class="form-control" name="hrdate" value="{{$datas['probdata']->probationary_form_emphrmangerdate}}" readonly="">
										</div>
									</div>
								    <div class="col-md-6" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">Date</label>
											<input type="date" class="form-control" name="hrpartdate" value="{{$datas['probdata']->probationary_form_empdate1}}" readonly="">
										</div>
									</div>
								</div>
				            <!-- </div> -->
	        			</div>
					</div>
				</div>
			</div>
			<hr>
		</div>
	<script type="text/javascript">
		$(document).ready(function() {
				$('#p1').on('change.states', function() {
					$("#p1v").toggle($(this).val() == 'No');
				}).trigger('change.states');
				});

		$(document).ready(function() {
			$('#p2').on('change.states', function() {
				$("#p2v").toggle($(this).val() == 'No');
			}).trigger('change.states');
		});

		$(document).ready(function() {
			$('#p3').on('change.states', function() {
				$("#p3v").toggle($(this).val() == 'No');
			}).trigger('change.states');
		});

		$(document).ready(function() {
			$('#p4').on('change.states', function() {
				$("#p4v").toggle($(this).val() == 'Yes');
			}).trigger('change.states');
		});

		$(document).ready(function() {
			$('#p5').on('change.states', function() {
				$("#p5v").toggle($(this).val() == 'Pending');
			}).trigger('change.states');

		});
			
	</script>
	</body>
</html>