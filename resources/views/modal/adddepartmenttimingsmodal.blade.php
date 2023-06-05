<style>

 .leaveStyle{
	position : relative;
	left : 10px;
	margin-bottom : 12px;
 }

 #message {
   position :relative;
   font-size : 20px;
 }
.redborder{border:1px solid red;}
#loader-ajax2 {
		display:    none;
		position:   fixed;
		z-index:    1000;
		top:        0;
		left:       0;
		height:     100%;
		width:      100%;
		background: rgba( 255, 255, 255, .8 ) 
					url('http://zaradevelopment.com/els/assets/images/loading_bar.gif') 
					50% 50% 
					no-repeat;
	}
</style>
<div id="adddepartmenttimings" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Department Timing</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="{{ URL::to('/adddepartmenttimings')}}" id="submitdeparttime" method="POST"  enctype="multipart/form-data">
			{{ csrf_field() }}
					<div class="form-group">
						<div class="row">
						<div class="col-lg-12">
							<label class="col-form-label">Batch ID<span class="text-danger"></span></label>
							<select class="form-control selectpicker"   placeholder="Select Department" name="dept_id"  required>
								<option selected="" disabled="" value="{{ old('emp_dept') }}">Select Employee Department</option>
								@foreach($depart as $departs)
								<option value={{$departs->dept_id}}>{{$departs->dept_name}}</option>
								@endforeach 
							</select>
						</div>
	                    </div>
					</div> 
					<div class="form-group">
						<label>Arrival Time<span class="text-danger"></span></label>
						<input class="form-control" name="emptime_arrival" type="Time">
					</div> 
					<div class="form-group">
						<label>Departure Time<span class="text-danger"></span></label>
						<input class="form-control" name="emptime_departure" type="Time">
					</div> 
					<div class="form-group">
						<label>Start Date<span class="text-danger"></span></label>
						<div class="cal-icon">
							<input type="text" name="emptime_sdate" class="form-control datetimepicker required_colom" required="required">
						</div>
					</div> 
					<div class="form-group">
						<label>End Date<span class="text-danger"></span></label>
						<div class="cal-icon">
							<input type="text" name="emptime_edate" class="form-control datetimepicker required_colom" required="required">
						</div>
					</div>
					<div class="submit-section">
						<button id="btnsubmit" class="btn btn-primary submit-btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Department Modal -->	
<script>
	$(document).ready(function() {
		$('.selectpicker').selectpicker('refresh');
	});

	if($('.datetimepicker').length > 0) {
		$('.datetimepicker').datetimepicker({
			format: 'YYYY/MM/DD',
			icons: {
				up: "fa fa-angle-up",
				down: "fa fa-angle-down",
				next: 'fa fa-angle-right',
				previous: 'fa fa-angle-left'
			}
		});
	}			
</script>
<script src="{!! asset('public/assets/js/bootstrap-datetimepicker.min.js') !!}"></script>