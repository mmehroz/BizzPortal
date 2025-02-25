<!DOCTYPE html>
<html>
	<head>
	  <title>PRE-EMPLOYMENT APPLICATION</title>
	  	


		<style>
			label
			{
			text-align:justify;
			font-weight:200;
			font-family: Verdana;
			font-size:8px;
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
				color:#000;
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
			<div class="page-header" style="border-bottom:1px solid #4a4a4a;">
				<div class="row">
					<div class="col">
						<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
							<strong>
								<u><span style="font-size:19px;line-height:107%;">
									<img height="100px;" width="200px;" src="https://bizzworldcommunications.com/public/bwc-logo.png"/>
								</span></u>
							</strong>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card flex-fill" style="border:2px solid #4a4a4a;">
						<div class="card-header" style="box-sizing:border-box;padding-top:.75rem;padding-bottom:.75rem;padding-right:1.25rem;padding-left:1.25rem;margin-bottom:0;background-color:#4a4a4a;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:rgba(0,0,0,.125);border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0;background-color: #101D3B">
							<h3 class="card-title mb-0 text-center" style="box-sizing:border-box;margin-top:0;margin-bottom:0!important;font-weight:500;line-height:1.2;font-size:20px;orphans:3;widows:3;page-break-after:avoid;font-family:CircularStd;color:#fff;text-align:center!important;background-color: #101D3B">INTERVIEW ASSESSMENT & RECOMMENDATION FORM</h3>
						</div>
						<div class="card-body" style="padding:1.25rem;">
							<!-- <div class=""> -->
					            <h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">Candidate Personal Data</h4>
					            <div class="row">
								    <div class="col-md-6 col-6 col-lg-6">
										<div class="form-group">
											<label class="col-form-label">Name</label>
											<input type="text" class="form-control" value="{{$datas->jobapplicant_name}}" readonly="">
										</div>
									</div>


								    <div class="col-md-6 col-6 col-lg-6">
										<div class="form-group">
											<label class="col-form-label">Company</label>
											<input type="text" class="form-control" name="can_company" value="Bizz World Communication" readonly="">
										</div>
									</div>


								</div>


								<div class="row">
								    <div class="col-md-6 col-6">
										<div class="form-group">
											<label class="col-form-label">Position Title</label>
											<input type="text" class="form-control" value="{{$datas->jobapplicant_postionapppliedform}}" readonly="">
										</div>
									</div>
								    <div class="col-md-6 col-6">
										<div class="form-group">
											<label class="col-form-label">Department</label>
											<input type="text" class="form-control" value="{{$datas->dept_name}}" readonly="">
											
										</div>
									</div>
								</div>
								<div class="row" style=" margin-top: -250px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-3">
										<div class="form-group">
											<label class="col-form-label">Sub Department</label>
											<input type="text" class="form-control" value="{{$datas->sd_name}}" readonly="">
										</div>
									</div>
								    <div class="col-md-3" style="margin-left:25%;">
										<div class="form-group">
											<label class="col-form-label">Reports to</label>
											<input type="text" class="form-control" name="Test" value="{{$datas->can_evu_reportsto}}" readonly="">
										</div>
									</div>
								    <div class="col-md-3" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">Location</label>
											<input type="text" class="form-control" value="{{$datas->can_evu_location}}" readonly="">
										</div>
									</div>
								    <div class="col-md-3" style="margin-left: 75%;">
										<div class="form-group">
											<label class="col-form-label">Job Grade</label>
											<input type="text" class="form-control" value="{{$datas->can_evu_grade}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style=" margin-top: -250px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-2">
										<div class="form-group">
											<label class="col-form-label">Reference</label>
											<input type="text" readonly="" class="form-control" value="{{$datas->jobapplicant_reference}}">									
										</div>
									</div>
								    <div class="col-md-3" style="margin-left:16.666667%;">
										<div class="form-group">
											<label class="col-form-label">Job Typ</label>
											<input type="text" class="form-control" readonly="" @if($datas->can_evu_job_type == "1" )  value = Permanent
																					@elseif( $datas->can_evu_job_type == "2" ) value = Contract
																					@elseif( $datas->can_evu_job_type == "3" )  value = Consultant
																					@elseif( $datas->can_evu_job_type == "4" )  value =Trainee
																					@elseif( $datas->can_evu_job_type == "5" )  value =Internee
																					@elseif( $datas->can_evu_job_type == "6" )  value =MTO	
																					@endif >
										</div>
									</div>
								    <div class="col-md-3" style="margin-left: 41.666667%;">
										<div class="form-group">
											<label class="col-form-label">Relative in Bizz World Communication</label>
											<input type="text" class="form-control" value="{{$datas->can_evu_relativename}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:66.666667%;">
										<div class="form-group">
											<label class="col-form-label">Dependents</label>
											<input type="text" class="form-control" value="{{$datas->can_evu_depends}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style=" margin-top: -170px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">BUDGETED in Business Plan</label>
											<input type="text" class="form-control" value="{{$datas->can_evu_budget}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:33.333333%;">
										<div class="form-group">
											<label class="col-form-label">Expected Salary</label>
											<input type="text" class="form-control" name="Test" value="{{$datas->jobapplicant_monthlyexpectedsalary}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:66.666666%;">
										<div class="form-group">
											<label class="col-form-label">Expected Benefit</label>
											<input type="text" class="form-control" name="Test" value="{{$datas->jobapplicant_remarksofleave}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style=" margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">JOB SUMMARY</label>
											<textarea rows="4" cols="5" class="form-control" name="can_job_summary" placeholder="Enter message"spellcheck="false" readonly="">
											{{$datas->can_evu_job_sum}}</textarea>
										</div>
									</div>
								</div>
					            <h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">HR Department Assessment</h4>
					            <p style="color:#f90202; font-size: 11.8px; padding-bottom: -15px;">Filled by HR Department</p>
					            <div class="">
						            <p style="font-size: 11.8px; color: #000;">Total Marks: Qualification=3  Professional Training=4  Computer Skill=5 <br> AVG Marks Obtained=3.13</p>
									<table class="table table-bordered table-striped custom-table datatable" id="preempform">
						                <thead>
				            			
						                  <tr class="bg-teal-400" style="white-space : nowrap; color: #fff;">
						                    <th></th>
						                    <th>Qualification</th>
						                    <th>Professional Training</th>
						                    <th>Computer Skill</th>
						                    <th>Obtained Marks</th>
						                  </tr>
						                </thead>
						                <tbody>
											<tr>
												<td>Academic</td>
												<td>{{$datas->can_evu_hr_qua}}</td>
												<td>{{$datas->can_evu_hr_per_tra}}</td>
												<td>{{$datas->can_evu_hr_com_ski}}</td>
												<td>{{$datas->can_evu_hr_obtain}}</td>
											</tr>
						              	</tbody>
						            </table>
					            </div>
					            <div class="">
						            <p style="font-size: 11.8px; color: #000;">Total Marks: Presentation=3  Communication-Verbal=2  Behaviour/Body Language=5  Manner=2  Reasoning=1 <br> AVG Marks Obtained=3.13</p>
									<table class="table table-bordered table-striped custom-table datatable" id="preempform">
						                <thead>
				            			
						                  <tr class="bg-teal-400" style="white-space : nowrap; color: #fff;">
						                    <th></th>
						                    <th>Presentation</th>
						                    <th>Communication - Verbal</th>
						                    <th>Behaviour / Body Language</th>
						                    <th>Manner</th>
						                    <th>Reasoning</th>
						                    <th>Obtained Marks</th>
						                  </tr>
						                </thead>
						                <tbody>
											<tr>
												<td>Personal</td>
												<td>{{$datas->can_evu_hr_pre}}</td>
												<td>{{$datas->can_evu_hr_ver_ski}}</td>
												<td>{{$datas->can_evu_hr_body}}</td>
												<td>{{$datas->can_evu_hr_manner}}</td>
												<td>{{$datas->can_evu_hr_reson}}</td>
												<td>{{$datas->can_evu_hr_obtain_mark}}</td>
											</tr>
						              	</tbody>
						            </table>
					            </div>
					            <div class="row" style=" margin-bottom: -100px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Interviewer Name</label>
											<input type="text" class="form-control" value="{{$datas->can_evu_hr_int_name}}" readonly="">
										</div>
									</div>
								    <div class="col-md-6" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">Interviewer Date</label>
											<input type="text" class="form-control" name="Test" value="{{$datas->can_evu_hr_int_date}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style=" margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">HR Comments</label>
											<textarea rows="4" cols="5" class="form-control" name="" placeholder="Enter message" spellcheck="false" readonly="">
											{{$datas->can_evu_hr_comments}}</textarea>
										</div>
									</div>
								</div>
								<h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">Departmental Head Assessment</h4>
					            <p style="color:#f90202; font-size: 11.8px; padding-bottom: -15px;">Filled by Departmental Head</p>
					            <div class="">
						            <p style="font-size: 11.8px; color: #000;">Total Marks: Job Relevancy=3 Experience=5 Knowledge of Industry=5 Career Progression=5 Notable Achievement=2 Potential=2<br> AVG Marks Obtained=3.67</p>
									<table class="table table-bordered table-striped custom-table datatable" style="font-size:6px" id="preempform">
						                <thead>
				            			
						                  <tr class="bg-teal-400" style="white-space : nowrap; color: #fff;">
						                    <th></th>
						                    <th>Job Relevancy</th>
						                    <th>Experience : Yrs Local Foreign</th>
						                    <th>Knowledge of Industry</th>
						                    <th>Career Progression</th>
						                    <th>Notable Achievement</th>
						                    <th>Potential</th>
						                    <th>Obtained Marks</th>
						                  </tr>
						                </thead>
						                <tbody>
											<tr>
												<td>Personal</td>
												<td>{{$datas->can_evu_hod_job_rel}}</td>
												<td>{{$datas->can_evu_hod_exp}}</td>
												<td>{{$datas->can_evu_hod_know}}</td>
												<td>{{$datas->can_evu_hod_carpro}}</td>
												<td>{{$datas->can_evu_hod_noble}}</td>
												<td>{{$datas->can_evu_hod_pot}}</td>
												<td>{{$datas->can_evu_hod_obtain}}</td>
											</tr>
						              	</tbody>
						            </table>
					            </div>
					            <div class="">
						            <p style="font-size: 11.8px; color: #000;">Piont from 0 to 1.5 = Unsatisfactory, 1.6 to 2.5 = Average, 2.6 to 3.5 = Satisfactory, 3.6 to 4.5 = Good, 4.6 to 5 = Excellent</p>
									<table class="table table-bordered table-striped custom-table datatable" id="preempform">
						                <thead>
						                  <tr class="bg-teal-400" style="white-space : nowrap; color: #fff;">
						                    <th></th>
						                    <th>HR Department</th>
						                    <th>Departmental Head</th>
						                  </tr>
						                </thead>
						                <tbody>
											<tr>
												<td>Candidate Results</td>
												<td>{{$datas->can_evu_hr_cand}}</td>
												<td>{{$datas->can_evu_hod_cand}}</td>
											</tr>
						              	</tbody>
						            </table>
					            </div>
					            <h4 class="card-title mb-0 text-left" style="color: #000000; background-color: #bfbfbf; text-align: center !important;">Approval Authority</h4>
					            <div class="row" style=" margin-top: -80px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Proposed Salary By Coo</label>
											<input type="text" class="form-control" value="{{$datas->can_evu_rec_sal}}" readonly="">
										</div>
									</div>
								    <div class="col-md-6" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">Proposed Designation By COO</label>
											<input type="text" class="form-control" name="can_company" value="{{$datas->can_evu_pro_desg}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style=" margin-top: -160px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Recommended Salary By HR</label>
											<input type="text" class="form-control" value="{{$datas->can_evu_off_salary}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:33.333333%;">
										<div class="form-group">
											<label class="col-form-label">Proposed Designation By HR</label>
											<input type="text" class="form-control" name="can_company" value="{{$datas->can_evu_off_desg}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:66.666666%;">
										<div class="form-group">
											<label class="col-form-label">Candidate Expected Salary</label>
											<input type="text" class="form-control" name="can_company" value="{{$datas->jobapplicant_monthlyexpectedsalary}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style=" margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">COO Remarks</label>
											<textarea rows="4" cols="5" class="form-control" name="" placeholder="Enter message" spellcheck="false" readonly="">
											{{$datas->can_evu_coo_remark}}</textarea>
										</div>
									</div>
								</div>
								<div class="row" style=" margin-top: -160px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Approval</label>
											<input type="text" class="form-control" readonly="" @if($datas->can_evu_approval == "1" )  value = Approved
																					@elseif( $datas->can_evu_approval == "2" )  value =Rejected
																					@elseif( $datas->can_evu_approval == "3" )  value =MTO	
																					@endif >
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:33.333333%;">
										<div class="form-group">
											<label class="col-form-label">Name</label>
											<input type="text" class="form-control" name="can_company" value="{{$datas->can_evu_app_name}}" readonly="">
										</div>
									</div>
								    <div class="col-md-4" style="margin-left:66.666666%;">
										<div class="form-group">
											<label class="col-form-label">Date</label>
											<input type="text" class="form-control" name="can_company" value="{{$datas->can_evu_app_date}}" readonly="">
										</div>
									</div>
								</div>
								<div class="row" style=" margin-top: -80px; margin-right: -15px; margin-left: -15px;">
								    <div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Salary After Probition Period</label>
											<input type="text" class="form-control" value="{{$datas->can_evu_sal_afpro}}" readonly="">
										</div>
									</div>
								    <div class="col-md-6" style="margin-left:50%;">
										<div class="form-group">
											<label class="col-form-label">Final Status</label>
											<input type="text" class="form-control" name="can_company" readonly="" @if($datas->jobapplicant_status == "nothired" )  value = Not Hired
																					@elseif( $datas->jobapplicant_status == "hired" )  value =Hired
																					@elseif( $datas->jobapplicant_status == "evaluateByManager" )  value =Back To COO	
																					@endif >
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
	</body>
</html>